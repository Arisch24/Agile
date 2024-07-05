<?php
/**
 * Template part for displaying posts.
 *
 * @package Agile
 */

?>

<section class="ag-section">
	<div class="ag-container">
		<h1><?php echo esc_html( get_the_title() ); ?></h1>
	</div>
</section>

<section class="ag-section">
	<div class="ag-container">
		<h2>All Posts</h2>
		<div class="post-grid">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					?>
					<div class="post-grid__card">
						<div class="post-grid__card-header">
							<figure>
							<?php
							if ( has_post_thumbnail() ) {
								the_post_thumbnail( 'medium' );
							}
							?>
							</figure>
						</div>
						<div class="post-grid__card-body">
							<h3 class="post-grid__card-title">
								<a href="<?php echo esc_url( get_the_permalink() ); ?>">
									<?php esc_html( the_title() ); ?>
								</a>
							</h3>
							<div class="post-grid__card-excerpt"><?php esc_html( the_excerpt() ); ?></div>
						</div>
					</div>
					<?php 
			endwhile;
		endif;
			?>
		</div>
	</div>
</section>
