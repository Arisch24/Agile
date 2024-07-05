<?php
/**
 * Template part for pages.
 * 
 * @since 1.0.0
 * @package Agile
 */

?>

<section class="ag-section">
	<div class="ag-container">
		<h3><?php echo esc_html( get_the_title() ); ?></h3>
		<div class="ag-post-content">
			<?php
			the_content();
			?>
		</div>
	</div>
</section>
