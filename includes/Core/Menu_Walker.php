<?php
/**
 * Walker Nav Menu file.
 *
 * @package Agile
 * @since 1.0.0
 * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
 * @link https://developer.wordpress.org/reference/classes/walker_nav_menu/
 */

namespace Arisch\Agile\Core;

use Walker_Nav_Menu;

/**
 * Walker Nav Menu class.
 */
class Menu_Walker extends Walker_Nav_Menu {
	/**
	 * Start level (ul).
	 *
	 * @param string  $output
	 * @param integer $depth
	 * @param array   $args
	 * @return void
	 */
	public function start_lvl( &$output, $depth = 0, $args = array() ): void {
		$indent = str_repeat( "\t", $depth );
		$submenu = ( $depth > 0 ) ? 'sub-menu' : '';
		$output .= "\n$indent<ul class=\"ag-site-header__navlist-item-dropdown-submenu\">\n";
	}

	/**
	 * Start element (li, a, span).
	 *
	 * @param string  $output
	 * @param object  $item
	 * @param integer $depth
	 * @param object  $args
	 * @param integer $id
	 * @return void
	 */
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ): void {
		// set assets.
		$toggle_icon = '<svg width="30" height="30" viewBox="0 0 1706 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M782.02272703 706.46395178L457.91614086 317.53604822h648.21317271z" /></svg>';
		$toggle_btn = '<button type="button" data-dropdown-toggle="false" aria-expanded="false" class="ag-site-header__navlist-item-toggle-dropdown">' . $toggle_icon . '</button>';

		$indent = ( $depth > 0 ) ? str_repeat( "\t", $depth ) : '';

		$li_attr = '';
		$class_names = '';
		$value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		// Add class to li.
		$classes[] = 'menu-item-' . $item->ID;
		$classes[] = ( $args->walker->has_children ) ? 'ag-site-header__navlist-item has--dropdown' : '';
		$classes[] = ( $item->current || $item->current_item_ancestor ) ? 'item--active' : '';
		if ( $depth && $args->walker->has_children ) {
			$classes[] = 'ag-site-header__navlist-item-dropdown-submenu';
		}

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = ' class="' . esc_attr( $class_names ) . '"';

		$id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args );
		$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

		// Generate li.
		$output .= $indent . '<li' . $id . $value . $class_names . $li_attr . '>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

		// Append attributes to anchor tag.
		$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->atrr_title ) . '"' : '';
		$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) . '"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) . '"' : '';
		$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) . '"' : '';

		// phpcs:ignore
		// $attributes .= ! empty( $args->walker->has_children ) ? ' class="ag-site-header__navlist-link"' : '';

		// Generate anchor tag.
		$item_output = $args->before;
		$item_output .= ( $args->walker->has_children ) ? '<div class="ag-site-header__navlist-item-wrapper">' : '';
		$item_output .= '<a' . $attributes . '>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= ( $args->walker->has_children ) ? $toggle_btn . '</div>' : '';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}
