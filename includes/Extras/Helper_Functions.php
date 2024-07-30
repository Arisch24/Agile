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
}
