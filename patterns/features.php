<?php
/**
 * Title: Features (Three Columns)
 * Slug: agile/features
 * Categories: agile, columns, features
 * Description: A three-column grid of feature cards with a section heading.
 *
 * @package Agile
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<!-- wp:group {"align":"full","className":"agile-band","style":{"spacing":{"padding":{"top":"var:preset|spacing|2-x-large","bottom":"var:preset|spacing|2-x-large"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull agile-band" style="padding-top:var(--wp--preset--spacing--2-x-large);padding-bottom:var(--wp--preset--spacing--2-x-large)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","className":"agile-eyebrow"} -->
		<p class="agile-eyebrow has-text-align-center"><?php esc_html_e( 'Why Agile', 'agile' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","fontSize":"3-x-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-3-x-large-font-size"><?php esc_html_e( 'Everything you need to launch', 'agile' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
		<p class="has-text-align-center has-large-font-size"><?php esc_html_e( 'Thoughtful defaults and a full pattern library so you can focus on your content, not the plumbing.', 'agile' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"className":"post-card","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
		<div class="wp-block-column post-card" style="padding:var(--wp--preset--spacing--medium)">
			<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
			<h3 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'Block patterns', 'agile' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'Drop in ready-made sections and assemble full pages in minutes, no code required.', 'agile' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"post-card","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
		<div class="wp-block-column post-card" style="padding:var(--wp--preset--spacing--medium)">
			<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
			<h3 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'Style variations', 'agile' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'Switch between light and dark looks instantly, or fine-tune colors and type in the editor.', 'agile' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"post-card","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
		<div class="wp-block-column post-card" style="padding:var(--wp--preset--spacing--medium)">
			<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
			<h3 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'Fast by default', 'agile' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'Self-hosted fonts, no page builder bloat, and lean markup keep your pages quick to load.', 'agile' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
