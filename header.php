<?php
/**
 * Theme Header
 *
 * Header data.
 *
 * @since   1.0.0
 * @package Agile
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'ag_body_open' ); ?>

<a class="skip-link" href="#ag-main" aria-label="Skip to main content"><?php esc_html_e( 'Skip to main content ', 'agile' ); ?></a>
<a class="skip-link" href="#ag-footer" aria-label="Skip to footer"><?php esc_html_e( 'Skip to footer ', 'agile' ); ?></a>

<?php do_action( 'ag_before_header' ); ?>

<header id="ag-header" class="ag-header">
	<div class="ag-container ag-header__container">
		<div class="ag-header__site-logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home">
				<?php 
				if ( has_custom_logo() ) :
					$logo = Arisch\Agile\Extras\Helper_Functions::get_custom_logo();
					?>
					<img src="<?php echo esc_url( $logo[0] ); ?>" width="<?php echo esc_attr( $logo[1] ); ?>" height="<?php echo esc_attr( $logo[2] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>">
				<?php else : ?>
					<div class="ag-header__site-name">
						<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>
					</div>
				<?php endif; ?>
			</a>
		</div>
		<nav class="ag-block ag-header__nav">
			<button class="ag-header__menu-toggle screen-reader-text" aria-controls="ag-header-menu" aria-expanded="false"><?php esc_html_e( 'Header Menu', 'agile' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'header',
					'menu_id'        => 'agHeaderMenu',
					'menu_class'     => 'ag-header__menu',
				)
			);
			?>
		</nav>
	</div>
</header>

<?php do_action( 'ag_after_header' ); ?>
