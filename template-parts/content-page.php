<?php
/**
 * Template part for pages.
 *
 * @since 1.0.0
 * @package Agile
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
