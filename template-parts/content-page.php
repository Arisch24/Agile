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

?>

<h1><?php echo esc_html( get_the_title() ); ?></h1>
<div class="ag-post-content">
	<?php
	the_content();
	?>
</div>
