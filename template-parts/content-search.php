<?php
/**
 * Search Template Part
 *
 * @package Agile
 */

?>

<li class="ag-flex ag-search__results-item">
	<h2 class="ag-search__results-item-title">
		<a href="<?php echo esc_url( get_the_permalink() ); ?>">
			<?php echo esc_html( get_the_title() ); ?>
		</a>
	</h2>
	<div class="ag-search__results-item-excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 40 ) ); ?></div>
</li>
