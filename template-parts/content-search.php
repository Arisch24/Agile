<?php
/**
 * Search Template Part
 *
 * @package Agile
 */

?>

<li class="ag-flex ag-search-results__item">
	<?php if ( get_post_type() === 'post' ) : ?>
		<div class="ag-search-results__item-image-wrapper">
			<?php
			if ( has_post_thumbnail() ) :
				echo '<figure class="ag-figure ag-search-results__item-image">';
				the_post_thumbnail( 'large' );
				echo '</figure>';
			endif;
			?>
		</div>
	<?php endif; ?>
	<div class="ag-flex ag-search-results__item-body">
			<h2 class="ag-search-results__item-title">
		<a href="<?php echo esc_url( get_the_permalink() ); ?>">
			<?php echo esc_html( get_the_title() ); ?>
		</a>
	</h2>
	<div class="ag-search-results__item-excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 40 ) ); ?></div>
	<span class="ag-search-results__item-cat">
		<?php
		echo Arisch\Agile\Core\Tags::get_taxonomy( 'category' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		?>
	</span>
	</div>
</li>
