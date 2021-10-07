<?php
/**
 * Grid class gallery builder
 *
 * @package hum-core-acf
 */

if ( !function_exists( 'hum_grid_class_gallery' ) ) {

  function hum_grid_class_gallery( $class ) {

    $grid_gallery_selected = get_sub_field( 'grid_class_gallery' );

    $grid_classes = [ 'grid--gallery' ];

    if ( $class ) {
      $grid_classes[] = $class;
    }
    
    if ( isset($grid_gallery_selected) ) {
      $grid_classes[] = $grid_gallery_selected;
    }


    return join( ' ', $grid_classes );

  }
}


/* ACF populate select field
 *
 * fieldname = grid_class_gallery
 */

function acf_load_grid_gallery_classes( $field ) {

    // reset choices
    $field['choices'] = array(
      'grid--20' => '5 per rij',
      'grid--25' => '4 per rij',
      'grid--30' => '3 per rij',
      'grid--50' => '2 per rij',
    );

    // return the field
    return $field;

}

add_filter('acf/load_field/name=grid_class_gallery', 'acf_load_grid_gallery_classes');
