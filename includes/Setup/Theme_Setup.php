<?php
/**
 * Class ThemeSetup
 *
 * @package Agile
 */

namespace Arisch\Agile\Setup;

/**
 * Setup theme.
 * package Agile
 */
class Theme_Setup {

	/**
	 * Constructor method.
	 */
	public function __construct() {
		add_action( 'after_setup_theme', array( $this, 'theme_setup' ) );
	}

	/**
	 * Setup theme method.
	 */
	public function theme_setup() {
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

		// Add support for responsive embeds
		add_theme_support( 'responsive-embeds' );

		// Register nav menus.
		register_nav_menus(
			array(
				'header' => esc_html__( 'Header Menu', 'agile' ),
			)
		);

		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );
	}
}
