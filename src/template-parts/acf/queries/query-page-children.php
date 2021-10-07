<?php
/**
 * Query page children.
 *
 * @package hum-core-acf
 */

$child_pages = get_pages(
	[
		'parent'    => get_the_id(),
		'sort_column' => 'menu_order',
  ]
);

if ( !empty( $child_pages ) ) {

	echo '<div class="'. hum_grid_class_preview() .'">';

		foreach ( $child_pages as $page ) {

		  setup_postdata( $page );
			include( locate_template( 'template-parts/preview-page.php' ) );

		}
		wp_reset_postdata();

	echo '</div>';
}
