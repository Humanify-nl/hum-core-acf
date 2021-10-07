<?php
/**
 * Query page siblings.
 *
 * @package hum-core-acf
 */
 
global $post;
$sibling_pages = get_pages(
	[
		'child_of' => $post->post_parent,
		'exclude' => [ get_the_id() ],
		'sort_column' => 'menu_order',
  ]
);

if ( !empty( $sibling_pages ) ) {

	echo '<div class="'. hum_grid_class_preview() .'">';

		foreach ( $sibling_pages as $page ) {

		  setup_postdata( $page );
			include( locate_template( 'template-parts/preview-page.php' ) );

		}
		wp_reset_postdata();

	echo '</div>';
}
