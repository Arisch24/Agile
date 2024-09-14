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
	 *
	 * @param object $wp_customize
	 */
	public function __construct( $wp_customize ) {
		$this->has_sidebar( $wp_customize );
	}

	/**
	 * Container section
	 *
	 * @param object $wp_customize
	 * @return void
	 */
	public function has_sidebar( $wp_customize ) {
		$wp_customize->add_section(
			'agile_sidebar_section',
			array(
				'title' => __( 'Sidebar', 'agile' ),
				'priority' => 30,
				'panel' => 'agile_layout_panel',
			)
		);

		$wp_customize->add_setting(
			'agile_has_sidebar',
			array(
				'type' => 'theme_mod',
				'default' => true,
				'capability' => 'edit_theme_options',
				'transport' => 'refresh',
				'sanitize_callback' => array( $this, 'sidebar_class' ),
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'agile_has_sidebar_control',
				array(
					'label' => __( 'Has Sidebar?', 'agile' ),
					'section' => 'agile_sidebar_section',
					'settings' => 'agile_has_sidebar',
					'type' => 'checkbox',
				)
			),
		);
	}

	/**
	 * Sidebar sanitize
	 *
	 * @param string $input
	 * @param object $setting
	 * @return string
	 * @author GeneratePress
	 */
	public static function sidebar_class( $input, $setting ): string {
		$input = sanitize_key( $input );

		// Get list of choices from the control.
		// associated with the setting.
		$choices = $setting->manager->get_control( $setting->id )->choices;

		// If the input is a valid key, return it.
		// otherwise, return the default.
		return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
	}
}
