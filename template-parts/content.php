<?php
/**
 * Template part for displaying posts.
 *
 * @package Agile
 */

?>

<main id="ag-main" class="ag-site-main">

	<?php do_action( 'ag_main_inner_before' ); ?>

<section class="ag-section">
<div class="ag-container">
	<h1><?php echo esc_html( get_the_title() ); ?></h1>
</div>
</section>

<section class="ag-section">
	<div class="ag-container">
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<div class="card">
				<div class="card__header">
					<figure>
					<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail( 'large' );
					}
					?>
					</figure>
				</div>
				<div class="card__body">
					<h2><?php esc_html( the_title() ); ?></h2>
					<?php esc_html( the_content() ); ?>
				</div>
			</div>
		<?php endwhile; ?>

		<?php do_action( 'ag_main_inner_after' ); ?>
	</div>
</section>

</main>