<?php
/**
 * Title: Hero
 * Slug: agile/hero
 * Categories: agile, banner, featured
 * Description: A centered hero with an eyebrow label, large heading, supporting text and buttons.
 *
 * @package Agile
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|3-x-large","bottom":"var:preset|spacing|3-x-large"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--3-x-large);padding-bottom:var(--wp--preset--spacing--3-x-large)">
	<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"2px","fontWeight":"600"}},"fontSize":"small"} -->
	<p class="has-text-align-center has-small-font-size" style="font-weight:600;letter-spacing:2px;text-transform:uppercase"><?php esc_html_e( 'The block theme for builders', 'agile' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"5-x-large"} -->
	<h1 class="wp-block-heading has-text-align-center has-5-x-large-font-size"><?php esc_html_e( 'Build a site you are proud of', 'agile' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
	<p class="has-text-align-center has-large-font-size"><?php esc_html_e( 'Agile is a fast, flexible block theme. Compose pages from ready-made patterns, switch styles in a click, and ship a site that feels entirely your own.', 'agile' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--small)">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get started', 'agile' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'See the demo', 'agile' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
