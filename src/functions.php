<?php
/**
 * Functions and definitions
 *
 * @package hum-core-acf
 */

// Cleanup
include_once( get_template_directory() . '/inc/wordpress-cleanup.php' );

include_once( get_template_directory() . '/inc/tha-theme-hooks.php' );
include_once( get_template_directory() . '/inc/theme-settings.php');
include_once( get_template_directory() . '/inc/template-functions.php' );
include_once( get_template_directory() . '/inc/template-tags.php' );
include_once( get_template_directory() . '/inc/plugin-support.php' );
include_once( get_template_directory() . '/inc/scripts.php');

include_once( get_template_directory() . '/inc/acf-functions.php');


/**
* Theme support
*
*/
if ( ! function_exists( 'hum_core_setup' ) ) {

	function hum_core_setup() {

		// Make this theme available for translation.
		load_theme_textdomain( 'hum-core', get_template_directory() . '/languages' );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(	array(
			'primary' => esc_html__( 'Primary Menu', 'hum-core' ),
			'secondary' => esc_html__( 'Secondary Menu', 'hum-core' ),
		) );

		// Editor style
		add_theme_support( 'editor-styles' );
		add_editor_style( 'assets/css/editor.css' );

		// Remove admin bar style fallback
		add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title tag.
		add_theme_support( 'title-tag' );

		// Body open hook
		add_theme_support( 'body-open' );

 		// Featured image
		add_theme_support( 'post-thumbnails' );

		add_image_size( 'small', 360, 360 ); // Unlimited height, hard crop
		add_image_size( 'featured', 1920, 9999 ); // Unlimited height, soft crop
		add_image_size( 'featured-sq', 640, 640 ); // Unlimited height, hard crop
		add_image_size( 'admin', 100, 80 ); // Unlimited height, hard crop

		add_theme_support( 'custom-logo', array(
		  'height'      => null, // Allow full flexibility if no size is specified.
		  'width'       => null, // Allow full flexibility if no size is specified.
		  'flex-height' => true,
		  'flex-width'  => true,
		  'unlink-homepage-logo' => true,
		) );

		// HTML5 support for default core markup.
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		) );

		// remove post-formats
		remove_theme_support( 'post-formats' );

	}
}
add_action( 'after_setup_theme', 'hum_core_setup' );


// Template Hierarchy
function hum_template_archive( $template ) {

	if( is_home() || is_search() ) {
		$template = get_query_template( 'archive' );
	}
	return $template;
}
add_filter( 'template_include', 'hum_template_archive' );
