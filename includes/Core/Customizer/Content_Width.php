<?php
/**
 * Content Width
 *
 * @package Agile
 */

namespace Arisch\Agile\Core\Customizer;

use WP_Customize_Control;

/**
 * Content width class
 */
class Content_Width {
	/**
	 * Register customizer sections
	 *
	 * @param object $wp_customize
	 * @return void
	 */
	public function __construct( $wp_customize ) {
		$this->change_content_width( $wp_customize );
	}

	/**
	 * content section
	 *
	 * @param object $wp_customize
	 * @return void
	 */
	public function change_content_width( $wp_customize ) {
		$wp_customize->add_section(
			'agile_content_section',
			array(
				'title' => __( 'Content Width', 'agile' ),
				'priority' => 30,
				'panel' => 'agile_layout_panel',
			)
		);

		$wp_customize->add_setting(
			'agile_content_width',
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
				'agile_content_width_control',
				array(
					'label' => __( 'Content Width', 'agile' ),
					'section' => 'agile_content_section',
					'settings' => 'agile_content_width',
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
		return get_theme_mod( 'agile_content_width', '1280' );
	}
}
