<?php
/**
 * Theme Functions
 *
 * Entire theme's function definitions.
 *
 * @since   1.0.0
 * @package Agile
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Globals.
define( 'AGILE_VER', '1.0.0' );
define( 'AGILE_DIR', get_template_directory() );
define( 'AGILE_URL', get_template_directory_uri() );

/**
 * Scripts & Styles.
 *
 * Frontend with no conditions, Add Custom styles to wp_head.
 *
 * @since  1.0.0
 */
function my_theme_styles_scripts() {
	// Frontend scripts.
	if ( ! is_admin() ) {
		// Enqueue vendors first.
		wp_enqueue_script( 'vendors', AGILE_URL . '/build/js/vendor.min.js', array(), AGILE_VER, false );

		// Enqueue custom JS after vendors.
		wp_enqueue_script( 'custom', AGILE_URL . '/build/js/custom.min.js', array(), AGILE_VER, false );

		// Minified and Concatenated styles.
		wp_enqueue_style( 'build-min-styles', AGILE_URL . '/build/css/style.min.css', array(), AGILE_VER, 'all' );
	}
}

add_action( 'wp_enqueue_scripts', 'my_theme_styles_scripts' );
