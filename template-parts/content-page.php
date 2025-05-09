<?php
/**
 * Template part for pages.
 *
 * @package Agile
 * @since 1.0.0
 * @link https://developer.wordpress.org/reference/functions/get_template_part/
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


if ( get_theme_mod( 'agile_page_title', true ) ) :
	echo '<h1>' . esc_html( get_the_title() ) . '</h1>';
	echo '<hr>';
endif;
?>

</h1>
<div class="ag-post-content">
	<?php
	the_content();
	?>
</div>
