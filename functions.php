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
 */
function enqueue_assets() {
	// Enqueue vendors first.
	wp_enqueue_script( 'vendors', AGILE_URL . '/build/js/vendor.min.js', array(), AGILE_VER, false );

	// Enqueue custom JS after vendors.
	wp_enqueue_script( 'custom', AGILE_URL . '/build/js/custom.min.js', array(), AGILE_VER, false );

	// Minified and Concatenated styles.
	wp_enqueue_style( 'build-min-styles', AGILE_URL . '/build/css/style.min.css', array(), AGILE_VER, 'all' );
}

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_assets' );

/**
 * Theme setup.
 */
function theme_setup() {
	// Load text domain.
	load_theme_textdomain( 'agile', AGILE_DIR . '/languages' );

	// Add RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' ); // Let WP manage the title tag.
	add_theme_support( 'post-thumbnails' ); // Enable support for post thumbnails.
	add_theme_support( 'post-formats', array() ); // Format support for posts.

	// logo options.
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 100,
			'width'       => 400,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	// Block editor support.
	add_theme_support( 'editor-styles' ); // Add editor styles.
	add_editor_style( 'build/css/editor-style.css' ); // Add block editor styles.
	add_theme_support( 'wp-block-styles' ); // Add support for block styles.
	add_theme_support( 'align-wide' ); // Add support for wide alignment.

	// add support for html markup in the array of fields.
	add_theme_support(
		'html5',
		array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );

	// Register nav menus.
	register_nav_menus(
		array(
			'header' => esc_html__( 'Header Menu', 'agile' ),
		)
	);
}

add_action( 'after_setup_theme', __NAMESPACE__ . '\theme_setup' );

/**
 * Register widget areas.
 */
function widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'agile' ),
			'id'            => 'ag-sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'agile' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}

add_action( 'widgets_init', __NAMESPACE__ . '\widgets_init' );
