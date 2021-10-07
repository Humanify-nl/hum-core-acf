<?php
/**
 * The front page
 *
 * @package hum-core
 */

// Flexible content
function hum_flex_home(){
  get_template_part( 'template-parts/acf/flex-home' );
}
add_action( 'tha_entry_content_after', 'hum_flex_home', 10 );


// Build the page
require get_template_directory() . '/index.php';
