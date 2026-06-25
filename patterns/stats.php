<?php
/**
 * Title: Stats
 * Slug: agile/stats
 * Categories: agile, featured
 * Description: A colored band of headline numbers.
 *
 * @package Agile
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|2-x-large","bottom":"var:preset|spacing|2-x-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--2-x-large);padding-bottom:var(--wp--preset--spacing--2-x-large)">
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|large"}},"border":{"radius":"16px"}},"backgroundColor":"accent","textColor":"white","layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-white-color has-accent-background-color has-text-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--large)">
		<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|large"}}}} -->
		<div class="wp-block-columns">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"textAlign":"center","fontSize":"4-x-large"} -->
				<h2 class="wp-block-heading has-text-align-center has-4-x-large-font-size">10k+</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size"><?php esc_html_e( 'Sites launched', 'agile' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"textAlign":"center","fontSize":"4-x-large"} -->
				<h2 class="wp-block-heading has-text-align-center has-4-x-large-font-size">40+</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size"><?php esc_html_e( 'Block patterns', 'agile' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"textAlign":"center","fontSize":"4-x-large"} -->
				<h2 class="wp-block-heading has-text-align-center has-4-x-large-font-size">99%</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size"><?php esc_html_e( 'Lighthouse score', 'agile' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
