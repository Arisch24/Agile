<?php
/**
 * Title: Testimonial
 * Slug: agile/testimonial
 * Categories: agile, text, featured
 * Description: A large centered customer quote with attribution.
 *
 * @package Agile
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|2-x-large","bottom":"var:preset|spacing|2-x-large"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--2-x-large);padding-bottom:var(--wp--preset--spacing--2-x-large)">
	<!-- wp:paragraph {"align":"center","fontSize":"3-x-large","style":{"typography":{"fontWeight":"700","lineHeight":"1.3"}}} -->
	<p class="has-text-align-center has-3-x-large-font-size" style="font-weight:700;line-height:1.3"><?php esc_html_e( '&ldquo;We rebuilt our whole site on Agile in a weekend. It is fast, flexible, and our editors actually enjoy using it.&rdquo;', 'agile' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
	<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--small);font-weight:700"><?php esc_html_e( 'Riley Chen', 'agile' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
	<p class="has-text-align-center has-small-font-size"><?php esc_html_e( 'Head of Marketing, Lumen', 'agile' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
