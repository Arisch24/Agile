<?php
/**
 * Single Post
 *
 * @package agile
 */

get_header();

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'ag-article ag-single-post' ); ?>>

	<?php
	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content-single', get_post_type() );

		?>
		<section class="ag-section">
			<div class="ag-container">
				<?php
					the_post_navigation(
						array(
							'prev_text' => '&larr;<span class="ag-single-post__prev-btn">' . __( 'Previous Post', 'agile' ) . '</span>',
							'next_text' => '&rarr;<span class="ag-single-post__next-btn">' . __( 'Next Post', 'agile' ) . '</span>',
							'in_same_term' => true,
							'screen_reader_text' => __( 'Continue Reading', 'agile' ),
						)
					);
				?>
			</div>
		</section>

		<section class="ag-section">
			<div class="ag-container">
				<h2></h2>
				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				?>
			</div>
		</section>
<?php endwhile; ?>
</article>

<?php

get_footer();
