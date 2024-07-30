<?php
/**
 * Sidebar class.
 *
 * @package Agile
 */

namespace Arisch\Agile\Core;

/**
 * Sidebar class.
 */
class Sidebar {
	/**
	 * Constructor method.
	 */
	public function __construct() {
		add_action( 'widgets_init', array( $this, 'register_widgets' ) );
	}

	/**
	 * Register widgets.
	 */
	public function register_widgets() {
		register_sidebar(
			array(
				'name'          => esc_html__( 'Sidebar', 'agile' ),
				'id'            => 'agSidebar',
				'description'   => esc_html__( 'Add widgets here.', 'agile' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			)
		);
	}
}
