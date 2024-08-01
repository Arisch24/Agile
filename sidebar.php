<?php
/**
 * The sidebar containing the main widget area.
 *
 * @since 1.0.0
 * @package Agile
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


$sidebar_id = 'ag-sidebar';
if ( ! is_active_sidebar( $sidebar_id ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( $sidebar_id ); ?>
</aside>
