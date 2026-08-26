---
name: Industrial Hustle
colors:
  surface: '#0f1419'
  surface-dim: '#0f1419'
  surface-bright: '#353940'
  surface-container-lowest: '#0a0f14'
  surface-container-low: '#181c21'
  surface-container: '#1c2026'
  surface-container-high: '#262a30'
  surface-container-highest: '#31353b'
  on-surface: '#dfe2ea'
  on-surface-variant: '#c6c6ce'
  inverse-surface: '#dfe2ea'
  inverse-on-surface: '#2c3137'
  outline: '#909098'
  outline-variant: '#46464d'
  surface-tint: '#bfc5e4'
  primary: '#bfc5e4'
  on-primary: '#292f48'
  primary-container: '#0a1128'
  on-primary-container: '#767c99'
  inverse-primary: '#575d78'
  secondary: '#b7c4ff'
  on-secondary: '#002682'
  secondary-container: '#0052fe'
  on-secondary-container: '#dfe3ff'
  tertiary: '#00e639'
  on-tertiary: '#003907'
  tertiary-container: '#001701'
  on-tertiary-container: '#009220'
  error: '#ffb4ab'
  on-error: '#690005'
  error-container: '#93000a'
  on-error-container: '#ffdad6'
  primary-fixed: '#dce1ff'
  primary-fixed-dim: '#bfc5e4'
  on-primary-fixed: '#141a32'
  on-primary-fixed-variant: '#3f465f'
  secondary-fixed: '#dde1ff'
  secondary-fixed-dim: '#b7c4ff'
  on-secondary-fixed: '#001452'
  on-secondary-fixed-variant: '#0038b6'
  tertiary-fixed: '#72ff70'
  tertiary-fixed-dim: '#00e639'
  on-tertiary-fixed: '#002203'
  on-tertiary-fixed-variant: '#00530e'
  background: '#0f1419'
  on-background: '#dfe2ea'
  surface-variant: '#31353b'
typography:
  display-lg:
    fontFamily: Montserrat
    fontSize: 64px
    fontWeight: '800'
    lineHeight: 72px
    letterSpacing: -0.02em
  headline-lg:
    fontFamily: Montserrat
    fontSize: 40px
    fontWeight: '700'
    lineHeight: 48px
    letterSpacing: -0.01em
  headline-lg-mobile:
    fontFamily: Montserrat
    fontSize: 32px
    fontWeight: '700'
    lineHeight: 40px
  headline-md:
    fontFamily: Montserrat
    fontSize: 24px
    fontWeight: '700'
    lineHeight: 32px
  body-lg:
    fontFamily: Inter
    fontSize: 18px
    fontWeight: '400'
    lineHeight: 28px
  body-md:
    fontFamily: Inter
    fontSize: 16px
    fontWeight: '400'
    lineHeight: 24px
  label-caps:
    fontFamily: Work Sans
    fontSize: 12px
    fontWeight: '700'
    lineHeight: 16px
    letterSpacing: 0.1em
  button-text:
    fontFamily: Montserrat
    fontSize: 16px
    fontWeight: '700'
    lineHeight: 20px
rounded:
  sm: 0.25rem
  DEFAULT: 0.5rem
  md: 0.75rem
  lg: 1rem
  xl: 1.5rem
  full: 9999px
spacing:
  base: 8px
  section-gap-desktop: 120px
  section-gap-mobile: 64px
  container-max: 1280px
  gutter: 24px
  announcement-height: 40px
  nav-height: 80px
---

## Brand & Style

This design system is built for "Industrial Hustle"—a brand identity that rejects the sterile, overly-polished nature of traditional fintech in favor of a direct, high-energy, and reliable aesthetic. It positions the brand as a champion of the Merchant Cash Advance (MCA) industry, blending "on-the-road" grit with professional financial reliability.

The design style is **High-Contrast / Modern Finance**. It utilizes deep, authoritative dark tones contrasted against vibrant "success" accents. Layouts are structured and unapologetic, using heavy weights and clear information hierarchies to communicate a "no-fluff" attitude. Visual interest is generated through structural geometry, subtle noise textures that evoke industrial materials, and a deliberate absence of generic corporate imagery.

## Colors

