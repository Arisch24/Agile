<?php
/**
 * 404 page template (Not Found)
 *
 * @package Agile
 * @since 1.0.0
 * @link https://developer.wordpress.org/themes/functionality/404-pages/
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

?>

<section class="ag-section ag-not-found">
	<div class="ag-container">
		<h1><?php esc_html_e( 'Oops! That page can\'t be found. Find something else?', 'agile' ); ?></h1>
		<div><?php get_search_form(); ?></div>
	</div>
</section>

<?php
get_footer();
?>
