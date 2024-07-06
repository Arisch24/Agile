<?php
/**
 * Theme Header
 *
 * Header data.
 *
 * @since   1.0.0
 * @package Agile
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
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

<a class="skip-link" href="#ag-main" aria-label="Skip to main content"><?php esc_html_e( 'Skip to main content', 'agile' ); ?></a>
<a class="skip-link" href="#ag-footer" aria-label="Skip to footer"><?php esc_html_e( 'Skip to footer', 'agile' ); ?></a>

<?php do_action( 'ag_before_header' ); ?>

<header id="ag-site-header" class="ag-site-header">
	<div class="ag-container ag-site-header__container">
		<div class="ag-site-header__site-logo">
			<a class="ag-site-header__site-name" href="<?php echo esc_url( home_url( '/' ) ); ?>"  rel="home">
				<?php 
				if ( has_custom_logo() ) :
					$logo = Arisch\Agile\Extras\Helper_Functions::get_custom_logo();
					echo esc_html( printf( '<img src="%s" width="%u" height="%u" alt="%s"', $logo[0], $logo[1], $logo[2], $logo['alt'] ) );
				else :
					echo esc_html( get_bloginfo( 'name' ) );
				endif;
				?>
			</a>
		</div>
		<nav class="ag-block ag-site-header__nav">
			<button class="ag-site-header__menu-toggle screen-reader-text" aria-controls="ag-site-header-menu" aria-expanded="false"><?php esc_html_e( 'Header Menu', 'agile' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'header',
					'menu_id'        => 'agHeaderMenu',
					'menu_class'     => 'ag-site-header__menu',
				)
			);
			?>
		</nav>
	</div>
</header>

<?php do_action( 'ag_after_header' ); ?>

<main id="ag-main" class="ag-site-main">

	<?php
	do_action( 'ag_before_main_inner' );
