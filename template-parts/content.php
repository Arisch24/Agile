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
		<div class="ag-post-grid__card-body-excerpt"><?php the_excerpt(); ?></div>
		<span class="ag-post-grid__card-body-cat">
			<?php
			foreach ( get_the_category() as $category ) {
				echo esc_html( $category->name . ', ' );
			}
			?>
		</span>
	</div>
	<div class="ag-flex ag-post-grid__card-footer">
		<?php $avatar_data = \Arisch\Agile\Extras\Helper_Functions::get_author_img(); ?>
		<figure>
			<img class="ag-post-grid__card-footer-img" src="<?php echo esc_url( $avatar_data['url'] ); ?>" width="<?php echo esc_attr( $avatar_data['width'] ); ?>" height="<?php echo esc_attr( $avatar_data['height'] ); ?>" srcset="<?php printf( '%s %s', esc_url( $avatar_data['url'] ), '2x' ); ?>" alt="Author avatar">
		</figure>
		<p class="ag-post-grid__card-footer-author-name"><?php echo esc_html( get_the_author() ); ?></p>
	</div>
</li>
