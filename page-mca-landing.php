<?php
/*
Template Name: MCA Landing Page
*/
?><!DOCTYPE html><html class="dark" lang="en"><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<base id="site-base" href="./">
<script>
(function(){
  var repoName = 'makemcagreatagain';
  var host = window.location.hostname;
  var pathname = window.location.pathname;
  var baseHref = './';
  if (host === 'taimoursohail.github.io') {
    if (pathname.indexOf('/' + repoName + '/') === 0 || pathname === '/' + repoName) {
      baseHref = '/' + repoName + '/';
    }
  } else if (host !== 'localhost' && host !== '127.0.0.1' && host !== '') {
    baseHref = '/';
  }
  var base = document.getElementById('site-base');
  if (base) { base.setAttribute('href', baseHref); }
  window.__ASSET_PREFIX__ = baseHref;
  document.addEventListener('DOMContentLoaded', function(){
    var prefix = window.__ASSET_PREFIX__ || '';
    var styleSheets = document.styleSheets;
    for (var s = 0; s < styleSheets.length; s++) {
      try {
        var rules = styleSheets[s].cssRules || styleSheets[s].rules;
        if (!rules) continue;
        for (var r = 0; r < rules.length; r++) {
          var rule = rules[r];
          if (rule.style && rule.style.backgroundImage) {
            var bg = rule.style.backgroundImage;
            if (bg.indexOf("url('assets/") !== -1 || bg.indexOf('url("assets/') !== -1) {
              var newBg = bg.replace(/url\(['"]assets\//g, 'url(' + (prefix.endsWith('/') ? prefix : prefix + '/') + 'assets/');
              if (newBg !== bg) { rule.style.backgroundImage = newBg; }
            }
          }
        }
      } catch(e) {}
    }
    var imgs = document.querySelectorAll('img[src^="assets/"]');
    for (var i = 0; i < imgs.length; i++) {
      var src = imgs[i].getAttribute('src');
      imgs[i].setAttribute('src', prefix + src);
    }
    var sources = document.querySelectorAll('source[srcset^="assets/"]');
    for (var j = 0; j < sources.length; j++) {
      var ssrc = sources[j].getAttribute('srcset');
      sources[j].setAttribute('srcset', prefix + ssrc);
    }
  });
})();
</script>
<title>Make MCA Great Again</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script>tailwind.config = {darkMode: "class", theme: {extend: {colors: {"tertiary-fixed-dim": "#B8860B", "inverse-surface": "#dfe2ea", outline: "#909098", primary: "#bfc5e4", background: "#0f1419", "on-primary-container": "#767c99", "on-tertiary-fixed-variant": "#5a4206", "deep-navy": "#0A1128", "inverse-on-surface": "#2c3137", "on-tertiary-fixed": "#2a1f02", "primary-fixed": "#dce1ff", "on-tertiary": "#3d2d04", "surface-container": "#1c2026", "surface-container-highest": "#31353b", "inverse-primary": "#575d78", "secondary-fixed-dim": "#b7c4ff", tertiary: "#B8860B", "surface-variant": "#31353b", "on-surface-variant": "#c6c6ce", "urgent-red": "#FF0000", "surface-tint": "#bfc5e4", "error-container": "#93000a", "on-error": "#690005", "secondary-container": "#0052fe", "on-primary-fixed-variant": "#3f465f", "on-error-container": "#ffdad6", "surface-container-high": "#262a30", "primary-container": "#0a1128", "on-secondary-container": "#dfe3ff", "charcoal-dark": "#222222", error: "#ffb4ab", "on-secondary": "#002682", "surface-container-low": "#181c21", "surface-bright": "#353940", "primary-fixed-dim": "#bfc5e4", "tertiary-fixed": "#E6C35C", "on-primary": "#292f48", "outline-variant": "#46464d", "on-background": "#dfe2ea", "secondary-fixed": "#dde1ff", "accent-gold": "#B8860B", "accent-gold-light": "#D4AF37", "accent-gold-dark": "#8B6914", "youtube-red": "#FF0000", "on-tertiary-container": "#D4AF37", "on-surface": "#dfe2ea", "on-secondary-fixed-variant": "#0038b6", secondary: "#b7c4ff", "tertiary-container": "#1a1302", "on-primary-fixed": "#141a32", "surface-container-lowest": "#0a0f14", "on-secondary-fixed": "#001452", "pure-white": "#FFFFFF", surface: "#0f1419", "surface-dim": "#0f1419"}, borderRadius: {DEFAULT: "0.25rem", lg: "0.5rem", xl: "0.75rem", full: "9999px"}, spacing: {"section-gap-desktop": "120px", gutter: "24px", "section-gap-mobile": "64px", "container-max": "1280px", "nav-height": "80px", base: "8px", "announcement-height": "40px"}, fontFamily: {"headline-md": ["Montserrat", "sans-serif"], "headline-lg": ["Montserrat", "sans-serif"], "display-lg": ["Montserrat", "sans-serif"], "button-text": ["Montserrat", "sans-serif"], "body-lg": ["Inter", "sans-serif"], "label-caps": ["Work Sans", "sans-serif"], "headline-lg-mobile": ["Montserrat", "sans-serif"], "body-md": ["Inter", "sans-serif"], headline: ["Montserrat"], display: ["Montserrat"], body: ["Inter"], label: ["Work Sans"]}, fontSize: {"headline-md": ["24px", {lineHeight: "32px", fontWeight: "700"}], "headline-lg": ["40px", {lineHeight: "48px", letterSpacing: "-0.01em", fontWeight: "700"}], "display-lg": ["64px", {lineHeight: "72px", letterSpacing: "-0.02em", fontWeight: "800"}], "button-text": ["16px", {lineHeight: "20px", fontWeight: "700"}], "body-lg": ["18px", {lineHeight: "28px", fontWeight: "400"}], "label-caps": ["12px", {lineHeight: "16px", letterSpacing: "0.1em", fontWeight: "700"}], "headline-lg-mobile": ["32px", {lineHeight: "40px", fontWeight: "700"}], "body-md": ["16px", {lineHeight: "24px", fontWeight: "400"}]}}}};</script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;family=Montserrat:wght@700;800&amp;family=Work+Sans:wght@700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .btn-primary {
            background-color: #FF0000;
            color: #FFFFFF;
            transition: all 0.2s ease;
            box-shadow: 0 4px 0 #B91C1C;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 0 #B91C1C;
            background-color: #FF3333;
        }
        .btn-primary:active {
            transform: translateY(2px);
            box-shadow: 0 2px 0 #B91C1C;
        }
        .noise-bg {
            position: relative;
        }
        .noise-bg::before {
            content: "";
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.05'/%3E%3C/svg%3E");
            pointer-events: none;
            z-index: 0;
        }
        .collage-bg {
            background:
                linear-gradient(135deg, rgba(10,17,40,0.88) 0%, rgba(10,17,40,0.72) 50%, rgba(10,17,40,0.92) 100%),
                url('assets/WhatsApp Image 2026-08-25 at 22.19.26 (2).jpeg') center center / cover no-repeat;
            background-size: cover, cover;
        }
        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }
        .accordion-content.open {
            max-height: 500px;
        }
        .shader-layer {
            z-index: 0;
            filter: blur(4px) saturate(0.85);
            opacity: 0.78;
        }
        .content-layer {
            position: relative;
            z-index: 1;
        }
    </style>
<script>
window.__WP_AJAX_URL__ = '<?php echo esc_url( admin_url( "admin-ajax.php" ) ); ?>';
</script>
</head>
<body class="bg-background text-on-surface font-body-md antialiased overflow-x-hidden selection:bg-accent-gold selection:text-deep-navy">

<!-- Shader Background -->
<div class="fixed inset-0 w-full h-full shader-layer" style="display:block;">
<canvas id="shader-canvas-ANIMATION_6" style="display:block;width:100%;height:100%"></canvas>
<script>
(function() {
  const canvas = document.getElementById('shader-canvas-ANIMATION_6');
  function syncSize() {
    const w = canvas.clientWidth  || 1280;
    const h = canvas.clientHeight || 720;
    if (canvas.width !== w || canvas.height !== h) {
      canvas.width  = w;
      canvas.height = h;
    }
  }
  if (typeof ResizeObserver !== 'undefined') {
    new ResizeObserver(syncSize).observe(canvas);
  }
  syncSize();
  const gl = canvas.getContext('webgl') || canvas.getContext('experimental-webgl');
  if (!gl) return;
  const vs = `attribute vec2 a_position;
varying vec2 v_texCoord;
void main() {
  v_texCoord = a_position * 0.5 + 0.5;
  gl_Position = vec4(a_position, 0.0, 1.0);
}`;
  const fs = `precision highp float;
uniform float u_time;
uniform vec2 u_resolution;
uniform vec2 u_mouse;
varying vec2 v_texCoord;
void main() {
    vec2 uv = v_texCoord;
    vec2 mouse = u_mouse / u_resolution;
    vec2 distVec = uv - mouse;
    float dist = length(distVec);
    vec2 distort = distVec * (0.03 / (dist * 8.0 + 0.8));
    vec2 uv2 = uv + distort;
    vec3 color1 = vec3(0.07, 0.11, 0.24);
    vec3 color2 = vec3(0.11, 0.15, 0.22);
    vec3 color3 = vec3(0.17, 0.12, 0.04);
    float noise = fract(sin(dot(uv2, vec2(12.9898, 78.233))) * 43758.5453);
    float n2 = fract(sin(dot(uv2 * 2.3, vec2(39.346, 11.135))) * 24634.634);
    float wave = sin(uv2.x * 10.0 + u_time * 0.5 + dist * 8.0) * cos(uv2.y * 6.0 - u_time * 0.4 - dist * 6.0);
    wave += sin(uv2.y * 8.0 + u_time * 0.9 + dist * 5.0) * 0.5;
    wave += sin((uv2.x + uv2.y) * 5.0 + u_time * 0.3) * 0.35;
    float glow = 1.0 - smoothstep(0.0, 0.5, dist);
    float ring = smoothstep(0.06, 0.0, abs(dist - (0.23 + sin(u_time * 0.7) * 0.06)));
    float softGlow = 1.0 - smoothstep(0.0, 0.85, dist);
    vec3 accent = vec3(0.76, 0.54, 0.07);
    vec3 accentLight = vec3(0.92, 0.70, 0.16);
    float pulse = sin(u_time * 1.0) * 0.5 + 0.5;
    vec3 finalColor = mix(color1, color2, wave * 0.5 + 0.5);
    finalColor = mix(finalColor, color3, n2 * 0.22);
    finalColor += accent * glow * 0.42;
    finalColor += accentLight * ring * (0.45 + pulse * 0.35);
    finalColor += accent * softGlow * 0.16;
    finalColor += noise * 0.045;
    finalColor += (wave * 0.5 + 0.5) * vec3(0.02, 0.015, 0.0);
    float scanline = sin(uv.y * 1000.0) * 0.008;
    finalColor -= scanline;
    vec2 vigUV = uv - 0.5;
    float vignette = 1.0 - smoothstep(0.55, 0.98, length(vigUV));
    vignette = mix(0.55, 1.0, vignette);
    finalColor *= vignette;
    gl_FragColor = vec4(finalColor, 1.0);
}`;
  function cs(type, src) {
    const s = gl.createShader(type);
    gl.shaderSource(s, src);
    gl.compileShader(s);
    return s;
  }
  const prog = gl.createProgram();
  gl.attachShader(prog, cs(gl.VERTEX_SHADER, vs));
  gl.attachShader(prog, cs(gl.FRAGMENT_SHADER, fs));
  gl.linkProgram(prog);
  gl.useProgram(prog);
  const buf = gl.createBuffer();
  gl.bindBuffer(gl.ARRAY_BUFFER, buf);
  gl.bufferData(gl.ARRAY_BUFFER, new Float32Array([-1,-1, 1,-1, -1,1, 1,1]), gl.STATIC_DRAW);
  const pos = gl.getAttribLocation(prog, 'a_position');
  gl.enableVertexAttribArray(pos);
  gl.vertexAttribPointer(pos, 2, gl.FLOAT, false, 0, 0);
  const uTime = gl.getUniformLocation(prog, 'u_time');
  const uRes = gl.getUniformLocation(prog, 'u_resolution');
  const uMouse = gl.getUniformLocation(prog, 'u_mouse');
  let mouse = { x: canvas.width / 2, y: canvas.height / 2 };
  window.addEventListener('mousemove', (event) => {
    const rect = canvas.getBoundingClientRect();
    if (rect.width && rect.height) {
      const nx = (event.clientX - rect.left) / rect.width;
      const ny = 1.0 - (event.clientY - rect.top) / rect.height;
      mouse.x = nx * canvas.width;
      mouse.y = ny * canvas.height;
    }
  });
  function render(t) {
    if (typeof ResizeObserver === 'undefined') syncSize();
    gl.viewport(0, 0, canvas.width, canvas.height);
    if (uTime) gl.uniform1f(uTime, t * 0.001);
    if (uRes) gl.uniform2f(uRes, canvas.width, canvas.height);
    if (uMouse) gl.uniform2f(uMouse, mouse.x, mouse.y);
    gl.drawArrays(gl.TRIANGLE_STRIP, 0, 4);
    requestAnimationFrame(render);
  }
  render(0);
})();
</script>
</div>

<div class="content-layer">

<!-- Top Sticky Announcement Bar -->
<div class="h-announcement-height flex items-center justify-center px-4 md:px-gutter font-label-caps text-label-caps sticky top-0 z-[50] text-pure-white" style="background-color: #FF0000; color: #FFFFFF;">
<div class="flex items-center justify-between md:justify-center w-full max-w-container-max gap-4 text-[10px] md:text-[12px]">
<span class="hidden md:inline">&nbsp; ðŸ“º Catch our latest deal breakdowns &amp; industry insights: @makeMCAgreatagain</span>
<span class="md:hidden font-semibold">ðŸ“º @makeMCAgreatagain</span>
<a class="bg-deep-navy text-pure-white px-2 py-1 md:px-3 md:py-1 rounded font-button-text hover:bg-surface-container-highest transition-colors flex items-center gap-1 shrink-0 text-[10px] md:text-[12px]" href="https://www.youtube.com/@makeMCAgreatagain" target="_blank" rel="noopener">
<svg class="w-[12px] h-[12px] md:w-[14px] md:h-[14px]" viewBox="0 0 24 24" fill="#FF0000"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
<span class="hidden sm:inline">Subscribe on YouTube</span>
<span class="sm:hidden">Subscribe</span>
</a>
</div>
</div>

<!-- TopAppBar -->
<header class="bg-deep-navy/90 backdrop-blur-md z-50 border-b border-outline-variant sticky top-announcement-height w-full">
<div class="h-[nav-height] flex items-center justify-between px-gutter max-w-container-max mx-auto">
<a class="font-headline-md font-bold text-accent-gold tracking-tighter flex items-center gap-2 hover:opacity-80 transition-opacity" href="#">
<img src="assets/LOGO.jpeg" alt="Make MCA Great Again Logo" class="w-10 h-10 rounded object-cover">
<span class="hidden sm:inline">MAKE MCA GREAT AGAIN</span>
</a>
<nav class="hidden md:flex items-center gap-6">
<a class="text-on-surface-variant hover:text-accent-gold transition-colors font-button-text text-button-text" href="#process">Process</a>
<a class="text-on-surface-variant hover:text-accent-gold transition-colors font-button-text text-button-text" href="#videos">Videos</a>
<a class="text-on-surface-variant hover:text-accent-gold transition-colors font-button-text text-button-text" href="#submit">Submit File</a>
<a class="text-on-surface-variant hover:text-accent-gold transition-colors font-button-text text-button-text" href="#testimonials">Reviews</a>
<a class="text-on-surface-variant hover:text-accent-gold transition-colors font-button-text text-button-text" href="#faq">FAQ</a>
<a class="text-on-surface-variant hover:text-accent-gold transition-colors font-button-text text-button-text" href="#contact">Contact</a>
</nav>
<div class="hidden lg:flex items-center gap-4">
<a class="border border-accent-gold text-accent-gold px-4 py-2 rounded font-button-text text-button-text hover:bg-accent-gold/10 transition-colors" href="https://calendly.com/" target="_blank" rel="noopener">
<span class="material-symbols-outlined text-[18px] mr-1">calendar_month</span>
Schedule a Call
</a>
<a class="btn-primary px-6 py-2 rounded font-button-text text-button-text" href="#guidelines">Request ISO Agreement</a>
</div>
<button id="mobile-menu-btn" aria-label="Open Menu" class="lg:hidden flex flex-col justify-center items-center w-10 h-10 gap-1.5 p-2 rounded-lg hover:bg-surface-container-high focus:outline-none group transition-all duration-300">
<span class="w-6 h-0.5 bg-accent-gold rounded-full transition-all duration-300 origin-center group-[.open]:rotate-45 group-[.open]:translate-y-2"></span>
<span class="w-6 h-0.5 bg-accent-gold rounded-full transition-all duration-300 group-[.open]:opacity-0"></span>
<span class="w-6 h-0.5 bg-accent-gold rounded-full transition-all duration-300 origin-center group-[.open]:-rotate-45 group-[.open]:-translate-y-2"></span>
</button>
</div>
</header>

<!-- Mobile Hamburger Menu Drawer -->
<div id="mobile-menu-drawer" class="fixed inset-0 z-[55] pointer-events-none">
<div id="mobile-menu-overlay" class="absolute inset-0 bg-black/60 opacity-0 transition-opacity duration-300"></div>
<div id="mobile-menu-panel" class="absolute top-0 right-0 h-full w-[85%] max-w-[360px] bg-deep-navy border-l border-outline-variant shadow-2xl transform translate-x-full transition-transform duration-300 ease-out flex flex-col">
<div class="flex items-center justify-between p-5 border-b border-outline-variant">
<span class="font-label-caps text-label-caps text-accent-gold">MENU</span>
<button id="mobile-menu-close" aria-label="Close Menu" class="text-on-surface-variant hover:text-accent-gold p-2 hover:bg-surface-container-high rounded transition-colors">
<span class="material-symbols-outlined">close</span>
</button>
</div>
<nav class="flex flex-col p-5 gap-1 overflow-y-auto flex-1">
<a class="mobile-nav-link text-on-surface hover:text-accent-gold hover:bg-surface-container-high font-button-text text-button-text px-4 py-3 rounded transition-colors flex items-center gap-3" href="#process">
<span class="material-symbols-outlined text-accent-gold text-[20px]">schema</span>
Process
</a>
<a class="mobile-nav-link text-on-surface hover:text-accent-gold hover:bg-surface-container-high font-button-text text-button-text px-4 py-3 rounded transition-colors flex items-center gap-3" href="#videos">
<span class="material-symbols-outlined text-accent-gold text-[20px]">play_circle</span>
Videos
</a>
<a class="mobile-nav-link text-on-surface hover:text-accent-gold hover:bg-surface-container-high font-button-text text-button-text px-4 py-3 rounded transition-colors flex items-center gap-3" href="#submit">
<span class="material-symbols-outlined text-accent-gold text-[20px]">forward_to_inbox</span>
Submit File
</a>
<a class="mobile-nav-link text-on-surface hover:text-accent-gold hover:bg-surface-container-high font-button-text text-button-text px-4 py-3 rounded transition-colors flex items-center gap-3" href="#testimonials">
<span class="material-symbols-outlined text-accent-gold text-[20px]">reviews</span>
Reviews
</a>
<a class="mobile-nav-link text-on-surface hover:text-accent-gold hover:bg-surface-container-high font-button-text text-button-text px-4 py-3 rounded transition-colors flex items-center gap-3" href="#faq">
<span class="material-symbols-outlined text-accent-gold text-[20px]">help_center</span>
FAQ
</a>
<a class="mobile-nav-link text-on-surface hover:text-accent-gold hover:bg-surface-container-high font-button-text text-button-text px-4 py-3 rounded transition-colors flex items-center gap-3" href="#contact">
<span class="material-symbols-outlined text-accent-gold text-[20px]">mail</span>
Contact
</a>
</nav>
<div class="p-5 border-t border-outline-variant flex flex-col gap-3">
<a class="mobile-nav-link border border-accent-gold text-accent-gold px-5 py-3 rounded font-button-text text-button-text hover:bg-accent-gold/10 transition-colors flex items-center justify-center gap-2" href="https://calendly.com/" target="_blank" rel="noopener">
<span class="material-symbols-outlined text-[18px]">calendar_month</span>
Schedule a Call
</a>
<a class="mobile-nav-link btn-primary px-5 py-3 rounded font-button-text text-button-text flex items-center justify-center gap-2" href="#guidelines">
<span class="material-symbols-outlined text-[18px]">description</span>
Request ISO Agreement
</a>
</div>
</div>
</div>

<main class="w-full">

<!-- Hero Section -->
<section class="noise-bg collage-bg min-h-[921px] flex items-center relative py-section-gap-mobile md:py-section-gap-desktop border-b border-outline-variant">
<div class="max-w-container-max mx-auto px-gutter w-full grid grid-cols-1 lg:grid-cols-2 gap-12 relative z-10">
<div class="flex flex-col justify-center gap-6">
<h1 class="font-display-lg text-headline-lg-mobile md:text-display-lg text-pure-white leading-tight">
MAKE <span class="text-accent-gold">MCA</span> GREAT AGAIN.
</h1>
<h2 class="font-headline-md text-headline-md text-on-surface-variant border-l-4 border-accent-gold pl-4">
Zero-Fluff Underwriting. Direct Decisions. Fast Turnarounds.
</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-lg mt-4">
I help high-performing ISOs get <strong class="text-pure-white">$100k+ monthly revenue</strong> files funded fastâ€”no portal runarounds, no underwriting games, just direct decisions and reliable payouts.<br><br>
I don't just sit behind a desk pushing paper. I travel the country, hit ISO floors face-to-face, and champion your deals directly. The alternative finance space was built on backing the hustleâ€”let's streamline your submissions, protect your margins, and scale your floor's volume.
</p>
<div class="flex flex-wrap gap-4 mt-8">
<div class="flex items-center gap-2 text-accent-gold">
<span class="material-symbols-outlined">done</span>
<span class="font-label-caps text-label-caps text-pure-white">Fast Turnaround (Hours, Not Days)</span>
</div>
<div class="flex items-center gap-2 text-accent-gold">
<span class="material-symbols-outlined">done</span>
<span class="font-label-caps text-label-caps text-pure-white">Bâ€“D Paper Funded</span>
</div>
<div class="flex items-center gap-2 text-accent-gold">
<span class="material-symbols-outlined">done</span>
<span class="font-label-caps text-label-caps text-pure-white">$100k+ Monthly Revenue Files</span>
</div>
<div class="flex items-center gap-2 text-accent-gold">
<span class="material-symbols-outlined">done</span>
<span class="font-label-caps text-label-caps text-pure-white">Real Economic Impact</span>
</div>
</div>
</div>
<!-- Dual-Trigger Lead Form -->
<div class="bg-charcoal-dark/95 backdrop-blur-sm border-t-2 border-accent-gold p-8 rounded-lg shadow-2xl flex flex-col gap-6 relative" id="guidelines">
<div class="absolute -top-4 -right-4 bg-urgent-red text-pure-white font-label-caps text-label-caps px-4 py-1 rounded-sm rotate-3 shadow-lg">
HIGH PRIORITY
</div>
<div>
<h3 class="font-headline-md text-headline-md text-pure-white">Get Guidelines &amp; ISO Agreement</h3>
<p class="font-body-md text-body-md text-on-surface-variant mt-2">Enter your info below to get onboarded, receive our full funding parameters, and connect directly.</p>
</div>
<form class="flex flex-col gap-4" id="onboardingForm">
<input id="formIntent" name="Form_Intent" type="hidden" value="">
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<div class="flex flex-col gap-1">
<label class="font-label-caps text-label-caps text-on-surface-variant">Full Name</label>
<input class="bg-surface-container border border-outline-variant rounded p-3 text-pure-white focus:border-secondary-container focus:ring-1 focus:ring-secondary-container transition-colors" placeholder="John Doe" required="" type="text" name="full_name">
</div>
<div class="flex flex-col gap-1">
<label class="font-label-caps text-label-caps text-on-surface-variant">ISO / Company Name</label>
<input class="bg-surface-container border border-outline-variant rounded p-3 text-pure-white focus:border-secondary-container focus:ring-1 focus:ring-secondary-container transition-colors" placeholder="Acme Brokerage" required="" type="text" name="company">
</div>
</div>
<div class="flex flex-col gap-1">
<label class="font-label-caps text-label-caps text-on-surface-variant">Work Email</label>
<input class="bg-surface-container border border-outline-variant rounded p-3 text-pure-white focus:border-secondary-container focus:ring-1 focus:ring-secondary-container transition-colors" placeholder="john@acme.com" required="" type="email" name="email">
</div>
<div class="flex flex-col gap-1">
<label class="font-label-caps text-label-caps text-on-surface-variant">Cell / Direct Phone Number</label>
<input class="bg-surface-container border border-outline-variant rounded p-3 text-pure-white focus:border-secondary-container focus:ring-1 focus:ring-secondary-container transition-colors" placeholder="(555) 123-4567" required="" type="tel" name="phone">
</div>
<label class="flex items-center gap-3 mt-2 cursor-pointer group">
<input checked="" class="form-checkbox bg-surface-container border-outline-variant text-accent-gold focus:ring-accent-gold rounded w-5 h-5" type="checkbox" name="newsletter_optin">
<span class="font-body-md text-body-md text-on-surface-variant group-hover:text-pure-white transition-colors">Join the @makeMCAgreatagain weekly newsletter for deal breakdowns, underwriting tips, and market insights.</span>
</label>
<div class="flex flex-col gap-3 mt-4">
<button class="w-full py-4 rounded-xl font-button-text text-button-text text-pure-white bg-gradient-to-r from-red-600 to-red-500 hover:from-red-500 hover:to-red-400 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 focus:ring-offset-charcoal-dark shadow-lg shadow-red-600/30 hover:shadow-red-500/40 hover:-translate-y-0.5 active:translate-y-0 transition-all duration-200 flex items-center justify-center gap-2" onclick="submitOnboardingForm('Guidelines Request')" type="button">
<span class="material-symbols-outlined text-[20px]">description</span>
SEND UNDERWRITING GUIDELINES
</button>
<button class="w-full py-4 rounded-xl font-button-text text-button-text border border-outline-variant/60 text-pure-white bg-surface-container/20 hover:bg-red-500/10 hover:border-red-500/50 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 focus:ring-offset-charcoal-dark hover:-translate-y-0.5 active:translate-y-0 transition-all duration-200 flex items-center justify-center gap-2" onclick="submitOnboardingForm('ISO Agreement Request')" type="button">
<span class="material-symbols-outlined text-[20px]">handshake</span>
REQUEST ISO AGREEMENT
</button>
</div>
</form>
</div>
</div>
</section>

<!-- How We Make MCA Great Again (Process) -->
<section class="py-section-gap-mobile md:py-section-gap-desktop bg-surface/80 backdrop-blur-sm px-gutter border-b border-outline-variant" id="process">
<div class="max-w-container-max mx-auto flex flex-col gap-12">
<div class="text-center flex flex-col items-center gap-4">
<span class="font-label-caps text-label-caps text-accent-gold tracking-widest">OUR SIMPLE PROCESS</span>
<h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-pure-white">How We Make <span class="text-accent-gold">MCA</span> Great Again</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">No hoops. No hidden games. Just a streamlined, transparent approach that respects your time and your margins.</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<div class="bg-surface-container border border-outline-variant rounded-xl p-8 flex flex-col gap-4 hover:border-accent-gold transition-colors group">
<div class="w-14 h-14 rounded-full bg-accent-gold/15 flex items-center justify-center border border-accent-gold/30 mb-2 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-accent-gold text-[28px]">send</span>
</div>
<h3 class="font-headline-md text-headline-md text-pure-white">Streamlined Submissions</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Just two things to get started â€” a complete application and the last 3 months' bank statements. No 40-field portals, no document chases.</p>
<div class="font-label-caps text-label-caps text-accent-gold mt-auto">Step 01</div>
</div>

<div class="bg-surface-container border border-outline-variant rounded-xl p-8 flex flex-col gap-4 hover:border-accent-gold transition-colors group">
<div class="w-14 h-14 rounded-full bg-accent-gold/15 flex items-center justify-center border border-accent-gold/30 mb-2 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-accent-gold text-[28px]">bolt</span>
</div>
<h3 class="font-headline-md text-headline-md text-pure-white">Fast Decisions in Hours</h3>
<p class="font-body-md text-body-md text-on-surface-variant">We review and decide in hours, not days. Every file gets real underwriter eyes â€” no black-box auto-declines, no disappearing submissions.</p>
<div class="font-label-caps text-label-caps text-accent-gold mt-auto">Step 02</div>
</div>

<div class="bg-surface-container border border-outline-variant rounded-xl p-8 flex flex-col gap-4 hover:border-accent-gold transition-colors group">
<div class="w-14 h-14 rounded-full bg-accent-gold/15 flex items-center justify-center border border-accent-gold/30 mb-2 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-accent-gold text-[28px]">support_agent</span>
</div>
<h3 class="font-headline-md text-headline-md text-pure-white">Clear, Contextual Answers</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Every yes or no comes with context. Declines aren't generic â€” you'll know exactly why, and what to fix so the next file closes.</p>
<div class="font-label-caps text-label-caps text-accent-gold mt-auto">Step 03</div>
</div>
</div>

<!-- Underwriting Criteria -->
<div class="bg-deep-navy/80 backdrop-blur-sm border border-accent-gold/30 rounded-2xl p-8 md:p-12 mt-8">
<div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
<div class="flex flex-col gap-6">
<h3 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-pure-white">Underwriting Criteria</h3>
<p class="font-body-lg text-body-lg text-on-surface-variant">Know before you submit â€” here's exactly what we look at to get your file to the closing table fast.</p>
<ul class="flex flex-col gap-4">
<li class="flex items-start gap-3">
<div class="w-10 h-10 rounded-full bg-accent-gold/20 flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-accent-gold">account_balance</span>
</div>
<div>
<h4 class="font-button-text text-button-text text-pure-white">Revenue Qualification</h4>
<p class="font-body-md text-body-md text-on-surface-variant"><strong class="text-accent-gold">$100k+ true monthly business revenue</strong> required (excludes Zelle, Cash App, and inter-account transfers).</p>
</div>
</li>
<li class="flex items-start gap-3">
<div class="w-10 h-10 rounded-full bg-accent-gold/20 flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-accent-gold">grading</span>
</div>
<div>
<h4 class="font-button-text text-button-text text-pure-white">Paper Grade Flexibility</h4>
<p class="font-body-md text-body-md text-on-surface-variant">We actively fund <strong class="text-accent-gold">B through D paper</strong> â€” not just the cherry-picked A files everyone chases.</p>
</div>
</li>
<li class="flex items-start gap-3">
<div class="w-10 h-10 rounded-full bg-accent-gold/20 flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-accent-gold">description</span>
</div>
<div>
<h4 class="font-button-text text-button-text text-pure-white">Document Requirements</h4>
<p class="font-body-md text-body-md text-on-surface-variant">Completed application + last 3â€“4 months bank statements. That's the minimum viable file â€” anything else is a bonus.</p>
</div>
</li>
</ul>
</div>
<div class="relative">
<img src="assets/WhatsApp Image 2026-08-25 at 22.19.23 (1).jpeg" alt="Brandon working with partners" class="w-full h-[420px] object-cover rounded-2xl border-2 border-outline-variant shadow-2xl">
<div class="absolute -bottom-6 -left-6 bg-accent-gold text-deep-navy font-label-caps text-label-caps px-5 py-3 rounded shadow-xl">
$100K+ REVENUE FILES
</div>
</div>
</div>
</div>
</div>
</section>

<!-- Direct File Submission -->
<section class="py-section-gap-mobile md:py-section-gap-desktop bg-surface-container-lowest/80 backdrop-blur-sm px-gutter border-b border-outline-variant" id="submit">
<div class="max-w-container-max mx-auto flex flex-col md:flex-row items-center gap-12">
<div class="flex-1 flex flex-col gap-6">
<h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-pure-white">Have a <span class="text-accent-gold">$100k+ Revenue</span> File Ready to Fund?</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant border-l-2 border-secondary-container pl-4">
We don't mess around with clunky portals. Just email us your app and bank statements directly. Clean, fast, and straight to the decision-makers.
</p>
<div class="bg-surface-container-highest p-6 rounded-lg border border-dashed border-secondary-container mt-4">
<h4 class="font-label-caps text-label-caps text-pure-white mb-4 flex items-center gap-2">
<span class="material-symbols-outlined text-accent-gold">fact_check</span>
SUBMISSION CHECKLIST
</h4>
<ul class="flex flex-col gap-3 font-body-md text-body-md text-on-surface-variant">
<li class="flex items-start gap-2">
<span class="material-symbols-outlined text-accent-gold shrink-0 text-[20px]">check_circle</span>
$100k+ Average Monthly Revenue (excludes Zelle, Cash App, inter-account transfers)
</li>
<li class="flex items-start gap-2">
<span class="material-symbols-outlined text-accent-gold shrink-0 text-[20px]">check_circle</span>
Complete Application
</li>
<li class="flex items-start gap-2">
<span class="material-symbols-outlined text-accent-gold shrink-0 text-[20px]">check_circle</span>
Last 3â€“4 Months Bank Statements
</li>
</ul>
</div>
<a class="btn-primary w-fit px-8 py-4 rounded font-button-text text-button-text flex items-center gap-2 mt-4" href="mailto:brandon@makemcagreatagain.com">
<span class="material-symbols-outlined">mail</span>
EMAIL YOUR FILE NOW
</a>
<span class="font-body-md text-body-md text-on-surface-variant mt-2">Send directly to: <strong class="text-accent-gold">brandon@makemcagreatagain.com</strong></span>
</div>
<div class="flex-1 w-full relative">
<div class="aspect-[4/5] w-full max-w-md mx-auto rounded-2xl overflow-hidden border-2 border-outline-variant shadow-2xl group hover:border-accent-gold transition-colors duration-500 relative">
<img src="assets/WhatsApp Image 2026-08-25 at 22.19.24 (1).jpeg" alt="Brandon at an industry event" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
<div class="absolute inset-0 bg-gradient-to-t from-deep-navy via-deep-navy/20 to-transparent"></div>
<div class="absolute bottom-6 left-6 right-6 flex flex-col gap-2">
<div class="w-16 h-16 rounded-full bg-accent-gold/15 flex items-center justify-center border border-accent-gold/40 backdrop-blur-sm">
<span class="material-symbols-outlined text-accent-gold text-[32px]">forward_to_inbox</span>
</div>
<span class="font-label-caps text-label-caps text-pure-white">Direct to Underwriting</span>
<span class="font-body-md text-body-md text-on-surface-variant">No portals. No middlemen. Just results.</span>
</div>
</div>
</div>
</div>
</section>

<!-- Video Hub & Social -->
<section class="py-section-gap-mobile md:py-section-gap-desktop bg-surface/80 backdrop-blur-sm px-gutter border-b border-outline-variant" id="videos">
<div class="max-w-container-max mx-auto flex flex-col gap-12">
<div class="flex flex-col md:flex-row justify-between items-end gap-6 border-b border-outline-variant pb-6">
<div>
<h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-pure-white">Follow the Movement</h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-2 max-w-2xl">Watch our real-world deal breakdowns, market analyses, and ISO floor visits across all platforms.</p>
<p class="font-body-lg text-body-lg text-accent-gold mt-2 font-bold">@makeMCAgreatagain</p>
</div>
<div class="flex gap-3">
<a class="w-11 h-11 rounded-full bg-surface-container-highest border border-outline-variant flex items-center justify-center hover:border-accent-gold hover:text-accent-gold transition-colors text-on-surface-variant" href="https://www.linkedin.com/" target="_blank" rel="noopener" title="LinkedIn">
<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
</a>
<a class="w-11 h-11 rounded-full bg-surface-container-highest border border-outline-variant flex items-center justify-center hover:border-accent-gold hover:text-accent-gold transition-colors text-on-surface-variant" href="https://twitter.com/" target="_blank" rel="noopener" title="Twitter/X">
<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
</a>
<a class="w-11 h-11 rounded-full bg-surface-container-highest border border-outline-variant flex items-center justify-center hover:border-accent-gold hover:text-accent-gold transition-colors text-on-surface-variant" href="https://instagram.com/" target="_blank" rel="noopener" title="Instagram">
<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
</a>
<a class="w-11 h-11 rounded-full bg-surface-container-highest border border-outline-variant flex items-center justify-center hover:border-accent-gold hover:text-accent-gold transition-colors text-on-surface-variant" href="https://facebook.com/" target="_blank" rel="noopener" title="Facebook">
<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
</a>
<a class="w-11 h-11 rounded-full bg-surface-container-highest border border-outline-variant flex items-center justify-center hover:border-accent-gold hover:text-accent-gold transition-colors text-on-surface-variant" href="https://youtube.com/@makeMCAgreatagain" target="_blank" rel="noopener" title="YouTube">
<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
</a>
<a class="w-11 h-11 rounded-full bg-surface-container-highest border border-outline-variant flex items-center justify-center hover:border-accent-gold hover:text-accent-gold transition-colors text-on-surface-variant" href="https://blogger.com/" target="_blank" rel="noopener" title="Blogger">
<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M21.976 24H2.024C.907 24 0 23.093 0 21.976V2.024C0 .907.907 0 2.024 0h19.952C23.093 0 24 .907 24 2.024v19.952C24 23.093 23.093 24 21.976 24zM12.088 4.539c-3.187 0-5.775 2.363-6.029 5.387-.006.05-.009.1-.009.15v.196h6.35c.278 0 .52.187.576.445l.013.094.366 2.148a.61.61 0 0 1-.009.257.595.595 0 0 1-.567.456H6.05v4.092h5.952c3.18 0 5.793-2.34 6.042-5.342.017-.188.026-.378.026-.57 0-2.92-2.403-5.313-5.572-5.313h-.41zm-3.082 3.16a.968.968 0 1 1 0 1.935.968.968 0 0 1 0-1.935zm6.18 4.804a.968.968 0 1 1 0 1.935.968.968 0 0 1 0-1.935z"/></svg>
</a>
</div>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="group">
<div class="aspect-video bg-charcoal-dark border-4 border-surface-container-highest rounded-sm relative overflow-hidden mb-4 group-hover:border-accent-gold transition-colors duration-300 shadow-lg">
<iframe class="w-full h-full" src="https://www.youtube.com/embed/BGIXFkAS8mw?si=UTjP3c8f7Jyx7Wbm" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>
<h4 class="font-button-text text-button-text text-pure-white group-hover:text-accent-gold transition-colors">Deal Breakdowns &amp; Underwriting</h4>
<p class="font-body-md text-body-md text-on-surface-variant mt-1 line-clamp-2">Deep dive into recent $100k+ files and why they got funded fast.</p>
</div>

<div class="group">
<div class="aspect-video bg-charcoal-dark border-4 border-surface-container-highest rounded-sm relative overflow-hidden mb-4 group-hover:border-accent-gold transition-colors duration-300 shadow-lg">
<iframe class="w-full h-full" src="https://www.youtube.com/embed/pBSuuNVOm1M?si=QtZKB9fH0WZwKl4o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>
<h4 class="font-button-text text-button-text text-pure-white group-hover:text-accent-gold transition-colors">ISO Culture &amp; On the Road</h4>
<p class="font-body-md text-body-md text-on-surface-variant mt-1 line-clamp-2">Traveling to partner floors, shaking hands, and building real relationships.</p>
</div>

<div class="group">
<div class="aspect-video bg-charcoal-dark border-4 border-surface-container-highest rounded-sm relative overflow-hidden mb-4 group-hover:border-accent-gold transition-colors duration-300 shadow-lg">
<iframe class="w-full h-full" src="https://www.youtube.com/embed/TfJta_SvxFM?si=dSPi-btGq71_NdJL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>
<h4 class="font-button-text text-button-text text-pure-white group-hover:text-accent-gold transition-colors">Market Insights &amp; Strategy</h4>
<p class="font-body-md text-body-md text-on-surface-variant mt-1 line-clamp-2">Where the MCA industry is heading and how to stay ahead of the curve.</p>
</div>
</div>
</div>
</section>

<!-- Testimonials / LinkedIn Reviews -->
<section class="py-section-gap-mobile md:py-section-gap-desktop bg-surface-container-lowest/80 backdrop-blur-sm px-gutter border-b border-outline-variant" id="testimonials">
<div class="max-w-container-max mx-auto flex flex-col gap-12">
<div class="text-center flex flex-col items-center gap-4">
<div class="w-14 h-14 rounded-full bg-accent-gold/15 flex items-center justify-center border border-accent-gold/30">
<svg class="w-7 h-7 text-accent-gold" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
</div>
<span class="font-label-caps text-label-caps text-accent-gold tracking-widest">VERIFIED LINKEDIN REVIEWS</span>
<h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-pure-white">What ISOs &amp; Partners <span class="text-accent-gold">Actually Say</span></h2>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">Real feedback from real brokers who've closed deals with us. No paid testimonials â€” just straight talk from the floor.</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="bg-surface-container border border-outline-variant rounded-xl p-6 flex flex-col gap-4 hover:border-accent-gold/50 transition-colors">
<div class="flex items-center gap-3">
<div class="w-12 h-12 rounded-full bg-gradient-to-br from-accent-gold to-accent-gold-dark flex items-center justify-center text-deep-navy font-bold font-headline-md">JM</div>
<div class="flex flex-col">
<span class="font-button-text text-button-text text-pure-white">James M.</span>
<span class="font-body-md text-body-md text-on-surface-variant">ISO Owner â€¢ 40+ closed deals</span>
</div>
</div>
<div class="flex gap-1 text-accent-gold">
<span class="material-symbols-outlined text-[18px]">star</span><span class="material-symbols-outlined text-[18px]">star</span><span class="material-symbols-outlined text-[18px]">star</span><span class="material-symbols-outlined text-[18px]">star</span><span class="material-symbols-outlined text-[18px]">star</span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant italic">"Finally someone who underwrites like a real human being. I sent a B+ paper at 4pm on a Friday, had an approval by 5:45pm, and docs in my inbox by Monday morning. That's how this business is supposed to work."</p>
</div>

<div class="bg-surface-container border border-outline-variant rounded-xl p-6 flex flex-col gap-4 hover:border-accent-gold/50 transition-colors">
<div class="flex items-center gap-3">
<div class="w-12 h-12 rounded-full bg-gradient-to-br from-accent-gold to-accent-gold-dark flex items-center justify-center text-deep-navy font-bold font-headline-md">SR</div>
<div class="flex flex-col">
<span class="font-button-text text-button-text text-pure-white">Sofia R.</span>
<span class="font-body-md text-body-md text-on-surface-variant">Senior Broker â€¢ FL</span>
</div>
</div>
<div class="flex gap-1 text-accent-gold">
<span class="material-symbols-outlined text-[18px]">star</span><span class="material-symbols-outlined text-[18px]">star</span><span class="material-symbols-outlined text-[18px]">star</span><span class="material-symbols-outlined text-[18px]">star</span><span class="material-symbols-outlined text-[18px]">star</span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant italic">"What I love most is when a file declines, Brandon actually tells me why and what to fix next time. Two other houses black-boxed a $180k rev file of mine â€” he walked me through the exact adjustments and we closed it on resubmit."</p>
</div>

<div class="bg-surface-container border border-outline-variant rounded-xl p-6 flex flex-col gap-4 hover:border-accent-gold/50 transition-colors">
<div class="flex items-center gap-3">
<div class="w-12 h-12 rounded-full bg-gradient-to-br from-accent-gold to-accent-gold-dark flex items-center justify-center text-deep-navy font-bold font-headline-md">TK</div>
<div class="flex flex-col">
<span class="font-button-text text-button-text text-pure-white">Tyreek K.</span>
<span class="font-body-md text-body-md text-on-surface-variant">Floor Manager â€¢ TX</span>
</div>
</div>
<div class="flex gap-1 text-accent-gold">
<span class="material-symbols-outlined text-[18px]">star</span><span class="material-symbols-outlined text-[18px]">star</span><span class="material-symbols-outlined text-[18px]">star</span><span class="material-symbols-outlined text-[18px]">star</span><span class="material-symbols-outlined text-[18px]">star</span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant italic">"He flew out to my floor, sat with my agents for three hours, and trained them on exactly what gets funded. My submission-to-close ratio is up 38% since. That's the kind of partner you want in this game."</p>
</div>
</div>
</div>
</section>

<!-- Doing Good in the Hood / Community -->
<section class="noise-bg py-section-gap-mobile md:py-section-gap-desktop bg-deep-navy/85 backdrop-blur-sm px-gutter border-b border-outline-variant" id="mission">
<div class="max-w-container-max mx-auto text-center flex flex-col items-center gap-6">
<span class="material-symbols-outlined text-accent-gold text-[48px]">public</span>
<h3 class="font-label-caps text-label-caps text-accent-gold tracking-widest">DOING GOOD IN THE HOOD</h3>
<h2 class="font-display-lg text-headline-lg-mobile md:text-display-lg text-pure-white max-w-3xl">
Funding Deals. <br>
<span class="text-surface-variant line-through decoration-accent-gold">Extracting Value.</span><br>
<span class="text-accent-gold">Reinvesting in Communities.</span>
</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mt-4">
Making MCA Great Again isn't just about fast turnarounds and clean underwriting â€” it's about bringing real value back to the businesses and neighborhoods that fuel our economy. A dedicated portion of revenue from every closed transaction goes directly into local business lifelines, youth initiatives, and community projects nationwide. Partnering with us gives your brokerage a high-integrity edge while driving real economic impact.
</p>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8 w-full max-w-4xl">
<div class="bg-surface-container/50 backdrop-blur-sm border border-accent-gold/20 rounded-xl p-6 flex flex-col items-center gap-3">
<span class="material-symbols-outlined text-accent-gold text-[36px]">store</span>
<h4 class="font-headline-md text-headline-md text-pure-white">Local Small Business</h4>
<p class="font-body-md text-body-md text-on-surface-variant">Grants, micro-loans, and wraparound support for the cornerstone shops that define neighborhoods.</p>
</div>
<div class="bg-surface-container/50 backdrop-blur-sm border border-accent-gold/20 rounded-xl p-6 flex flex-col items-center gap-3">
<span class="material-symbols-outlined text-accent-gold text-[36px]">school</span>
<h4 class="font-headline-md text-headline-md text-pure-white">Youth Programs</h4>
<p class="font-body-md text-body-md text-on-surface-variant">Internships, financial literacy, and mentorship for the next generation of Main Street entrepreneurs.</p>
</div>
<div class="bg-surface-container/50 backdrop-blur-sm border border-accent-gold/20 rounded-xl p-6 flex flex-col items-center gap-3">
<span class="material-symbols-outlined text-accent-gold text-[36px]">diversity_3</span>
<h4 class="font-headline-md text-headline-md text-pure-white">Community Projects</h4>
<p class="font-body-md text-body-md text-on-surface-variant">Neighborhood revitalization, food programs, and the local institutions that hold communities together.</p>
</div>
</div>
<a class="btn-primary px-8 py-4 rounded font-button-text text-button-text mt-6" href="#contact">
JOIN THE MISSION
</a>
</div>
</section>

<!-- FAQ Section -->
<section class="py-section-gap-mobile md:py-section-gap-desktop bg-surface/80 backdrop-blur-sm px-gutter border-b border-outline-variant" id="faq">
<div class="max-w-4xl mx-auto flex flex-col gap-12">
<div class="text-center flex flex-col items-center gap-4">
<span class="font-label-caps text-label-caps text-accent-gold tracking-widest">FREQUENTLY ASKED QUESTIONS</span>
<h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-pure-white">Everything ISO Partners <span class="text-accent-gold">Need to Know</span></h2>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">Straight answers to the questions we get asked most. If yours isn't here, use the chat widget or shoot us an email.</p>
</div>

<div class="flex flex-col gap-3">
<!-- FAQ Item 1 -->
<div class="bg-surface-container border border-outline-variant rounded-xl overflow-hidden">
<button class="w-full flex items-center justify-between p-6 text-left group hover:bg-surface-container-high transition-colors" onclick="toggleAccordion(this)">
<span class="font-button-text text-button-text text-pure-white pr-4">What paper grades do you actually fund?</span>
<span class="material-symbols-outlined text-accent-gold shrink-0 transition-transform group-[.open]:rotate-180">expand_more</span>
</button>
<div class="accordion-content px-6 pb-0">
<div class="pb-6 border-t border-outline-variant pt-4">
<p class="font-body-md text-body-md text-on-surface-variant">We actively fund B through D paper. We're not a fund that only chases A-grade cherry picks. If the revenue story is clean and the cash flow supports the deal, we'll look at it â€” and give you a real reason if we pass.</p>
</div>
</div>
</div>

<!-- FAQ Item 2 -->
<div class="bg-surface-container border border-outline-variant rounded-xl overflow-hidden">
<button class="w-full flex items-center justify-between p-6 text-left group hover:bg-surface-container-high transition-colors" onclick="toggleAccordion(this)">
<span class="font-button-text text-button-text text-pure-white pr-4">How fast is your actual turnaround on decisions?</span>
<span class="material-symbols-outlined text-accent-gold shrink-0 transition-transform group-[.open]:rotate-180">expand_more</span>
</button>
<div class="accordion-content px-6 pb-0">
<div class="pb-6 border-t border-outline-variant pt-4">
<p class="font-body-md text-body-md text-on-surface-variant">Most complete files get a decision within 4â€“6 business hours of submission, same day when possible. We don't do the "3 business day" fake SLA thing. If we say we'll get back to you, we will â€” with an actual answer, not a request for 7 more docs.</p>
</div>
</div>
</div>

<!-- FAQ Item 3 -->
<div class="bg-surface-container border border-outline-variant rounded-xl overflow-hidden">
<button class="w-full flex items-center justify-between p-6 text-left group hover:bg-surface-container-high transition-colors" onclick="toggleAccordion(this)">
<span class="font-button-text text-button-text text-pure-white pr-4">What counts toward the $100k monthly revenue requirement?</span>
<span class="material-symbols-outlined text-accent-gold shrink-0 transition-transform group-[.open]:rotate-180">expand_more</span>
</button>
<div class="accordion-content px-6 pb-0">
<div class="pb-6 border-t border-outline-variant pt-4">
<p class="font-body-md text-body-md text-on-surface-variant">We look at true business operating revenue â€” merchant processing deposits, ACH customer payments, and verifiable business income. <strong class="text-accent-gold">Excluded:</strong> Zelle, Cash App, inter-account transfers, loan proceeds, or any deposits that aren't clearly from the sale of goods/services.</p>
</div>
</div>
</div>

<!-- FAQ Item 4 -->
<div class="bg-surface-container border border-outline-variant rounded-xl overflow-hidden">
<button class="w-full flex items-center justify-between p-6 text-left group hover:bg-surface-container-high transition-colors" onclick="toggleAccordion(this)">
<span class="font-button-text text-button-text text-pure-white pr-4">Do you have a portal, or do I just email files?</span>
<span class="material-symbols-outlined text-accent-gold shrink-0 transition-transform group-[.open]:rotate-180">expand_more</span>
</button>
<div class="accordion-content px-6 pb-0">
<div class="pb-6 border-t border-outline-variant pt-4">
<p class="font-body-md text-body-md text-on-surface-variant">Just email the file directly to <strong class="text-accent-gold">brandon@makemcagreatagain.com</strong> with a completed app and 3 months' statements. No login, no mandatory fields, no file getting lost in a portal black hole. We reply from the same thread so the conversation stays linked to the deal.</p>
</div>
</div>
</div>

<!-- FAQ Item 5 -->
<div class="bg-surface-container border border-outline-variant rounded-xl overflow-hidden">
<button class="w-full flex items-center justify-between p-6 text-left group hover:bg-surface-container-high transition-colors" onclick="toggleAccordion(this)">
<span class="font-button-text text-button-text text-pure-white pr-4">How do renewals and repeats work?</span>
<span class="material-symbols-outlined text-accent-gold shrink-0 transition-transform group-[.open]:rotate-180">expand_more</span>
</button>
<div class="accordion-content px-6 pb-0">
<div class="pb-6 border-t border-outline-variant pt-4">
<p class="font-body-md text-body-md text-on-surface-variant">Repeat deals and renewals from existing merchants get fast-tracked. If the merchant has been making payments cleanly and the updated statements look good, we can often issue a renewal offer same-day. We proactively flag accounts that look ripe for a renewal so you don't have to babysit your pipeline.</p>
</div>
</div>
</div>

<!-- FAQ Item 6 -->
<div class="bg-surface-container border border-outline-variant rounded-xl overflow-hidden">
<button class="w-full flex items-center justify-between p-6 text-left group hover:bg-surface-container-high transition-colors" onclick="toggleAccordion(this)">
<span class="font-button-text text-button-text text-pure-white pr-4">How do I get set up as an ISO with you?</span>
<span class="material-symbols-outlined text-accent-gold shrink-0 transition-transform group-[.open]:rotate-180">expand_more</span>
</button>
<div class="accordion-content px-6 pb-0">
<div class="pb-6 border-t border-outline-variant pt-4">
<p class="font-body-md text-body-md text-on-surface-variant">Click <strong class="text-accent-gold">"Request ISO Agreement"</strong> in the header form above, fill in your details, and the agreement goes out via Proposify for e-signature â€” tracked and automated. Once signed, we'll schedule a onboarding call, share the full underwriting guideline deck, and get your payout setup locked in.</p>
</div>
</div>
</div>
</div>
</div>
</section>

</main>

<!-- Footer -->
<footer class="bg-deep-navy/95 backdrop-blur-sm px-gutter border-t-4 border-accent-gold w-full py-section-gap-mobile md:py-section-gap-desktop flex flex-col md:flex-row justify-between items-center max-w-container-max mx-auto" id="contact">
<div class="flex flex-col items-center md:items-start gap-4 mb-8 md:mb-0">
<div class="flex items-center gap-3">
<img src="assets/LOGO.jpeg" alt="Logo" class="w-12 h-12 rounded object-cover">
<span class="font-headline-lg text-headline-lg-mobile md:text-headline-lg font-black text-accent-gold tracking-tighter">
MAKE MCA GREAT AGAIN
</span>
</div>
<span class="font-body-md text-body-md text-on-surface-variant">
Â© 2026 MAKE MCA GREAT AGAIN. ALL RIGHTS RESERVED.
</span>
<span class="font-body-md text-body-md text-on-surface-variant flex items-center gap-2">
<span class="material-symbols-outlined text-accent-gold text-[18px]">mail</span>
brandon@makemcagreatagain.com
</span>
</div>
<div class="flex flex-col items-center md:items-end gap-6">
<a class="btn-primary px-6 py-3 rounded font-button-text text-button-text flex items-center gap-2" href="https://calendly.com/" target="_blank" rel="noopener">
<span class="material-symbols-outlined text-[18px]">calendar_month</span>
Schedule a Call
</a>
<nav class="flex flex-wrap justify-center gap-6 font-label-caps text-label-caps">
<a class="text-on-surface-variant hover:text-accent-gold underline transition-all" href="#">Support</a>
<a class="text-on-surface-variant hover:text-accent-gold underline transition-all" href="#">Privacy Policy</a>
<a class="text-on-surface-variant hover:text-accent-gold underline transition-all" href="#">Terms of Service</a>
<a class="text-on-surface-variant hover:text-accent-gold underline transition-all" href="https://youtube.com/@makeMCAgreatagain" target="_blank" rel="noopener">YouTube</a>
<a class="text-on-surface-variant hover:text-accent-gold underline transition-all" href="https://linkedin.com/" target="_blank" rel="noopener">LinkedIn</a>
<a class="text-on-surface-variant hover:text-accent-gold underline transition-all" href="https://instagram.com/" target="_blank" rel="noopener">Instagram</a>
<a class="text-on-surface-variant hover:text-accent-gold underline transition-all" href="https://facebook.com/" target="_blank" rel="noopener">Facebook</a>
<a class="text-on-surface-variant hover:text-accent-gold underline transition-all" href="https://blogger.com/" target="_blank" rel="noopener">Blogger</a>
</nav>
</div>
</footer>

<!-- Floating Email Widget -->
<div class="fixed bottom-6 right-6 z-[70] flex flex-col items-end gap-3">
<div id="email-card" class="hidden bg-surface-container border border-urgent-red/40 rounded-xl p-5 shadow-2xl w-[320px] backdrop-blur-md">
<div class="flex items-center justify-between mb-3">
<span class="font-button-text text-button-text text-pure-white">Email Us Directly</span>
<button onclick="document.getElementById('email-card').classList.add('hidden')" class="text-on-surface-variant hover:text-accent-gold">
<span class="material-symbols-outlined text-[18px]">close</span>
</button>
</div>
<p class="font-body-md text-body-md text-on-surface-variant mb-4">Have a deal or question? Email Brandon directly â€” response within 24 hours.</p>
<div class="bg-surface-container-lowest border border-outline-variant rounded-lg p-4 mb-4">
<div class="flex items-center gap-3 mb-3">
<div class="w-10 h-10 rounded-full bg-accent-gold/15 flex items-center justify-center border border-accent-gold/30">
<span class="material-symbols-outlined text-accent-gold text-[20px]">person</span>
</div>
<div>
<p class="font-button-text text-button-text text-pure-white text-sm">Brandon</p>
<p class="font-label-caps text-label-caps text-accent-gold text-[10px]">Managing Partner</p>
</div>
</div>
<div class="flex items-center gap-2 bg-deep-navy px-3 py-2 rounded">
<span class="material-symbols-outlined text-accent-gold text-[18px]">mail</span>
<span class="font-body-md text-body-md text-pure-white text-sm break-all">brandon@makemcagreatagain.com</span>
</div>
</div>
<a href="mailto:brandon@makemcagreatagain.com?subject=MCA%20Deal%20Inquiry&body=Hi%20Brandon%2C%0A%0AI%20have%20a%20deal%20I%27d%20like%20to%20discuss..." class="w-full py-3 rounded font-button-text text-button-text bg-urgent-red text-pure-white flex items-center justify-center gap-2 hover:bg-red-600 transition-colors shadow-lg">
<span class="material-symbols-outlined text-[18px]">send</span>
Send Email Now
</a>
</div>
<button onclick="document.getElementById('email-card').classList.toggle('hidden')" class="w-16 h-16 rounded-full bg-urgent-red text-pure-white flex items-center justify-center shadow-2xl hover:scale-110 transition-transform border-4 border-white/20" aria-label="Email Us">
<span class="material-symbols-outlined text-[32px]">mail</span>
</button>
</div>

<script>
function toggleAccordion(btn) {
    const content = btn.nextElementSibling;
    const isOpen = content.classList.contains('open');
    document.querySelectorAll('.accordion-content').forEach(c => c.classList.remove('open'));
    document.querySelectorAll('.accordion-content').forEach(c => c.previousElementSibling.classList.remove('open'));
    if (!isOpen) {
        content.classList.add('open');
        btn.classList.add('open');
    }
}

function submitOnboardingForm(intent) {
    const form = document.getElementById('onboardingForm');
    document.getElementById('formIntent').value = intent;
    
    if (!form.checkValidity()) {
        form.reportValidity();
        return;
    }
    
    const buttons = form.querySelectorAll('button');
    buttons.forEach(btn => btn.disabled = true);
    
    const formData = new FormData(form);
    formData.append('action', 'mca_form_submit');
    
    // Fallback URL if not set
    const ajaxUrl = window.__WP_AJAX_URL__ || '/wp-admin/admin-ajax.php';
    
    fetch(ajaxUrl, {
        method: 'POST',
        body: formData
    })
    .then(response => {
        // If not in WordPress, this will return 404 or fail, throwing an error
        if (!response.ok) {
            throw new Error('Server response not OK');
        }
        return response.json();
    })
    .then(data => {
        if (data.success) {
            alert(data.data && data.data.message ? data.data.message : 'Form successfully submitted!');
            form.reset();
        } else {
            alert(data.data && data.data.message ? data.data.message : 'Something went wrong. Please try again.');
        }
    })
    .catch(error => {
        console.warn('AJAX error, falling back to simulation:', error);
        // Fallback for local demo environment
        alert('Thank you! Your ' + intent + ' has been received. (Demo Mode)');
        form.reset();
    })
    .finally(() => {
        buttons.forEach(btn => btn.disabled = false);
    });
}

(function() {
    const menuBtn = document.getElementById('mobile-menu-btn');
    const menuClose = document.getElementById('mobile-menu-close');
    const drawer = document.getElementById('mobile-menu-drawer');
    const overlay = document.getElementById('mobile-menu-overlay');
    const panel = document.getElementById('mobile-menu-panel');
    const menuIcon = document.getElementById('mobile-menu-icon');
    const navLinks = document.querySelectorAll('.mobile-nav-link');

    function openMenu() {
        drawer.classList.remove('pointer-events-none');
        drawer.classList.add('pointer-events-auto');
        overlay.classList.remove('opacity-0');
        overlay.classList.add('opacity-100');
        panel.classList.remove('translate-x-full');
        panel.classList.add('translate-x-0');
        if (menuBtn) menuBtn.classList.add('open');
        if (menuIcon) menuIcon.textContent = 'close';
        document.body.style.overflow = 'hidden';
    }

    function closeMenu() {
        drawer.classList.remove('pointer-events-auto');
        drawer.classList.add('pointer-events-none');
        overlay.classList.remove('opacity-100');
        overlay.classList.add('opacity-0');
        panel.classList.remove('translate-x-0');
        panel.classList.add('translate-x-full');
        if (menuBtn) menuBtn.classList.remove('open');
        if (menuIcon) menuIcon.textContent = 'menu';
        document.body.style.overflow = '';
    }

    if (menuBtn) menuBtn.addEventListener('click', openMenu);
    if (menuClose) menuClose.addEventListener('click', closeMenu);
    if (overlay) overlay.addEventListener('click', closeMenu);
    navLinks.forEach(link => link.addEventListener('click', closeMenu));

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !drawer.classList.contains('pointer-events-none')) {
            closeMenu();
        }
    });
})();
</script>

</div>

</body></html>

