<?php
/**
 * Make MCA Great Again - WordPress functions.php Snippet
 * 
 * Instructions:
 * 1. Copy the code below and paste it at the bottom of your active theme's functions.php file.
 *    (Path: /wp-content/themes/your-active-theme/functions.php)
 * 2. Update the HubSpot configuration values below with your actual Portal ID and Form ID.
 */

// =========================================================================
// 1. CONFIGURATION
// =========================================================================
define( 'MCA_NOTIFICATION_EMAIL', 'brandon@makemcagreatagain.com' );
define( 'HUBSPOT_PORTAL_ID', 'YOUR_HUBSPOT_PORTAL_ID' ); // Replace with your HubSpot Portal ID
define( 'HUBSPOT_FORM_GUID', 'YOUR_HUBSPOT_FORM_GUID' ); // Replace with your HubSpot Form ID/GUID

// =========================================================================
// 2. PAGE-SPECIFIC SCRIPTS & STYLES ENQUEUE
// =========================================================================
function enqueue_mca_landing_assets() {
    // Only load these assets when the "MCA Landing Page" template is active
    if ( is_page_template( 'page-mca-landing.php' ) ) {
        
        // Enqueue Tailwind CSS CDN with forms and container-queries plugins
        wp_enqueue_script( 
            'tailwind-cdn', 
            'https://cdn.tailwindcss.com?plugins=forms,container-queries', 
            array(), 
            null, 
            false 
        );
        
        // Enqueue Montserrat, Inter, and Work Sans Fonts from Google Fonts
        wp_enqueue_style( 
            'google-fonts-mca', 
            'https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Montserrat:wght@700;800&family=Work+Sans:wght@700&display=swap', 
            array(), 
            null 
        );
        
        // Enqueue Material Symbols Outlined for UI Icons
        wp_enqueue_style( 
            'material-symbols-mca', 
            'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1', 
            array(), 
            null 
        );
    }
}
add_action( 'wp_enqueue_scripts', 'enqueue_mca_landing_assets' );


// =========================================================================
// 3. AJAX FORM SUBMISSION HANDLER
// =========================================================================
function handle_mca_form_submission() {
    // Verify request
    if ( $_SERVER['REQUEST_METHOD'] !== 'POST' ) {
        wp_send_json_error( array( 'message' => 'Invalid request method.' ) );
    }

    // Get and sanitize form fields
    $full_name  = isset( $_POST['full_name'] ) ? sanitize_text_field( wp_unslash( $_POST['full_name'] ) ) : '';
    $company    = isset( $_POST['company'] ) ? sanitize_text_field( wp_unslash( $_POST['company'] ) ) : '';
    $email      = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
    $phone      = isset( $_POST['phone'] ) ? sanitize_text_field( wp_unslash( $_POST['phone'] ) ) : '';
    $intent     = isset( $_POST['Form_Intent'] ) ? sanitize_text_field( wp_unslash( $_POST['Form_Intent'] ) ) : 'Guidelines Request';
    $optin      = isset( $_POST['newsletter_optin'] ) ? 'Yes' : 'No';

    // Validate required fields
    if ( empty( $full_name ) || empty( $email ) || empty( $company ) || empty( $phone ) ) {
        wp_send_json_error( array( 'message' => 'Please fill in all required fields.' ) );
    }

    if ( ! is_email( $email ) ) {
        wp_send_json_error( array( 'message' => 'Please enter a valid email address.' ) );
    }

    // --- A. SEND EMAIL NOTIFICATION TO BRANDON ---
    $subject = sprintf( '[MCA Lead] New %s from %s', $intent, $company );
    
    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'From: Make MCA Great Again <no-reply@' . $_SERVER['HTTP_HOST'] . '>'
    );
    
    $body = "<h2>New Lead Received on Make MCA Great Again Landing Page</h2>";
    $body .= "<table border='1' cellpadding='8' style='border-collapse:collapse; border-color:#ccc;'>";
    $body .= "<tr><td><strong>Form Submission Intent:</strong></td><td>" . esc_html( $intent ) . "</td></tr>";
    $body .= "<tr><td><strong>Full Name:</strong></td><td>" . esc_html( $full_name ) . "</td></tr>";
    $body .= "<tr><td><strong>Company Name:</strong></td><td>" . esc_html( $company ) . "</td></tr>";
    $body .= "<tr><td><strong>Email:</strong></td><td><a href='mailto:" . esc_attr( $email ) . "'>" . esc_html( $email ) . "</a></td></tr>";
    $body .= "<tr><td><strong>Phone Number:</strong></td><td>" . esc_html( $phone ) . "</td></tr>";
    $body .= "<tr><td><strong>Weekly Newsletter Opt-in:</strong></td><td>" . esc_html( $optin ) . "</td></tr>";
    $body .= "<tr><td><strong>Submission Date:</strong></td><td>" . current_time( 'mysql' ) . "</td></tr>";
    $body .= "</table>";
    
    wp_mail( MCA_NOTIFICATION_EMAIL, $subject, $body, $headers );

    // --- B. PUSH TO HUBSPOT CRM VIA FORMS API ---
    if ( HUBSPOT_PORTAL_ID !== 'YOUR_HUBSPOT_PORTAL_ID' && HUBSPOT_FORM_GUID !== 'YOUR_HUBSPOT_FORM_GUID' ) {
        
        // Split name into First & Last for HubSpot standard fields
        $name_parts = explode( ' ', $full_name, 2 );
        $firstname = $name_parts[0];
        $lastname = isset( $name_parts[1] ) ? $name_parts[1] : '';

        // Prepare context data
        $ip_address = $_SERVER['REMOTE_ADDR'];
        $page_url = home_url( $GLOBALS['wp']->request );
        $page_name = get_the_title();

        // Build payload
        $hubspot_data = array(
            'fields' => array(
                array( 'name' => 'email', 'value' => $email ),
                array( 'name' => 'firstname', 'value' => $firstname ),
                array( 'name' => 'lastname', 'value' => $lastname ),
                array( 'name' => 'company', 'value' => $company ),
                array( 'name' => 'phone', 'value' => $phone ),
                array( 'name' => 'form_intent', 'value' => $intent ), // Custom Contact Property in HubSpot
                array( 'name' => 'newsletter_optin', 'value' => ( $optin === 'Yes' ? 'true' : 'false' ) ) // Custom property
            ),
            'context' => array(
                'ipAddress' => $ip_address,
                'pageUri' => $page_url,
                'pageName' => $page_name
            )
        );

        $endpoint = sprintf(
            'https://api.hsforms.com/submissions/v3/integration/submit/%s/%s',
            HUBSPOT_PORTAL_ID,
            HUBSPOT_FORM_GUID
        );

        // Send remote POST request to HubSpot Forms API
        wp_remote_post( $endpoint, array(
            'headers' => array(
                'Content-Type' => 'application/json',
            ),
            'body'    => wp_json_encode( $hubspot_data ),
            'timeout' => 15,
        ));
    }

    // Return success response to AJAX request
    $success_message = ( $intent === 'Guidelines Request' ) 
        ? 'Thank you! The Underwriting Guidelines are on their way to your inbox.' 
        : 'Thank you! Your request for the ISO Agreement has been sent.';

    wp_send_json_success( array( 'message' => $success_message ) );
}

// Hook AJAX handlers (for logged-in and non-logged-in visitors)
add_action( 'wp_ajax_mca_form_submit', 'handle_mca_form_submission' );
add_action( 'wp_ajax_nopriv_mca_form_submit', 'handle_mca_form_submission' );
