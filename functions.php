<?php
/**
 * Theme Functions
 *
 * Entire theme's function definitions.
 *
 * @since   1.0.0
 * @package Agile
 */

namespace Arisch\Agile;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Globals.
define( 'AGILE_VER', '1.0.0' );
define( 'AGILE_DIR', get_template_directory() );
define( 'AGILE_URL', get_template_directory_uri() );

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}

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

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\my_theme_styles_scripts' );

/**
 * Theme setup.
 *
 * @since  1.0.0
 */
function ag_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo' );
}

add_action( 'after_setup_theme', __NAMESPACE__ . '\ag_theme_setup' );
