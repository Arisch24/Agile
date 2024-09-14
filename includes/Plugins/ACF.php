<?php
/**
 * ACF json support.
 *
 * @package Agile
 */

namespace Arisch\Agile\Plugins;

/**
 * ACF class.
 */
class ACF {
	/**
	 * ACF constructor.
	 */
	public function __construct() {
		if ( ! class_exists( 'ACF' ) ) {
			return;
		}

		$this->add_acf_json_support();
	}

	/**
	 * Add theme support for ACF JSON.
	 *
	 * @return void
	 */
	public function add_acf_json_support(): void {
		add_filter( 'acf/settings/save_json', array( $this, 'acf_json_save_point' ) );
		add_filter( 'acf/settings/load_json', array( $this, 'acf_json_load_point' ) );
	}

	/**
	 * ACF JSON save point.
	 *
	 * @param string $path Path to save ACF JSON.
	 * @return string
	 */
	public function acf_json_save_point( string $path ): string {
		$path = get_stylesheet_directory() . '/acf-json';
		return $path;
	}

	/**
	 * ACF JSON load point.
	 *
	 * @param array $paths Paths to load ACF JSON.
	 * @return array
	 */
	public function acf_json_load_point( array $paths ): array {
		// remove original path
		unset( $paths[0] );
		$paths[] = get_stylesheet_directory() . '/acf-json';
		return $paths;
	}
}
