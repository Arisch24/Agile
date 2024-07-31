<?php
/**
 * 404 page template (Not Found)
 *
 * @package Agile
 */

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