The palette is anchored by **Deep Navy (#0A1128)**, providing a stable, professional foundation that allows accent colors to pop with maximum urgency. 

- **Primary:** Deep Navy is used for large surface areas and backgrounds to maintain a "Dark Mode" default that feels premium and authoritative.
- **Secondary:** MCA Blue (#0052FF) acts as the bridge between traditional finance and the new digital era.
- **Tertiary (The "Money" Green):** #00FF41 is the high-visibility accent used exclusively for success states, growth indicators, and primary "Get Funded" actions.
- **Urgent Orange:** Introduced as a secondary accent for high-priority alerts or lead-capture urgency.
- **Neutral:** A cool-toned off-white (#F4F7FF) is used for typography on dark backgrounds to reduce eye strain while maintaining high contrast.

## Typography

The typography strategy pairs the aggressive, masculine energy of **Montserrat** for headlines with the utilitarian precision of **Inter** and **Work Sans**.

- **Headlines:** Set in Montserrat with heavy weights (700-800). Large headings should use tight letter spacing to create a dense, "heavy-duty" visual impact.
- **Body:** Inter provides maximum readability for complex financial information. 
- **Labels:** Work Sans is utilized for metadata, tags, and small labels to leverage its slightly more open character, ensuring legibility at small scales.
- **Scale:** Headlines scale aggressively; mobile displays shift to compact versions to ensure call-to-actions remain above the fold.

## Layout & Spacing

The layout follows a **Fixed-Width Centered Grid** for desktop (12 columns) and a **Fluid Grid** for mobile (4 columns). 

- **Vertical Rhythm:** A strict 8px base unit drives all padding and margins. 
- **Section Breaks:** Use generous vertical spacing (120px) to separate the "Mission" module from lead capture forms, giving the "no-fluff" content room to breathe.
- **Top Bar & Navigation:** The announcement bar is a fixed 40px height with a high-contrast background. The navigation is sticky with a subtle backdrop blur to maintain visibility over scrolling industrial patterns.
- **Reflow:** On mobile, margins reduce to 16px, and grid-based cards stack vertically.

## Elevation & Depth

This system avoids soft, floating shadows in favor of **Tonal Layers** and **Strong Outlines**. 

- **Primary Depth:** Achieved by stacking surfaces. The base layer is `deep-navy`, while interactive cards use a slightly lighter `charcoal-dark`.
- **Outlines:** Instead of shadows, use 1px or 2px solid borders in `MCA Blue` or a low-opacity white to define containers. This creates a more "industrial" and structured feel.
- **Lead Capture Elevation:** High-priority forms use a "Money Green" 2px top border to distinguish them from standard informational cards.
- **Glassmorphism:** Reserved strictly for the sticky navigation bar to provide a "cockpit" feel that floats above the scrolling data and content.

## Shapes

To maintain the "on-the-road" grit and professional reliability, the design system utilizes **Rounded (0.5rem)** corners. This provides a balance between industrial structure and a modern, high-end fintech feel.

- **Standard Elements:** Inputs and smaller buttons use 8px (0.5rem) corners.
- **Large Components:** Hero sections and lead capture cards use 16px (1rem) corners.
- **Interactive Details:** Checkboxes and radio buttons use smaller, subtler rounding to maintain their mechanical appearance while aligning with the updated shape language.

## Components

- **Buttons:** Primary CTAs must be high-contrast (Money Green background with Deep Navy text). Use a "heavy" hover state where the button shifts 2px up with a solid 4px offset "hard" shadow to simulate a physical push-button.
- **Announcement Bar:** Utilizes `urgent-orange` or `MCA Blue` with scrolling text or a single high-impact mission statement.
- **Lead Capture Forms:** Distinctive containers with `charcoal-dark` backgrounds, sharp typography, and `Money Green` primary buttons.
- **File Submission Cards:** Styled with a "drag-and-drop" dashed border in `MCA Blue`, visually lighter than lead capture forms to indicate a secondary step in the funnel.
- **Mission Module:** Uses a full-width background with a subtle "grain" or "concrete" texture overlay, featuring large Montserrat Display typography.
- **Video Grids:** 16:9 aspect ratio containers with thick 4px borders and a play button overlay that uses the `Money Green` accent.
- **Inputs:** Dark backgrounds with a 1px `MCA Blue` border on focus. Labels are always visible, set in `Work Sans` caps.