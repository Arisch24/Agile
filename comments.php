<?php
/**
 * The template for displaying comments.
 *
 * @package Agile
 */

if ( post_password_required() ) {
	return;
}
?>

<section class="ag-section ag-single-post__comments">
	<div class="ag-container">
		<?php if ( have_comments() ) : ?>
			<h2 class="ag-single-post__comments-subtitle">
				<?php echo esc_html__( 'Comments', 'agile' ); ?>
			</h2>
			<h3 class="ag-single-post__comments-title">
			<?php
				printf(
					esc_html( _nx( '%1$s comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'agile' ) ),
					number_format_i18n( get_comments_number() ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			?>
			</h3>

			<ul class="ag-single-post__comments-list">
				<?php
					wp_list_comments(
						array(
							'style' => 'ul',
							'short_ping' => true,
							'avatar_size' => 40,
							'max_depth' => 5,
							'type' => 'comment',
							'callback' => '\Arisch\Agile\Core\Comment::comment_callback',
						)
					);
				?>
			</ul> <!-- Comment list -->

			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
				<nav class="ag-single-post__comments-nav" role="navigation">
					<h3 class="screen-reader-text"><?php echo esc_html__( 'Comment Navigation', 'agile' ); ?></h3>
					<div class="ag-single-post__comments-nav-prev">
						<?php previous_comments_link( '&larr; Older Comments', 'agile' ); ?>
					</div>
					<div class="ag-single-post__comments-nav-next">
						<?php next_comments_link( '&larr; Newer Comments', 'agile' ); ?>
					</div>
				</nav>
			<?php endif; ?> <!-- Check for comment navigation through pagination -->

			<?php if ( ! comments_open() && get_comments_number() ) : ?>
				<p class="ag-single-post__comments-closed"><?php echo esc_html__( 'Comments are closed.', 'agile' ); ?></p>
			<?php endif; ?> <!-- Comment form -->

		<?php endif; // Have comments ?>

		<?php
		$ag_comment_args = array(
			'title_reply_before' => '<h2 class="ag-single-post__comments-form-title">',
			'title_reply_after' => '</h2>',
		);
		comment_form( $ag_comment_args );
		?>

</div>
</section>
