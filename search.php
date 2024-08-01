<?php
/**
 * Search Page
 *
 * @package Agile
 * @since 1.0.0
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


get_header();
?>

<section class="ag-section ag-search">
	<div class="ag-container">
		<h1 class="ag-page-title">
			Search Results for: <?php echo get_search_query(); ?>
		</h1>
		<div class="ag-search__form-wrapper"><?php get_search_form(); ?></div>
		<small><?php echo esc_html__( 'If you are not happy with the results below, please do another search.' ); ?></small>
		<hr>
	</div>
	<div class="ag-container">
		<?php
		if ( have_posts() ) :

			echo '<ul class="ag-flex ag-search-results">';

			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', 'search' );
			endwhile;

			echo '</ul>';

			the_posts_pagination(
				array(
					'prev_text' => __( 'Previous', 'agile' ),
					'next_text' => __( 'Next', 'agile' ),
				)
			);

		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
	</div>
</section>

<?php
get_footer();
