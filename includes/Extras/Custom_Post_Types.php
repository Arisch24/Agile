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
	}

	/**
	 * Create the taxonomy.
	 *
	 * @return void
	 */
	public function create_taxonomy() {
		// your taxonomy
	}
}
