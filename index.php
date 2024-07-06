<?php
/**
 * Index Template
 *
 * @since   1.0.0
 * @package Agile
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
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif;
			?>
	</div>
	</section>
</article>

<?php

get_footer();
