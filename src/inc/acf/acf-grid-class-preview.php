<?php
/**
 * Grid preview class builder
 *
 * @package hum-core-acf
 */

if ( !function_exists( 'hum_grid_class_preview' ) ) {

  function hum_grid_class_preview( $class = false ) {

    // local row
    $use_local = get_sub_field( 'grid_preview' );

    // default
    $grid_classes = [ 'grid-previews' ];

    // extra class
    if ( $class ) {
      $grid_classes[] = $class;
    }
    // locally set in row?
    if ( !empty($use_local) ) {
      $grid_classes[] = $use_local;

    } elseif ( is_page() ) {
      // page - use page (rel) option
      $grid_classes[] = get_field( 'grid_preview_page', 'option');

    } elseif ( is_single() ) {
      // single post - use related option
      $grid_classes[] = get_field( 'grid_preview_rel', 'option');

    } elseif ( is_search() ) {

      $grid_classes[] = false;

    } else {
      // not set - use default post grid (archives)
      $grid_classes[] = get_field( 'grid_preview_post', 'option');

    }


    // return classes
    return join( ' ', $grid_classes );

  }
}


/* ACF populate select field
 *
 * fieldname = grid_preview, grid_preview_post, grid_preview_rel, grid_preview_page
 */

function acf_load_grid_preview_classes( $field ) {

    // reset choices
    $field['choices'] = array(
      'grid--25' => '4 per row',
      'grid--30' => '3 per row',
      'grid--50' => '2 per row',
      'grid--100' => '1 per row',
    );

    return $field;

}

add_filter('acf/load_field/name=grid_preview', 'acf_load_grid_preview_classes');
add_filter('acf/load_field/name=grid_preview_post', 'acf_load_grid_preview_classes');
add_filter('acf/load_field/name=grid_preview_rel', 'acf_load_grid_preview_classes');
add_filter('acf/load_field/name=grid_preview_page', 'acf_load_grid_preview_classes');
