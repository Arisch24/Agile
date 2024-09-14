<?php
/**
 * Sidebar
 *
 * @package Agile
 */

namespace Arisch\Agile\Core\Customizer;

use WP_Customize_Control;

/**
 * Sidebar class
 */
class Sidebar {
	/**
	 * Constructor
	 */
	public function __construct() {
		add_action( 'customize_register', array( $this, 'register_customizer_sections' ) );
	}

	/**
	 * Register customizer sections
	 *
	 * @param object $wp_customize
	 * @return void
	 */
	public function register_customizer_sections( $wp_customize ) {
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
				'capability' => 'edit_theme_options',
				'transport' => 'postMessage',
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
						'step' => 1,
					),
				)
			),
		);
	}
}
