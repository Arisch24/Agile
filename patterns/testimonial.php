<?php
/**
 * Title: Testimonial
 * Slug: agile/testimonial
 * Categories: agile, text, featured
 * Description: A large left-aligned pull quote with attribution.
 *
 * @package Agile
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|3-x-large","bottom":"var:preset|spacing|3-x-large"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained","contentSize":"900px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--3-x-large);padding-bottom:var(--wp--preset--spacing--3-x-large)">
	<!-- wp:paragraph {"className":"agile-eyebrow"} -->
	<p class="agile-eyebrow"><?php esc_html_e( 'From the field', 'agile' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"className":"agile-quote","fontSize":"3-x-large"} -->
	<p class="agile-quote has-3-x-large-font-size"><?php printf( wp_kses( __( 'We rebuilt our whole site in a %s, and our editors actually look forward to publishing now.', 'agile' ), array( 'mark' => array( 'class' => true ) ) ), '<mark class="agile-mark">weekend</mark>' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"0.15em","margin":{"top":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--small)">
		<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
		<p style="font-weight:700"><?php esc_html_e( 'Riley Chen', 'agile' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"className":"agile-eyebrow"} -->
		<p class="agile-eyebrow"><?php esc_html_e( 'Head of Marketing · Lumen', 'agile' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
