<?php
/**
 * Index Template
 *
 * @since   1.0.0
 * @package Agile
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

				if ( is_home() || is_front_page() ) :
					?>

				<h1><?php single_post_title(); ?></h1>
				<hr>

					<?php
				endif;

				echo '<ul class="ag-post-grid">';

				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', get_post_format() );
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
</article>

<?php

get_footer();
