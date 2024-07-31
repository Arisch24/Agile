<?php
/**
 * Single post template.
 *
 * @package Agile
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

<section class="ag-section ag-single-post__header">
	<div class="ag-container container--sidebar">
		<span class="ag-single-post__header-taxonomy">
			<?php
			echo Arisch\Agile\Core\Tags::get_taxonomy( 'category' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			?>
		</span>
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
						echo Arisch\Agile\Core\Tags::posted_by(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					?>
				</span>
			</div>
			<?php
				echo Arisch\Agile\Core\Tags::posted_on( true, true ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			?>
			<a href="#comments" class="ag-single-post__header-meta-comment-count" aria-current="page">
				<?php
				echo esc_html( Arisch\Agile\Core\Comment::get_comment_count() );
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

<section class="ag-section ag-single-post__body">
	<div class="ag-container container--sidebar">
		<div class="ag-post-content">
		<?php
			// translators: %s: Name of current post.
			the_content(
				sprintf(
					__( 'Continue reading %s', 'agile' ), // translators: %s: Name of current post.
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				)
			);
			?>
		</div>
		<?php get_sidebar(); ?>
	<?php
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
