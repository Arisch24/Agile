<?php
/**
 * Theme Functions
 *
 * Entire theme's function definitions.
 *
 * @since   1.0.0
 * @package Agile
 * @link https://developer.wordpress.org/themes/core-concepts/custom-functionality/
 */

namespace Arisch\Agile;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Globals.
define( 'AGILE_VER', '1.0.0' );
define( 'AGILE_DIR', get_template_directory() );
define( 'AGILE_URL', get_template_directory_uri() );

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}

if ( class_exists( 'Arisch\Agile\Init' ) ) {
	new Init();
}
