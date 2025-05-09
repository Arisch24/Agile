<?php
/**
 * Load Assets file.
 *
 * @package Agile
 */

namespace Arisch\Agile\Setup;

/**
 * Load Assets class.
 */
class Load_Assets {
	/**
	 * Google Fonts URL.
	 *
	 * @var string
	 */
	public $google_fonts_url = 'https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;600&display=swap';
	/**
	 * Constructor method.
	 */
	public function __construct() {
		$this->google_fonts_url = 'https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;600&display=swap';
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_assets' ) );
		add_action( 'enqueue_block_editor_assets', array( $this, 'enqueue_gutenberg_assets' ) );
	}

	/**
	 * Scripts & Styles.
	 *
	 * Frontend with no conditions, Add Custom styles to wp_head.
	 */
	public function enqueue_assets() {
		// Enqueue vendors first.
		wp_enqueue_script( 'vendors', AGILE_URL . '/build/js/vendor.min.js', array(), AGILE_VER, true );

		// Enqueue custom JS after vendors.
		wp_enqueue_script( 'custom', AGILE_URL . '/build/js/index.min.js', array(), AGILE_VER, true );

		// Minified and Concatenated styles.
		wp_enqueue_style( 'build-min-styles', AGILE_URL . '/build/css/style.min.css', array(), AGILE_VER, 'all' );

		// Enqueue fonts.
		wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;600&display=swap', array(), AGILE_VER, 'all' );
	}

	/**
	 * Enqueue admin assets.
	 */
	public function enqueue_gutenberg_assets() {
		// Enqueue fonts.
		wp_enqueue_style( 'gutenberg-google-fonts', $this->google_fonts_url, array(), AGILE_VER, 'all' );
		add_editor_style( array( $this->google_fonts_url ) );
		wp_enqueue_style( 'gutenberg-editor-styles', AGILE_URL . '/build/css/editor-styles.min.css', array(), AGILE_VER, 'all' );
	}
}
