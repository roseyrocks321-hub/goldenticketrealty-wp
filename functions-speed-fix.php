<?php
/**
 * GTR Speed Fix — Defer Non-Critical JS & Disable Bloated Plugin Scripts
 * Site: goldenticketrealty.com
 * Goal: Reduce Total Blocking Time (TBT) without breaking Elementor layout.
 *
 * HOW TO USE:
 * 1. Go to WP Admin → Plugins.
 * 2. Deactivate "Burst Statistics" and "Alt Manager" completely.
 * 3. Add this entire snippet to the BOTTOM of your active theme’s functions.php
 *    (Appearance → Theme File Editor → functions.php)
 *    OR install the "Code Snippets" plugin, create a new snippet, paste this in,
 *    set it to "Run everywhere", and activate.
 * 4. Clear NitroPack cache (or any other page cache).
 * 5. Test a few key pages in an incognito window before celebrating.
 */

/* ------------------------------------------------------------------
   1. DEFER ELEMENTOR FRONTEND SCRIPTS
   ------------------------------------------------------------------ */
add_filter( 'script_loader_tag', 'gtr_defer_elementor_scripts', 10, 2 );
function gtr_defer_elementor_scripts( $tag, $handle ) {
	// Core Elementor frontend script + its Pro sibling
	$elementor_handles = array(
		'elementor-frontend',
		'elementor-pro-frontend',
		'elementor-frontend-modules',
		'elementor-waypoints',
		'elementor-common',
		'elementor-dialog',
		'elementor-app',
	);

	if ( in_array( $handle, $elementor_handles, true ) ) {
		return str_replace( ' src=', ' defer src=', $tag );
	}
	return $tag;
}

/* ------------------------------------------------------------------
   2. DEFER JQUERY-MIGRATE (safe) — and optionally jQuery itself
   ------------------------------------------------------------------ */
add_filter( 'script_loader_tag', 'gtr_defer_jquery_family', 11, 2 );
function gtr_defer_jquery_family( $tag, $handle ) {
	// jQuery-migrate is non-critical; deferring it is safe.
	if ( 'jquery-migrate' === $handle ) {
		return str_replace( ' src=', ' defer src=', $tag );
	}

	/*
	 * WARNING: Deferring core jQuery can break inline scripts that rely on
	 * $ or jQuery being available immediately. Only uncomment the block below
	 * if you have thoroughly tested every page (especially forms, sliders,
	 * popups, and mobile menus) and confirmed zero console errors.
	 */
	/*
	if ( 'jquery-core' === $handle || 'jquery' === $handle ) {
		return str_replace( ' src=', ' defer src=', $tag );
	}
	*/

	return $tag;
}

/* ------------------------------------------------------------------
   3. REMOVE BURST STATISTICS FRONTEND JS
   (Also recommended: fully deactivate the plugin in WP Admin)
   ------------------------------------------------------------------ */
add_action( 'wp_enqueue_scripts', 'gtr_disable_burst_statistics', 99 );
function gtr_disable_burst_statistics() {
	// Burst Stats registers its tracking script under several possible handles
	$burst_handles = array(
		'burst',
		'burst-statistics',
		'burst-statistics-js',
		'burst-frontend',
	);
	foreach ( $burst_handles as $h ) {
		wp_dequeue_script( $h );
		wp_deregister_script( $h );
	}
}

/* ------------------------------------------------------------------
   4. REMOVE ALT MANAGER FRONTEND JS
   (Also recommended: fully deactivate the plugin in WP Admin)
   ------------------------------------------------------------------ */
add_action( 'wp_enqueue_scripts', 'gtr_disable_alt_manager', 99 );
function gtr_disable_alt_manager() {
	// Alt Manager front-end handles vary by version; deregister common ones
	$alt_handles = array(
		'alt-manager',
		'alt-manager-js',
		'alt-manager-frontend',
	);
	foreach ( $alt_handles as $h ) {
		wp_dequeue_script( $h );
		wp_deregister_script( $h );
	}
}

/* ------------------------------------------------------------------
   5. DEFER MSGSNDR FORM EMBED SCRIPTS (link.msgsndr.com)
   ------------------------------------------------------------------ */
add_filter( 'script_loader_tag', 'gtr_defer_msgsndr_embeds', 10, 2 );
function gtr_defer_msgsndr_embeds( $tag, $handle ) {
	// If the theme or a plugin registers msgsndr under a known handle
	$msgsndr_handles = array(
		'msgsndr',
		'highlevel',
		'hl-form',
	);
	if ( in_array( $handle, $msgsndr_handles, true ) ) {
		return str_replace( ' src=', ' defer src=', $tag );
	}
	return $tag;
}

/**
 * Fallback: Defer ANY script tag whose src contains "msgsndr" or "highlevel"
 * This catches hard-coded or plugin-injected embeds that bypass wp_enqueue_script.
 */
add_filter( 'script_loader_tag', 'gtr_defer_msgsndr_by_src', 20, 2 );
function gtr_defer_msgsndr_by_src( $tag, $handle ) {
	if ( false !== strpos( $tag, 'msgsndr' ) || false !== strpos( $tag, 'highlevel' ) ) {
		// Only add defer if not already present
		if ( false === strpos( $tag, 'defer' ) ) {
			$tag = str_replace( ' src=', ' defer src=', $tag );
		}
	}
	return $tag;
}

/* ------------------------------------------------------------------
   BONUS: Stop WordPress from printing emoji detection JS
   (Saves a small render-blocking script on every page)
   ------------------------------------------------------------------ */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

/* ------------------------------------------------------------------
   BONUS: Disable WordPress embed script if not needed
   (Comment out if you embed external WordPress posts)
   ------------------------------------------------------------------ */
add_action( 'wp_footer', 'gtr_disable_wp_embed' );
function gtr_disable_wp_embed() {
	wp_deregister_script( 'wp-embed' );
}
