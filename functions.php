<?php
/**
 * Agile functions and definitions.
 *
 * @package Agile
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'agile_setup' ) ) :
	/**
	 * Theme setup.
	 *
	 * @return void
	 */
	function agile_setup(): void {
		load_theme_textdomain( 'agile', get_template_directory() . '/languages' );

		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'editor-styles' );
		add_editor_style( 'style.css' );

		add_theme_support(
			'custom-logo',
			array(
				'height'      => 100,
				'width'       => 400,
				'flex-height' => true,
				'flex-width'  => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'agile_setup' );

if ( ! function_exists( 'agile_enqueue_assets' ) ) :
	/**
	 * Enqueue front-end styles and scripts.
	 *
	 * @return void
	 */
	function agile_enqueue_assets(): void {
		wp_enqueue_style(
			'agile-style',
			get_stylesheet_uri(),
			array(),
			wp_get_theme()->get( 'Version' )
		);

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
endif;
add_action( 'wp_enqueue_scripts', 'agile_enqueue_assets' );
