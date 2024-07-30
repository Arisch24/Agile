<?php
/**
 * Template part for displaying posts.
 *
 * @package Agile
 */

?>

<li class="ag-flex ag-post-grid__card">
	<div class="ag-flex ag-post-grid__card-header">
			<?php
			if ( has_post_thumbnail() ) :
				echo '<figure class="ag-figure ag-post-grid__card-header-image">';
				the_post_thumbnail( 'large' );
				echo '</figure>';
			endif;
			?>
		</div>
	<div class="ag-flex ag-post-grid__card-body">
		<h3 class="ag-post-grid__card-body-title">
			<a href="<?php echo esc_url( get_the_permalink() ); ?>">
				<?php echo esc_html( get_the_title() ); ?>
			</a>
		</h3>
		<div class="ag-post-grid__card-body-excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 20 ) ); ?></div>
		<span class="ag-post-grid__card-body-cat">
			<?php
			foreach ( get_the_category() as $category ) {
				echo esc_html( $category->name . ', ' );
			}
			?>
		</span>
	</div>
	<div class="ag-flex ag-post-grid__card-footer">
		<?php $avatar_data = Arisch\Agile\Extras\Helper_Functions::get_author_img(); ?>
		<figure class="ag-figure ag-post-grid__card-footer-img">
		<?php
		printf(
			'<img src="%s" width="%s" height="%s" srcset="%s %s" alt="%s">',
			esc_url( $avatar_data['url'] ),
			esc_attr( $avatar_data['width'] ),
			esc_attr( $avatar_data['height'] ),
			esc_url( $avatar_data['url'] ),
			'2x',
			'Author Avatar'
		);
		?>
		</figure>
		<p class="ag-post-grid__card-footer-author-name"><?php echo esc_html( get_the_author() ); ?></p>
	</div>
</li>
