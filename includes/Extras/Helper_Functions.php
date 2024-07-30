<?php
/**
 * Helper Functions file.
 *
 * @package Agile
 */

namespace Arisch\Agile\Extras;

/**
 * Class for helper functions.
 */
class Helper_Functions {
	/**
	 * Get custom logo.
	 *
	 * @return array
	 */
	public static function get_custom_logo(): array {

		// get logo array
		$custom_logo_id = get_theme_mod( 'custom_logo' );
		$logo_arr = wp_get_attachment_image_src( $custom_logo_id, 'full' );

		// get alt text
		$logo_alt = get_post_meta( $custom_logo_id, '_wp_attachment_image_alt', true );
		$logo_alt_arr = array(
			'alt' => $logo_alt,
		);

		// merge both arrays
		$new_logo_arr = array_merge( $logo_arr, $logo_alt_arr );

		return $new_logo_arr;
	}

	/**
	 * Get author image.
	 *
	 * @return array
	 */
	public static function get_author_img(): array {
		$avatar_data_arr = get_avatar_data( get_the_author_meta( 'ID' ) );
		return $avatar_data_arr;
	}

	/**
	 * Get comment count.
	 *
	 * @return string
	 */
	public static function get_comment_count() {
		$comment_count = get_comment_count();
		$comment_output = sprintf(
			_n( '%s Comment', '%s Comments', $comment_count['approved'], 'agile' ),
			number_format_i18n( $comment_count['approved'] )
		);
		return $comment_output;
	}

	/**
	 * Comment callback.
	 *
	 * @param object $comment Comment object.
	 * @param array  $args    Arguments.
	 * @param int    $depth   Depth.
	 * @return void
	 */
	public static function comment_callback( $comment, $args, $depth ) {
		if ( 'div' === $args['style'] ) {
			$tag = 'div';
			$add_below = 'comment';
		} else {
			$tag = 'li';
			$add_below = 'div-comment';
		}

		$classes = ' ' . comment_class( empty( $args['has_children'] ) ? '' : 'parent', null, null, false );
		?>

		<<?php echo $tag . $classes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?> id="comment-<?php comment_ID(); ?>">
		<?php if ( 'div' !== $args['style'] ) { ?>
			<div id="div-comment<?php comment_ID(); ?>" class="comment-body">
				<?php } ?>
				<div class="comment-author">
					<?php
					if ( $args['avatar_size'] !== 0 ) {
						echo get_avatar( $comment, $args['avatar_size'] );
					}
					?>
				</div>
				<div class="comment-content">
					<div class="comment-author vcard">
						<h4 class="fn"><?php comment_author_link(); ?></h4>
						<div class="comment-meta">
							<a class="comment-meta-datetime" href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>">
								<?php
								printf(
									esc_html__( '%1$s at %2$s' ),
									esc_html( get_comment_date() ),
									esc_html( get_comment_time() )
								);
								?>
							</a>
						</div>
					</div>
					<div class="comment-text">
						<?php comment_text(); ?>
					</div>
					<div class="comment-action">
						<?php
						comment_reply_link(
							array_merge(
								$args,
								array(
									'add_below' => $add_below,
									'depth' => $depth,
									'max_depth' => $args['max_depth'],
								)
							)
						);
						edit_comment_link( __( '(Edit)' ), '', '' );
						?>
					</div>
				</div>

				<?php if ( $comment->comment_approved === '0' ) { ?>
					<em class="comment-awaiting-moderation">
						<?php echo esc_html__( 'Your comment is awaiting moderation.' ); ?>
					</em><br />
				<?php } ?>

		<?php if ( 'div' !== $args['style'] ) { ?>
			</div>
			<?php
		}
	}
}
