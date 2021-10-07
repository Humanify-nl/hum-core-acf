<?php
/**
 * Template Name: Page group
 * Template Post Type: page
 *
 * @package hum-core-acf
 */

add_action( 'tha_entry_content_after', 'hum_page_children_row' );

// Build the page
require get_template_directory() . '/index.php';
