<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Agile
 */

$sidebar_id = 'Sidebar';
if ( ! is_active_sidebar( 'ag-sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'ag-sidebar' ); ?>
</aside>
