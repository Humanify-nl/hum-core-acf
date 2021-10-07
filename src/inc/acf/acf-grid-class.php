<?php
/**
 * Grid class builder
 *
 * @package hum-core-acf
 */

if ( !function_exists( 'hum_grid_class' ) ) {

  function hum_grid_class( $class = false ) {

    $grid_selected = get_sub_field( 'grid_class' );
    $grid_reverse = get_sub_field( 'grid_reverse' );
    $grid_center = get_sub_field( 'grid_center' );

    // default
    $grid_classes = [ 'grid' ];

    // extra class
    if ( $class ) {
      $row_classes[] = $class;
    }
    // selected
    if ( !empty($grid_selected) ) {
      $grid_classes[] = $grid_selected;
    }
    // reverse grid
    if ( $grid_reverse ) {
      $grid_classes[] = 'reverse';
    }
    // center grid
    if ( $grid_center ) {
      $grid_classes[] = 'center';
    }

    return join( ' ', $grid_classes );

  }
}


/* ACF populate select field
 *
 * https://www.advancedcustomfields.com/resources/dynamically-populate-a-select-fields-choices/
 * fieldname = grid_class
 */

function acf_load_grid_classes( $field ) {

    // reset choices
    $field['choices'] = array(
      'grid--60' => '60% - 40%',
      'grid--50' => '50% - 50%',
      'grid--40' => '40% - 60%',
      'grid--100' => '100%',
    );

    return $field;

}

add_filter('acf/load_field/name=grid_class', 'acf_load_grid_classes');
