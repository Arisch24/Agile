<?php
/**
 * Search Form Template
 *
 * @package Agile
 */

?>

<form class="ag-search__form" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
	<label for="search">
		<span class="screen-reader-text">Search for:</span>
		<input type="search" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Search..." />
	</label>
	<button type="submit" aria-label="Search"><?php echo esc_html__( 'Search', 'agile' ); ?></button>
</form>
