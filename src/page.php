<?php
/**
 * Page default template
 *
 * @package hum-core
 */

// Breadcrumbs
add_action( 'tha_entry_top', 'hum_breadcrumbs', 8 );

// Flexible content
function hum_flex_page(){
  get_template_part( 'template-parts/acf/flex-page' );
}
add_action( 'tha_entry_content_after', 'hum_flex_page', 10 );

// Build the page
require get_template_directory() . '/index.php';
