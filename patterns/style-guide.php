<?php
/**
 * Title: Style Guide
 * Slug: agile/style-guide
 * Categories: agile, featured, text
 * Description: A living showcase of the theme's colors, type scale, fonts, spacing and buttons — all pulled straight from theme.json.
 *
 * @package Agile
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|3-x-large","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--3-x-large);padding-bottom:0">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"bottom":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--x-large)">
		<!-- wp:paragraph {"className":"agile-eyebrow"} -->
		<p class="agile-eyebrow"><?php esc_html_e( 'Design system', 'agile' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"fontSize":"4-x-large"} -->
		<h2 class="wp-block-heading has-4-x-large-font-size"><?php esc_html_e( 'Style guide', 'agile' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"fontSize":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}}} -->
		<p class="has-large-font-size" style="margin-top:var(--wp--preset--spacing--x-small)"><?php esc_html_e( 'Every color, size and space on this page is a live preset from theme.json — change your Styles in the editor and this page updates with it.', 'agile' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"agile-band","style":{"spacing":{"padding":{"top":"var:preset|spacing|2-x-large","bottom":"var:preset|spacing|2-x-large"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull agile-band" style="padding-top:var(--wp--preset--spacing--2-x-large);padding-bottom:var(--wp--preset--spacing--2-x-large)">
	<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
	<h3 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'Colors', 'agile' ); ?></h3>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"className":"agile-eyebrow"} -->
	<p class="agile-eyebrow"><?php esc_html_e( 'Neutrals', 'agile' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|small"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"className":"agile-swatch-item","layout":{"type":"constrained"}} -->
		<div class="wp-block-group agile-swatch-item">
			<!-- wp:group {"className":"agile-swatch","backgroundColor":"black","layout":{"type":"default"}} -->
			<div class="wp-block-group agile-swatch has-black-background-color has-background"></div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"className":"agile-swatch-label"} -->
			<p class="agile-swatch-label">Black</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"agile-swatch-item","layout":{"type":"constrained"}} -->
		<div class="wp-block-group agile-swatch-item">
			<!-- wp:group {"className":"agile-swatch","backgroundColor":"black-light","layout":{"type":"default"}} -->
			<div class="wp-block-group agile-swatch has-black-light-background-color has-background"></div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"className":"agile-swatch-label"} -->
			<p class="agile-swatch-label">Black Light</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"agile-swatch-item","layout":{"type":"constrained"}} -->
		<div class="wp-block-group agile-swatch-item">
			<!-- wp:group {"className":"agile-swatch","backgroundColor":"black-ultra-light","layout":{"type":"default"}} -->
			<div class="wp-block-group agile-swatch has-black-ultra-light-background-color has-background"></div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"className":"agile-swatch-label"} -->
			<p class="agile-swatch-label">Black Ultra Light</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"agile-swatch-item","layout":{"type":"constrained"}} -->
		<div class="wp-block-group agile-swatch-item">
			<!-- wp:group {"className":"agile-swatch","backgroundColor":"black-dark","layout":{"type":"default"}} -->
			<div class="wp-block-group agile-swatch has-black-dark-background-color has-background"></div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"className":"agile-swatch-label"} -->
			<p class="agile-swatch-label">Black Dark</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"agile-swatch-item","layout":{"type":"constrained"}} -->
		<div class="wp-block-group agile-swatch-item">
			<!-- wp:group {"className":"agile-swatch","backgroundColor":"black-ultra-dark","layout":{"type":"default"}} -->
			<div class="wp-block-group agile-swatch has-black-ultra-dark-background-color has-background"></div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"className":"agile-swatch-label"} -->
			<p class="agile-swatch-label">Black Ultra Dark</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"agile-swatch-item","layout":{"type":"constrained"}} -->
		<div class="wp-block-group agile-swatch-item">
			<!-- wp:group {"className":"agile-swatch","backgroundColor":"white","layout":{"type":"default"}} -->
			<div class="wp-block-group agile-swatch has-white-background-color has-background"></div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"className":"agile-swatch-label"} -->
			<p class="agile-swatch-label">White</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"agile-swatch-item","layout":{"type":"constrained"}} -->
		<div class="wp-block-group agile-swatch-item">
			<!-- wp:group {"className":"agile-swatch","backgroundColor":"paper","layout":{"type":"default"}} -->
			<div class="wp-block-group agile-swatch has-paper-background-color has-background"></div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"className":"agile-swatch-label"} -->
			<p class="agile-swatch-label">Paper</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"agile-swatch-item","layout":{"type":"constrained"}} -->
		<div class="wp-block-group agile-swatch-item">
			<!-- wp:group {"className":"agile-swatch","backgroundColor":"ink","layout":{"type":"default"}} -->
			<div class="wp-block-group agile-swatch has-ink-background-color has-background"></div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"className":"agile-swatch-label"} -->
			<p class="agile-swatch-label">Ink</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"agile-swatch-item","layout":{"type":"constrained"}} -->
		<div class="wp-block-group agile-swatch-item">
			<!-- wp:group {"className":"agile-swatch","backgroundColor":"surface","layout":{"type":"default"}} -->
			<div class="wp-block-group agile-swatch has-surface-background-color has-background"></div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"className":"agile-swatch-label"} -->
			<p class="agile-swatch-label">Surface</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:paragraph {"className":"agile-eyebrow","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
	<p class="agile-eyebrow" style="margin-top:var(--wp--preset--spacing--small)"><?php esc_html_e( 'Primary', 'agile' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|small"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"className":"agile-swatch-item","layout":{"type":"constrained"}} -->
		<div class="wp-block-group agile-swatch-item">
			<!-- wp:group {"className":"agile-swatch","backgroundColor":"primary-ultra-light","layout":{"type":"default"}} -->
			<div class="wp-block-group agile-swatch has-primary-ultra-light-background-color has-background"></div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"className":"agile-swatch-label"} -->
			<p class="agile-swatch-label">Ultra Light</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"agile-swatch-item","layout":{"type":"constrained"}} -->
		<div class="wp-block-group agile-swatch-item">
			<!-- wp:group {"className":"agile-swatch","backgroundColor":"primary-light","layout":{"type":"default"}} -->
			<div class="wp-block-group agile-swatch has-primary-light-background-color has-background"></div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"className":"agile-swatch-label"} -->
			<p class="agile-swatch-label">Light</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"agile-swatch-item","layout":{"type":"constrained"}} -->
		<div class="wp-block-group agile-swatch-item">
			<!-- wp:group {"className":"agile-swatch","backgroundColor":"primary","layout":{"type":"default"}} -->
			<div class="wp-block-group agile-swatch has-primary-background-color has-background"></div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"className":"agile-swatch-label"} -->
			<p class="agile-swatch-label">Primary</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"agile-swatch-item","layout":{"type":"constrained"}} -->
		<div class="wp-block-group agile-swatch-item">
			<!-- wp:group {"className":"agile-swatch","backgroundColor":"primary-dark","layout":{"type":"default"}} -->
			<div class="wp-block-group agile-swatch has-primary-dark-background-color has-background"></div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"className":"agile-swatch-label"} -->
			<p class="agile-swatch-label">Dark</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"agile-swatch-item","layout":{"type":"constrained"}} -->
		<div class="wp-block-group agile-swatch-item">
			<!-- wp:group {"className":"agile-swatch","backgroundColor":"primary-ultra-dark","layout":{"type":"default"}} -->
			<div class="wp-block-group agile-swatch has-primary-ultra-dark-background-color has-background"></div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"className":"agile-swatch-label"} -->
			<p class="agile-swatch-label">Ultra Dark</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:paragraph {"className":"agile-eyebrow","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
	<p class="agile-eyebrow" style="margin-top:var(--wp--preset--spacing--small)"><?php esc_html_e( 'Secondary', 'agile' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|small"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"className":"agile-swatch-item","layout":{"type":"constrained"}} -->
		<div class="wp-block-group agile-swatch-item">
			<!-- wp:group {"className":"agile-swatch","backgroundColor":"secondary-ultra-light","layout":{"type":"default"}} -->
			<div class="wp-block-group agile-swatch has-secondary-ultra-light-background-color has-background"></div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"className":"agile-swatch-label"} -->
			<p class="agile-swatch-label">Ultra Light</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"agile-swatch-item","layout":{"type":"constrained"}} -->
		<div class="wp-block-group agile-swatch-item">
			<!-- wp:group {"className":"agile-swatch","backgroundColor":"secondary-light","layout":{"type":"default"}} -->
			<div class="wp-block-group agile-swatch has-secondary-light-background-color has-background"></div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"className":"agile-swatch-label"} -->
			<p class="agile-swatch-label">Light</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"agile-swatch-item","layout":{"type":"constrained"}} -->
		<div class="wp-block-group agile-swatch-item">
			<!-- wp:group {"className":"agile-swatch","backgroundColor":"secondary","layout":{"type":"default"}} -->
			<div class="wp-block-group agile-swatch has-secondary-background-color has-background"></div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"className":"agile-swatch-label"} -->
			<p class="agile-swatch-label">Secondary</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"agile-swatch-item","layout":{"type":"constrained"}} -->
		<div class="wp-block-group agile-swatch-item">
			<!-- wp:group {"className":"agile-swatch","backgroundColor":"secondary-dark","layout":{"type":"default"}} -->
			<div class="wp-block-group agile-swatch has-secondary-dark-background-color has-background"></div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"className":"agile-swatch-label"} -->
			<p class="agile-swatch-label">Dark</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"agile-swatch-item","layout":{"type":"constrained"}} -->
		<div class="wp-block-group agile-swatch-item">
			<!-- wp:group {"className":"agile-swatch","backgroundColor":"secondary-ultra-dark","layout":{"type":"default"}} -->
			<div class="wp-block-group agile-swatch has-secondary-ultra-dark-background-color has-background"></div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"className":"agile-swatch-label"} -->
			<p class="agile-swatch-label">Ultra Dark</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:paragraph {"className":"agile-eyebrow","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
	<p class="agile-eyebrow" style="margin-top:var(--wp--preset--spacing--small)"><?php esc_html_e( 'Accent', 'agile' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|small"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"className":"agile-swatch-item","layout":{"type":"constrained"}} -->
		<div class="wp-block-group agile-swatch-item">
			<!-- wp:group {"className":"agile-swatch","backgroundColor":"accent-ultra-light","layout":{"type":"default"}} -->
			<div class="wp-block-group agile-swatch has-accent-ultra-light-background-color has-background"></div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"className":"agile-swatch-label"} -->
			<p class="agile-swatch-label">Ultra Light</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"agile-swatch-item","layout":{"type":"constrained"}} -->
		<div class="wp-block-group agile-swatch-item">
			<!-- wp:group {"className":"agile-swatch","backgroundColor":"accent-light","layout":{"type":"default"}} -->
			<div class="wp-block-group agile-swatch has-accent-light-background-color has-background"></div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"className":"agile-swatch-label"} -->
			<p class="agile-swatch-label">Light</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"agile-swatch-item","layout":{"type":"constrained"}} -->
		<div class="wp-block-group agile-swatch-item">
			<!-- wp:group {"className":"agile-swatch","backgroundColor":"accent","layout":{"type":"default"}} -->
			<div class="wp-block-group agile-swatch has-accent-background-color has-background"></div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"className":"agile-swatch-label"} -->
			<p class="agile-swatch-label">Accent</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"agile-swatch-item","layout":{"type":"constrained"}} -->
		<div class="wp-block-group agile-swatch-item">
			<!-- wp:group {"className":"agile-swatch","backgroundColor":"accent-dark","layout":{"type":"default"}} -->
			<div class="wp-block-group agile-swatch has-accent-dark-background-color has-background"></div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"className":"agile-swatch-label"} -->
			<p class="agile-swatch-label">Dark</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"agile-swatch-item","layout":{"type":"constrained"}} -->
		<div class="wp-block-group agile-swatch-item">
			<!-- wp:group {"className":"agile-swatch","backgroundColor":"accent-ultra-dark","layout":{"type":"default"}} -->
			<div class="wp-block-group agile-swatch has-accent-ultra-dark-background-color has-background"></div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"className":"agile-swatch-label"} -->
			<p class="agile-swatch-label">Ultra Dark</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|2-x-large","bottom":"var:preset|spacing|2-x-large"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--2-x-large);padding-bottom:var(--wp--preset--spacing--2-x-large)">
	<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
	<h3 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'Type scale', 'agile' ); ?></h3>
	<!-- /wp:heading -->

	<!-- wp:group {"className":"agile-type-scale","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group agile-type-scale">
		<!-- wp:group {"className":"agile-type-row","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<div class="wp-block-group agile-type-row">
			<!-- wp:paragraph {"fontSize":"x-small","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<p class="has-x-small-font-size" style="margin-top:0;margin-bottom:0">Aa</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"agile-swatch-label","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<p class="agile-swatch-label" style="margin-top:0;margin-bottom:0">x-small · 12px</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"agile-type-row","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<div class="wp-block-group agile-type-row">
			<!-- wp:paragraph {"fontSize":"small","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<p class="has-small-font-size" style="margin-top:0;margin-bottom:0">Aa</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"agile-swatch-label","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<p class="agile-swatch-label" style="margin-top:0;margin-bottom:0">small · 14px</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"agile-type-row","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<div class="wp-block-group agile-type-row">
			<!-- wp:paragraph {"fontSize":"medium","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<p class="has-medium-font-size" style="margin-top:0;margin-bottom:0">Aa</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"agile-swatch-label","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<p class="agile-swatch-label" style="margin-top:0;margin-bottom:0">medium · 16–18px</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"agile-type-row","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<div class="wp-block-group agile-type-row">
			<!-- wp:paragraph {"fontSize":"large","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<p class="has-large-font-size" style="margin-top:0;margin-bottom:0">Aa</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"agile-swatch-label","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<p class="agile-swatch-label" style="margin-top:0;margin-bottom:0">large · 18–22px</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"agile-type-row","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<div class="wp-block-group agile-type-row">
			<!-- wp:paragraph {"fontSize":"x-large","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<p class="has-x-large-font-size" style="margin-top:0;margin-bottom:0">Aa</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"agile-swatch-label","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<p class="agile-swatch-label" style="margin-top:0;margin-bottom:0">x-large · 22–28px</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"agile-type-row","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<div class="wp-block-group agile-type-row">
			<!-- wp:paragraph {"fontSize":"2-x-large","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<p class="has-2-x-large-font-size" style="margin-top:0;margin-bottom:0">Aa</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"agile-swatch-label","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<p class="agile-swatch-label" style="margin-top:0;margin-bottom:0">2-x-large · 28–34px</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"agile-type-row","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<div class="wp-block-group agile-type-row">
			<!-- wp:paragraph {"fontSize":"3-x-large","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<p class="has-3-x-large-font-size" style="margin-top:0;margin-bottom:0">Aa</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"agile-swatch-label","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<p class="agile-swatch-label" style="margin-top:0;margin-bottom:0">3-x-large · 34–46px</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"agile-type-row","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<div class="wp-block-group agile-type-row">
			<!-- wp:paragraph {"fontSize":"4-x-large","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<p class="has-4-x-large-font-size" style="margin-top:0;margin-bottom:0">Aa</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"agile-swatch-label","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<p class="agile-swatch-label" style="margin-top:0;margin-bottom:0">4-x-large · 46–58px</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"agile-type-row","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<div class="wp-block-group agile-type-row">
			<!-- wp:paragraph {"fontSize":"5-x-large","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<p class="has-5-x-large-font-size" style="margin-top:0;margin-bottom:0">Aa</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"agile-swatch-label","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<p class="agile-swatch-label" style="margin-top:0;margin-bottom:0">5-x-large · 58–70px</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"agile-band","style":{"spacing":{"padding":{"top":"var:preset|spacing|2-x-large","bottom":"var:preset|spacing|2-x-large"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull agile-band" style="padding-top:var(--wp--preset--spacing--2-x-large);padding-bottom:var(--wp--preset--spacing--2-x-large)">
	<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
	<h3 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'Fonts', 'agile' ); ?></h3>
	<!-- /wp:heading -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"fontFamily":"figtree","fontSize":"large"} -->
		<p class="has-figtree-font-family has-large-font-size"><?php esc_html_e( 'The quick brown fox jumps over the lazy dog.', 'agile' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"className":"agile-swatch-label"} -->
		<p class="agile-swatch-label"><?php esc_html_e( 'Figtree — body text', 'agile' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"fontFamily":"space-grotesk","fontSize":"large","style":{"typography":{"fontWeight":"700"}}} -->
		<p class="has-space-grotesk-font-family has-large-font-size" style="font-weight:700"><?php esc_html_e( 'The quick brown fox jumps over the lazy dog.', 'agile' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"className":"agile-swatch-label"} -->
		<p class="agile-swatch-label"><?php esc_html_e( 'Space Grotesk — headings', 'agile' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"fontFamily":"space-mono","fontSize":"large"} -->
		<p class="has-space-mono-font-family has-large-font-size"><?php esc_html_e( 'The quick brown fox jumps over the lazy dog.', 'agile' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"className":"agile-swatch-label"} -->
		<p class="agile-swatch-label"><?php esc_html_e( 'Space Mono — labels & code', 'agile' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|2-x-large","bottom":"var:preset|spacing|2-x-large"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--2-x-large);padding-bottom:var(--wp--preset--spacing--2-x-large)">
	<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
	<h3 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'Spacing', 'agile' ); ?></h3>
	<!-- /wp:heading -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","verticalAlignment":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:html -->
			<div class="agile-scale-bar" style="width:var(--wp--preset--spacing--x-small)"></div>
			<!-- /wp:html -->
			<!-- wp:paragraph {"className":"agile-swatch-label"} -->
			<p class="agile-swatch-label">x-small</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","verticalAlignment":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:html -->
			<div class="agile-scale-bar" style="width:var(--wp--preset--spacing--small)"></div>
			<!-- /wp:html -->
			<!-- wp:paragraph {"className":"agile-swatch-label"} -->
			<p class="agile-swatch-label">small</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","verticalAlignment":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:html -->
			<div class="agile-scale-bar" style="width:var(--wp--preset--spacing--medium)"></div>
			<!-- /wp:html -->
			<!-- wp:paragraph {"className":"agile-swatch-label"} -->
			<p class="agile-swatch-label">medium</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","verticalAlignment":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:html -->
			<div class="agile-scale-bar" style="width:var(--wp--preset--spacing--large)"></div>
			<!-- /wp:html -->
			<!-- wp:paragraph {"className":"agile-swatch-label"} -->
			<p class="agile-swatch-label">large</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","verticalAlignment":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:html -->
			<div class="agile-scale-bar" style="width:var(--wp--preset--spacing--x-large)"></div>
			<!-- /wp:html -->
			<!-- wp:paragraph {"className":"agile-swatch-label"} -->
			<p class="agile-swatch-label">x-large</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","verticalAlignment":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:html -->
			<div class="agile-scale-bar" style="width:var(--wp--preset--spacing--2-x-large)"></div>
			<!-- /wp:html -->
			<!-- wp:paragraph {"className":"agile-swatch-label"} -->
			<p class="agile-swatch-label">2-x-large</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","verticalAlignment":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:html -->
			<div class="agile-scale-bar" style="width:var(--wp--preset--spacing--3-x-large)"></div>
			<!-- /wp:html -->
			<!-- wp:paragraph {"className":"agile-swatch-label"} -->
			<p class="agile-swatch-label">3-x-large</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"agile-band","style":{"spacing":{"padding":{"top":"var:preset|spacing|2-x-large","bottom":"var:preset|spacing|2-x-large"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull agile-band" style="padding-top:var(--wp--preset--spacing--2-x-large);padding-bottom:var(--wp--preset--spacing--2-x-large)">
	<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
	<h3 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'Buttons', 'agile' ); ?></h3>
	<!-- /wp:heading -->

	<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}},"layout":{"type":"flex"}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--small)">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Primary button', 'agile' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Outline button', 'agile' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
