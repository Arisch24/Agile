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

		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
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

if ( ! function_exists( 'agile_register_pattern_category' ) ) :
	/**
	 * Register the theme's block pattern category.
	 *
	 * @return void
	 */
	function agile_register_pattern_category(): void {
		register_block_pattern_category(
			'agile',
			array( 'label' => __( 'Agile', 'agile' ) )
		);
	}
endif;
add_action( 'init', 'agile_register_pattern_category' );

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

if ( ! function_exists( 'agile_preload_resources' ) ) :
	/**
	 * Preload the critical (latin, normal) Figtree font to speed up text LCP.
	 *
	 * Only the one face needed for first paint is preloaded; italic and
	 * latin-ext are left to download on demand via their unicode-range.
	 *
	 * @param array $resources Resources to preload.
	 * @return array
	 */
	function agile_preload_resources( $resources ): array {
		foreach ( array( 'figtree/figtree-latin', 'space-grotesk/space-grotesk-latin' ) as $font ) {
			$resources[] = array(
				'href'        => get_theme_file_uri( "assets/fonts/{$font}.woff2" ),
				'as'          => 'font',
				'type'        => 'font/woff2',
				'crossorigin' => 'anonymous',
			);
		}

		return $resources;
	}
endif;
add_filter( 'wp_preload_resources', 'agile_preload_resources' );

if ( ! function_exists( 'agile_disable_emojis' ) ) :
	/**
	 * Remove the emoji detection script and styles (unneeded on a modern blog).
	 *
	 * @return void
	 */
	function agile_disable_emojis(): void {
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
		remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
		remove_action( 'admin_print_styles', 'print_emoji_styles' );
		remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
		remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
		remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	}
endif;
add_action( 'init', 'agile_disable_emojis' );

if ( ! function_exists( 'agile_prioritize_first_featured_image' ) ) :
	/**
	 * Mark the first featured image of the request as the LCP candidate.
	 *
	 * Query-loop grids confuse core's lazy-load heuristic, which can tag the
	 * first card image as `loading="lazy"`. Force the first featured image
	 * rendered on the front end to load eagerly with high fetch priority.
	 *
	 * @param string $block_content The block HTML.
	 * @return string
	 */
	function agile_prioritize_first_featured_image( string $block_content ): string {
		static $done = false;

		if ( $done || is_admin() || is_feed() || '' === $block_content ) {
			return $block_content;
		}

		if ( false !== strpos( $block_content, '<img' ) ) {
			$done          = true;
			$block_content = str_replace( ' loading="lazy"', ' loading="eager"', $block_content );

			if ( false === strpos( $block_content, 'fetchpriority' ) ) {
				$block_content = preg_replace( '/<img /', '<img fetchpriority="high" ', $block_content, 1 );
			}
		}

		return $block_content;
	}
endif;
add_filter( 'render_block_core/post-featured-image', 'agile_prioritize_first_featured_image' );
