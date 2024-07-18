<?php
/**
 * Admin Class
 *
 * Admin class file.
 *
 * @since   1.0.0
 * @package Agile
 */

namespace Arisch\Agile\Admin;

/**
 * Admin Class
 *
 * Admin class file.
 *
 * @since   1.0.0
 * @package Agile
 */
class Admin_Menu {

	/**
	 * Constructor method.
	 */
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'add_admin_menu' ) );
	}

	/**
	 * Add admin menu.
	 */
	public static function add_admin_menu() {
		add_menu_page(
			__( 'Agile Theme Options', 'agile' ),
			__( 'Agile Options', 'agile' ),
			'manage_options',
			'agile-options',
			array( 'Admin', 'agile_options_page' ),
			'dashicons-admin-generic',
			99
		);
	}
}
