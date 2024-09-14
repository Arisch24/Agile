<?php
/**
 * Customizer
 *
 * @package Agile
 */

namespace Arisch\Agile\Core;

/**
 * Customizer class
 */
class Customizer {
	/**
	 * Constructor
	 */
	public function __construct() {
		add_action( 'customize_register', array( $this, 'register_customizer' ) );
		add_action( 'wp_head', array( $this, 'output' ) );
		add_action( 'customize_preview_init', array( $this, 'enqueue_customizer_scripts' ) );
	}

	/**
	 * Get classes array
	 *
	 * @return array
	 */
	public function get_classes(): array {
		return array(
			Customizer\Layout::class,
			Customizer\Sidebar::class,
		);
	}

	/**
	 * Register customizer
	 *
	 * @param object $wp_customize
	 * @return void
	 */
	public function register_customizer( $wp_customize ): void {
		$classes = $this->get_classes();

		foreach ( $classes as $class ) {
			new $class( $wp_customize );
		}
	}

	/**
	 * Output customizer
	 *
	 * @return void
	 */
	public function output() {
		echo '<!-- Customizer --> <style>';
		// phpcs:disable
		echo ':root { --content-width: ' . Customizer\Layout::output_css() . 'px; }';
		// phpcs:enable
		echo '</style> <!-- Customizer -->';
	}

	/**
	 * Enqueue customizer scripts
	 *
	 * @return void
	 */
	public function enqueue_customizer_scripts() {
		wp_enqueue_script( 'customizer', AGILE_URL . '/build/js/backend.min.js', array(), AGILE_VER, true );
	}
}
