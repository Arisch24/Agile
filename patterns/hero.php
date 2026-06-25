<?php
/**
 * Title: Hero
 * Slug: agile/hero
 * Categories: agile, banner, featured
 * Description: A left-aligned hero with a mono eyebrow, large heading with a marked word, buttons and a moving marquee.
 *
 * @package Agile
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|3-x-large","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--3-x-large);padding-bottom:0">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small","margin":{"bottom":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained","contentSize":"880px"}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--x-large)">
		<!-- wp:paragraph {"className":"agile-eyebrow"} -->
		<p class="agile-eyebrow"><?php esc_html_e( 'The block theme for builders', 'agile' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":1,"fontSize":"5-x-large"} -->
		<h1 class="wp-block-heading has-5-x-large-font-size"><?php printf( wp_kses( __( 'Ship a site you are %s of.', 'agile' ), array( 'mark' => array( 'class' => true ) ) ), '<mark class="agile-mark">proud</mark>' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"fontSize":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}}} -->
		<p class="has-large-font-size" style="margin-top:var(--wp--preset--spacing--x-small)"><?php esc_html_e( 'Agile is a fast, no-build block theme. Assemble pages from patterns, flip between light and dark in a click, and launch something that looks nothing like a template.', 'agile' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}},"layout":{"type":"flex"}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--small)">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get the theme', 'agile' ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Browse patterns', 'agile' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","layout":{"type":"default"}} -->
	<div class="wp-block-group alignfull">
		<!-- wp:html -->
		<div class="agile-marquee" aria-hidden="true"><div class="agile-marquee__track"><span>No build step</span>—<span>Self-hosted fonts</span>—<span>Light &amp; dark</span>—<span>11 block patterns</span>—<span>Fluid type &amp; space</span>—<span>No build step</span>—<span>Self-hosted fonts</span>—<span>Light &amp; dark</span>—<span>11 block patterns</span>—<span>Fluid type &amp; space</span>—</div></div>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
