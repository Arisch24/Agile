<?php
/**
 * Custom Post Types file.
 *
 * @since   1.0.0
 * @package Agile
 */

namespace Arisch\Agile\Extras;

/**
 * Create Custom Post Types
 */
class Custom_Post_Types {
	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'create_post_type' ) );
		add_action( 'init', array( $this, 'create_taxonomy' ) );
	}

	/**
	 * Creates the post type.
	 *
	 * @return void
	 */
	public function create_post_type() {
		// your post type
		register_post_type(
			'service',
			array(
				'labels' => array(
					'name'          => __( 'Services', 'agile' ),
					'singular_name' => __( 'Service', 'agile' ),
					'add_new'       => __( 'Add New Service', 'agile' ),
					'add_new_item'  => __( 'Add New Service', 'agile' ),
					'edit_item'  => __( 'Edit Service', 'agile' ),
					'new_item'      => __( 'New Service', 'agile' ),
					'view_item'     => __( 'View Service', 'agile' ),
					'view_items'    => __( 'View Services', 'agile' ),
					'search_items'  => __( 'Search Services', 'agile' ),
					'not_found'     => __( 'No Services found', 'agile' ),
					'not_found_in_trash' => __( 'No Services found in Trash', 'agile' ),
					'parent_item_colon' => __( 'Parent Service:', 'agile' ),
					'all_items'     => __( 'All Services', 'agile' ),
					'archives'      => __( 'Services', 'agile' ),
					'attributes'    => __( 'Service Attributes', 'agile' ),
					'insert_into_item' => __( 'Insert into Service', 'agile' ),
					'uploaded_to_this_item' => __( 'Uploaded to this Service', 'agile' ),
					'featured_image' => __( 'Featured Image', 'agile' ),
					'set_featured_image' => __( 'Set featured image', 'agile' ),
					'remove_featured_image' => __( 'Remove featured image', 'agile' ),
					'use_featured_image' => __( 'Use as featured image', 'agile' ),
					'filter_items_list' => __( 'Filter Services list', 'agile' ),
					'filter_by_date' => __( 'Filter services by date', 'agile' ),
					'items_list_navigation' => __( 'Services list navigation', 'agile' ),
					'items_list'    => __( 'Services list', 'agile' ),
					'item_published' => __( 'Service published.', 'agile' ),
					'item_published_privately' => __( 'Service published privately.', 'agile' ),
					'item_reverted_to_draft' => __( 'Service reverted to draft.', 'agile' ),
					'item_trashed'  => __( 'Service trashed.', 'agile' ),
					'item_scheduled' => __( 'Service scheduled.', 'agile' ),
					'item_updated'  => __( 'Service updated.', 'agile' ),
					'item_link'     => __( 'Service link', 'agile' ),
					'item_link_description' => __( 'A link to a service.', 'agile' ),
				),
				'public' => true,
				'has_archive' => true,
				'hierarchical' => true,
				'show_in_rest' => true,
				'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
				'rewrite' => array( 'slug' => 'service' ),
				'menu_icon' => 'dashicons-admin-generic',
			)
		);
	}

	/**
	 * Create the taxonomy.
	 *
	 * @return void
	 */
	public function create_taxonomy() {
		// your taxonomy
		register_taxonomy(
			'service_type',
			'service',
			array(
				'labels' => array(
					'name'          => __( 'Service Types', 'agile' ),
					'singular_name' => __( 'Service Type', 'agile' ),
					'search_items'  => __( 'Search Service Types', 'agile' ),
					'popular_items' => __( 'Popular Service Types', 'agile' ),
					'all_items'     => __( 'All Service Types', 'agile' ),
					'parent_item'   => __( 'Parent Service Type', 'agile' ),
					'parent_item_colon' => __( 'Parent Service Type:', 'agile' ),
					'edit_item'     => __( 'Edit Service Type', 'agile' ),
					'view_item'     => __( 'View Service Type', 'agile' ),
					'update_item'   => __( 'Update Service Type', 'agile' ),
					'add_new_item'  => __( 'Add New Service Type', 'agile' ),
					'new_item_name' => __( 'New Service Type Name', 'agile' ),
					'template_name' => __( 'Service Type', 'agile' ),
					'separate_items_with_commas' => __( 'Separate service types with commas', 'agile' ),
					'add_or_remove_items' => __( 'Add or remove service types', 'agile' ),
					'choose_from_most_used' => __( 'Choose from the most used service types', 'agile' ),
					'not_found'     => __( 'No service types found.', 'agile' ),
					'no_terms'      => __( 'No service types', 'agile' ),
					'filter_by_item' => __( 'Filter by service type', 'agile' ),
					'items_list_navigation' => __( 'Service types list navigation', 'agile' ),
					'items_list'    => __( 'Service types list', 'agile' ),
					'back_to_items' => __( '← Back to service types', 'agile' ),
					'item_link'     => __( 'Service type link', 'agile' ),
					'item_link_description' => __( 'A link to a service type.', 'agile' ),
				),
				'public' => true,
				'hierarchical' => true,
				'show_in_rest' => true,
				'rewrite' => array( 'slug' => 'service-type' ),
			)
		);
	}
}
