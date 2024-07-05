<?php
/**
 * Single Page
 *
 * @since 1.0.0
 * @package agile
 */

get_header();
?>

<section class="ag-section">
	<div class="ag-container">
		<h1><?php echo esc_html( get_the_title() ); ?></h1>
	</div>
</section>

<?php
$query = new WP_Query(
	array(
		'post_type'      => 'post',
		'posts_per_page' => 5,
		'paged'          => get_query_var( 'paged' ),
	) 
);
if ( $query->have_posts() ) :
	while ( $query->have_posts() ) :
		$query->the_post();
		get_template_part( 'template-parts/content', 'page' );
	endwhile;
else :
	get_template_part( 'template-parts/content', 'none' );
endif;

get_footer();
