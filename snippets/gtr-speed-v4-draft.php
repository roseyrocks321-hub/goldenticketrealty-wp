<?php
/**
 * GTR Speed Optimization v4 - DRAFT (Review Before Activating)
 * Created: 2026-11-04
 * Target: HostGator shared hosting + Elementor
 * Expected: Desktop 74-80, Mobile 30-35
 * 
 * WHAT THIS DOES:
 * 1. Defers Elementor frontend script (non-blocking)
 * 2. Removes jQuery migrate (saves ~20KB)
 * 3. Disables WordPress emoji scripts (saves ~10KB + requests)
 * 4. Disables WP embed script (saves ~5KB)
 * 5. Adds image width/height for CLS fix
 * 6. Adds aspect-ratio CSS for hero images
 * 7. Preconnects to Google Fonts
 * 
 * WHAT IT DOES NOT TOUCH:
 * - Elementor CSS (we keep CSS Minify ON in LiteSpeed)
 * - jQuery core (plugins need it)
 * - Your layout or design
 * 
 * TO ACTIVATE:
 * 1. Install "Code Snippets" plugin (free)
 * 2. WP Admin → Snippets → Add New
 * 3. Paste this code
 * 4. Set to "Run snippet everywhere"
 * 5. Click "Save Changes and Activate"
 * 6. Test a page in incognito mode
 * 7. If anything breaks: Snippets → Deactivate (instant rollback)
 */

// 1. Defer non-critical Elementor scripts
add_action('wp_enqueue_scripts', function() {
    wp_script_add_data('elementor-frontend', 'async', true);
    wp_deregister_script('jquery-migrate');
}, 100);

// 2. Disable WordPress bloat
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');

// 3. Disable WP embed script
add_action('wp_enqueue_scripts', function() {
    wp_deregister_script('wp-embed');
}, 100);

// 4. Add image width/height for CLS fix
add_filter('wp_get_attachment_image_attributes', function($attr, $attachment, $size) {
    if (!isset($attr['width']) || !isset($attr['height'])) {
        $meta = wp_get_attachment_metadata($attachment->ID);
        if ($meta) {
            if (!isset($attr['width'])) $attr['width'] = $meta['width'];
            if (!isset($attr['height'])) $attr['height'] = $meta['height'];
        }
    }
    return $attr;
}, 10, 3);

// 5. Add aspect-ratio CSS for hero images (prevents layout shift)
add_action('wp_head', function() {
    echo '<style>
        img[src*="logo"] { aspect-ratio: 981/333; height: auto !important; }
        .elementor img { max-width: 100%; height: auto; }
    </style>';
}, 1);

// 6. Preconnect to critical domains
add_action('wp_head', function() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
}, 1);
