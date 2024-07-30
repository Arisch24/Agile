<?php
/**
 * Single post template.
 *
 * @package Agile
 */

?>

<section class="ag-section ag-single-post__header">
	<div class="ag-container">
		<h1 class="ag-single-post__header-title">
			<?php the_title(); ?>
		</h1>
		<div class="ag-flex ag-single-post__header-meta">
			<div class="ag-flex ag-single-post__header-meta-author">
				<?php $avatar_data = Arisch\Agile\Extras\Helper_Functions::get_author_img(); ?>
				<figure class="ag-figure ag-single-post__header-meta-author-img">
					<?php
					printf(
						'<img src="%s" width="%s" height="%s" srcset="%s %s" alt="%s">',
						esc_url( $avatar_data['url'] ),
						esc_attr( $avatar_data['width'] ),
						esc_attr( $avatar_data['height'] ),
						esc_url( $avatar_data['url'] ),
						'2x',
						'Author Avatar'
					);
					?>
				</figure>
				<span class="ag-single-post__header-meta-author-name">
					<?php
					// translators: %s: Author name.
					printf( esc_html__( 'By %s', 'agile' ), get_the_author() );
					?>
				</span>
			</div>
			<time datetime="<?php echo get_the_date( 'c' ); ?>" class="ag-single-post__header-meta-published-date"><?php echo get_the_date(); ?></time>
			<a href="#comments" class="ag-single-post__header-meta-comment-count" aria-current="page">
				<?php
				echo esc_html( Arisch\Agile\Extras\Helper_Functions::get_comment_count() );
				?>
			</a>
		</div>


		<?php if ( has_post_thumbnail() ) : ?>
			<figure class="ag-figure ag-single-post__header-bg-image">
				<?php
				the_post_thumbnail(
					'large',
					array(
						'loading' => 'eager',
					)
				);
				?>
			</figure>
		<?php endif; ?>
	</div>
</section>

<section class="ag-section ag-single-post__article">
	<div class="ag-container">
	<?php
	/*
		* translators: %s: Name of current post.
		*/
	// translators: %s: Name of current post.
	the_content(
		sprintf(
			__( 'Continue reading %s', 'agile' ), // translators: %s: Name of current post.
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		)
	);

	wp_link_pages(
		array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'agile' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'agile' ) . ' </span>%',
			'separator'   => '<span class="screen-reader-text">, </span>',
		)
	);
	?>
		</div>
</section>
