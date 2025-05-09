<?php
/**
 * Page Title
 *
 * @package Agile
 */

namespace Arisch\Agile\Core\Customizer\Layout;

use WP_Customize_Control;

/**
 * Page Title class
 */
class Page_Title {
	/**
	 * Register customizer sections
	 *
	 * @param object $wp_customize
	 * @return void
	 */
	public function __construct( $wp_customize ) {
		$this->change_page_title( $wp_customize );
	}
	/**
	 * Page title section
	 *
	 * @param object $wp_customize
	 * @return void
	 */
	public function change_page_title( $wp_customize ) {
		$wp_customize->add_section(
			'agile_page_title_section',
			array(
				'title' => __( 'Page Title', 'agile' ),
				'priority' => 30,
				'panel' => 'agile_layout_panel',
			)
		);

		$wp_customize->add_setting(
			'agile_page_title',
			array(
				'type' => 'theme_mod',
				'default' => true,
				'capability' => 'edit_theme_options',
				'transport' => 'refresh',
				'sanitize_callback' => array( $this, 'page_title_class' ),
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'agile_page_title_control',
				array(
					'label' => __( 'Page Title', 'agile' ),
					'section' => 'agile_page_title_section',
					'settings' => 'agile_page_title',
					'type' => 'checkbox',
				)
			)
		);
	}
	/**
	 * Sanitize page title
	 *
	 * @param string $input
	 * @return string
	 */
	public function page_title_class( $input ) {
		if ( $input ) {
			return true;
		} else {
			return false;
		}
	}
}
