<?php
/**
 * Footer
 *
 * The footer template.
 *
 * @since   1.0.0
 * @package Agile
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

do_action( 'ag_after_main_inner' );
?>

</main>

<?php do_action( 'ag_before_footer' ); ?>

<footer id="ag-footer" class="ag-site-footer">
	<div class="ag-container ag-site-footer__container">
		<small>&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> - <?php echo get_bloginfo( 'name' ); //phpcs:ignore ?> &dot; <?php printf( esc_html__( 'Built by %1$s', 'agile' ), '<a href="https://arischvaran.com/" target="_blank">Arischvaran</a>' ); ?></small>
	</div>
</footer>

<?php do_action( 'ag_after_footer' ); ?>

<?php wp_footer(); ?>

<?php do_action( 'ag_body_close' ); ?>

	</body>
</html>
