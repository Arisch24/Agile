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
	 * Constructor method.
	 */
	public function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_assets' ) );
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
	}
}
