<?php
/**
 * The template for displaying all single posts
 *
 * @package hum-core-acf
 */

// Entry category in header
add_action( 'tha_entry_top', 'hum_entry_category', 8 );
add_action( 'tha_entry_top', 'hum_entry_author', 12 );
add_action( 'tha_entry_top', 'hum_entry_image', 14 );
// add_action( 'tha_entry_top', 'hun_entry_header_share', 13 );

add_filter( 'hum_page_layout', 'hum_return_content_center');
add_filter( 'hum_content_area_wrap', 'hum_enable_wrap' );


// Flexible content
function hum_flex_single(){
  get_template_part( 'template-parts/acf/flex-single' );
}
add_action( 'tha_entry_content_after', 'hum_flex_single', 10 );


// After entry
add_action( 'tha_content_while_after', 'hum_single_after_entry', 8 );


// Build the page
require get_template_directory() . '/index.php';
