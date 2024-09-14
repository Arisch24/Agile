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
		$this->container_section( $wp_customize );
	}

	/**
	 * Container section
	 *
	 * @param object $wp_customize
	 * @return void
	 */
	public function container_section( $wp_customize ) {
		$wp_customize->add_section(
			'container_section',
			array(
				'title' => __( 'Container Settings', 'agile' ),
				'priority' => 30,
				'description' => __( 'Customize container width', 'agile' ),
			)
		);

		$wp_customize->add_setting(
			'container_width',
			array(
				'type' => 'theme_mod',
				'default' => '1280',
				'transport' => 'postMessage',
				'sanitize_callback' => array( $this, 'sanitize_integer' ),
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'container_width_control',
				array(
					'label' => __( 'Container Width', 'agile' ),
					'section' => 'container_section',
					'settings' => 'container_width',
					'type' => 'number',
					'input_attrs' => array(
						'min' => 600,
						'max' => 2000,
						'step' => 5,
					),
				)
			),
		);
	}

	/**
	 * Sanitize text field
	 *
	 * @param string $input
	 * @return integer
	 */
	public function sanitize_integer( $input ) {
		return absint( $input );
	}

	/**
	 * Output CSS
	 *
	 * @return string
	 */
	public static function output_css() {
		return get_theme_mod( 'container_width', '1280' );
	}
}
