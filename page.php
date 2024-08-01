<?php
/**
 * Single Page
 *
 * @since 1.0.0
 * @package agile
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<article class="ag-article">
	<section class="ag-section">
		<div class="ag-container">
			<?php
			if ( have_posts() ) :

				while ( have_posts() ) :

					the_post();
					get_template_part( 'template-parts/content', 'page' );

					// Check if comments are open or we have at least one comment.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile;

				wp_reset_postdata();

			endif;
			?>
		</div>
	</section>
</article>

<?
get_footer();
