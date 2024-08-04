<?php
/**
 * WooCommerce support.
 *
 * @package Agile
 */

namespace Arisch\Agile\Plugins;

/**
 * WooCommerce class.
 */
class WooCommerce {
	/**
	 * Constructor
	 */
	public function __construct() {
		if ( ! class_exists( 'WooCommerce' ) ) {
			return;
		}

		// Remove unnecessary WooCommerce features.
		$this->add_woo_support();
		$this->remove_woo_hooks();
		$this->add_woo_hooks();
		$this->enqueue_woo_files();
	}

	/**
	 * Add theme support for WooCommerce.
	 *
	 * @return void
	 */
	public function add_woo_support(): void {
		// Essential for WooCommerce to work.
		add_theme_support(
			'woocommerce',
			array(
				'thumbnail_image_width' => 150,
				'single_image_width'    => 300,
				'product_grid' => array(
					'default_rows'    => 3,
					'min_rows'        => 1,
					'default_columns' => 3,
					'min_columns'     => 2,
					'max_columns'     => 5,
				),
			)
		);

		// Add theme support for WooCommerce gallery features.
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );
	}

	/**
	 * Remove woocommerce hooks.
	 *
	 * @return void
	 */
	public function remove_woo_hooks(): void {
		remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
		remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
		remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
	}

	/**
	 * Add woocommerce hooks.
	 *
	 * @return void
	 */
	public function add_woo_hooks(): void {
		// Modify frontend output.
		add_action( 'woocommerce_before_main_content', array( $this, 'output_content_wrapper_start' ), 10 );
		add_action( 'woocommerce_after_main_content', array( $this, 'output_content_wrapper_end' ), 10 );
		add_action( 'woocommerce_before_add_to_cart_form', array( $this, 'output_html' ), 10 );
	}

	/**
	 * Enqueue WooCommerce files
	 *
	 * @return void
	 */
	public function enqueue_woo_files(): void {
		add_action( 'wp_enqueue_scripts', array( $this, 'woocommerce_styles' ) );
	}

	/**
	 * Enqueue WooCommerce styles.
	 *
	 * @return void
	 */
	public function woocommerce_styles(): void {
		wp_enqueue_style( 'agile-woocommerce', AGILE_URL . '/build/css/woocommerce.min.css', array(), AGILE_VER, 'all' );
	}

	/**
	 * Output content wrapper.
	 *
	 * @return void
	 */
	public function output_content_wrapper_start(): void {
		?>
		<div class="ag-container">
		<?php
	}

	/**
	 * Output content wrapper end.
	 *
	 * @return void
	 */
	public function output_content_wrapper_end(): void {
		?>
		</div>
		<?php
	}

	/**
	 * hr tag.
	 *
	 * @return void
	 */
	public function output_html(): void {
		?>
		<hr>
		<?php
		printf(
			'<h2>%s</h2>',
			apply_filters( 'agile_product_meta_title', __( 'Available Options', 'agile' ) ) // phpcs:ignore
		);
	}
}
