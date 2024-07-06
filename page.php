<?php
/**
 * Single Page
 *
 * @since 1.0.0
 * @package agile
 */

get_header();
?>

<article class="ag-article">
	<section class="ag-section">
		<div class="ag-container">
			<?php 
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', get_post_type() );
				endwhile;
				wp_reset_postdata();
			endif;
			?>
		</div>
	</section>
</article>

<?
get_footer();
