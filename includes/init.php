<?php
/**
 * Init class file.
 *
 * @since   1.0.0
 * @package Agile
 */

namespace Arisch\Agile;

/**
 * Init Class
 */
class Init {
	/**
	 * Check if class instance is already loaded.
	 * 
	 * @var bool
	 */
	private static $loaded = false;

	/**
	 * Classes array.
	 * 
	 * @var array
	 */
	private static $classes = array(
		Setup\Theme_Setup::class,
		Setup\Load_Assets::class,
	);
	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->init_classes();
	}

	/**
	 * Initialize the theme.
	 */
	public function init_classes(): void {
		if ( self::$loaded ) {
			return;
		}

		self::$loaded = true;

		foreach ( self::$classes as $class ) {
			if ( class_exists( $class ) ) {
				new $class();
			}
		}
	}
}
