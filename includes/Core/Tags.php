<?php
/**
 * Custom tags class.
 *
 * @package Agile
 */

namespace Arisch\Agile\Core;

use getID3;

/**
 * Custom tags class.
 */
class Tags {
	/**
	 * Posted on time.
	 *
	 * @param bool $get_modified_time Get modified time.
	 * @return string
	 */
	public static function posted_on( $get_modified_time = false ): string {
		$time_string = '<time datetime="%1$s" class="ag-single-post__header-meta-published-date">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) && $get_modified_time === true ) {
			$time_string = '<time datetime="%1$s" class="ag-single-post__header-meta-published-date">%2$s</time><time datetime="%3$s" class="ag-single-post__header-meta-modified-date">%4$s</time>';
		}
		$posted_on = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);
		return $posted_on;
	}

	/**
	 * Posted by.
	 *
	 * @return string
	 */
	public static function posted_by(): string {
		// translators: %s: Author name.
		$posted_by_who = sprintf( esc_html__( 'By %s', 'agile' ), get_the_author() );
		return $posted_by_who;
	}

	/**
	 * Get taxonomy string
	 *
	 * @param string $taxonomy Taxonomy.
	 * @return string
	 */
	public static function get_taxonomy( $taxonomy ): string {
		$taxonomy_list = '';

		if ( $taxonomy === 'category' ) {
			$taxonomy_list = get_the_category_list( esc_html__( ', ', 'agile' ) );
		} elseif ( $taxonomy === 'tag' ) {
			$taxonomy_list = get_the_tag_list( '', esc_html__( ', ', 'agile' ) );
		} else {
			$taxonomy_list = self::get_custom_taxonomy( $taxonomy );
		}

		return $taxonomy_list;
	}

	/**
	 * Get custom taxonomy values
	 *
	 * @param string $tax Taxonomy.
	 * @return string
	 */
	private function get_custom_taxonomy( $tax ): string {
		if ( ! taxonomy_exists( $tax ) ) {
			return '';
		}
		$tax_list = '';
		$tax_arr = get_terms(
			array(
				'taxonomy'   => $tax,
				'hide_empty' => false,
			)
		);

		foreach ( $tax_arr as $term ) {
			$tax_list .= $term->name . ', ';
		}

		return $tax_list;
	}
}
