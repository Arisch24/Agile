<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Agile
 */

$sidebar_id = 'ag-sidebar';
if ( ! is_active_sidebar( $sidebar_id ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( $sidebar_id ); ?>
</aside>
