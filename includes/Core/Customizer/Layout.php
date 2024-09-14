<?php
/**
 * Layout
 *
 * @package Agile
 */

namespace Arisch\Agile\Core\Customizer;

use WP_Customize_Control;

/**
 * Layout class
 */
class Layout {
	/**
	 * Register customizer sections
	 *
	 * @param object $wp_customize
	 * @return void
	 */
	public function __construct( $wp_customize ) {
		$this->add_panels( $wp_customize );
	}

	/**
	 * content section
	 *
	 * @param object $wp_customize
	 * @return void
	 */
	public function add_panels( $wp_customize ) {
		$wp_customize->add_panel(
			'agile_layout_panel',
			array(
				'title' => __( 'Layout', 'agile' ),
				'priority' => 30,
			)
		);
	}
}
