<?php
/**
 * Title: FAQ
 * Slug: agile/faq
 * Categories: agile, text
 * Description: A list of frequently asked questions using expandable details.
 *
 * @package Agile
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|2-x-large","bottom":"var:preset|spacing|2-x-large"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--2-x-large);padding-bottom:var(--wp--preset--spacing--2-x-large)">
	<!-- wp:heading {"textAlign":"center","fontSize":"3-x-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-3-x-large-font-size"><?php esc_html_e( 'Frequently asked questions', 'agile' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:group {"className":"agile-faq","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group agile-faq">
		<!-- wp:details {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}}} -->
		<details class="wp-block-details" style="padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)"><summary><?php esc_html_e( 'Do I need to know how to code?', 'agile' ); ?></summary>
		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'No. Agile is built for the WordPress Site Editor. You assemble pages from patterns and edit everything visually.', 'agile' ); ?></p>
		<!-- /wp:paragraph -->
		</details>
		<!-- /wp:details -->

		<!-- wp:details {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}}} -->
		<details class="wp-block-details" style="padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)"><summary><?php esc_html_e( 'Does it work with my plugins?', 'agile' ); ?></summary>
		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'Agile sticks to core blocks and standard theme features, so it plays nicely with the plugins you already use.', 'agile' ); ?></p>
		<!-- /wp:paragraph -->
		</details>
		<!-- /wp:details -->

		<!-- wp:details {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}}} -->
		<details class="wp-block-details" style="padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)"><summary><?php esc_html_e( 'Can I change the colors and fonts?', 'agile' ); ?></summary>
		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'Yes. Pick a style variation or open Styles in the editor to adjust colors, typography and spacing across the whole site.', 'agile' ); ?></p>
		<!-- /wp:paragraph -->
		</details>
		<!-- /wp:details -->

		<!-- wp:details {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}}} -->
		<details class="wp-block-details" style="padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)"><summary><?php esc_html_e( 'Is it good for performance?', 'agile' ); ?></summary>
		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'Very. Fonts are self-hosted, there is no page builder overhead, and the critical font is preloaded for fast first paint.', 'agile' ); ?></p>
		<!-- /wp:paragraph -->
		</details>
		<!-- /wp:details -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
