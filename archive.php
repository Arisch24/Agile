<?php
/**
 * Archive Template
 *
 * @since  1.0.0
 * @package Agile
 */

get_header();
?>

<section class="ag-section">
	<div class="ag-container">
		<?php
		the_archive_title( '<h1>', '</h1>' );
		the_archive_description( '<p>', '</p>' );

		echo '<hr>';

		if ( have_posts() ) :
			
			echo '<ul class="ag-post-grid">';
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', get_post_type() ); 
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
