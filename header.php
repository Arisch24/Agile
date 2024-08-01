<?php
/**
 * Theme Header
 *
 * Header data.
 *
 * @package Agile
 * @since   1.0.0
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'wp_body_open' ); ?>

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
		<button class="ag-site-header__menu-toggle" data-nav-toggle="false" aria-controls="navigation" aria-expanded="false">
			<span class="ag-site-header__hamburger">
				<span class="ag-site-header__hamburger-line"></span>
				<span class="ag-site-header__hamburger-line"></span>
				<span class="ag-site-header__hamburger-line"></span>
			</span>
			<span class="screen-reader-text"><?php esc_html_e( 'Header Menu', 'agile' ); ?></span>
		</button>
		<nav id="navigation" class="ag-site-header__navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'header',
					'menu_class'     => 'ag-site-header__nav-menu',
					'container'     => false,
					'walker'         => new Arisch\Agile\Core\Menu_Walker(),
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
