<?php
/**
 * Wrap class builder
 *
 * @package hum-core-acf
 */

if ( !function_exists( 'hum_wrap_class' ) ) {

  function hum_wrap_class( $class = false ) {

    $wrap_selected = get_sub_field( 'wrap_class' );

    // default
    $wrap_classes = [ 'wrap' ];

    // extra class
    if ( $class ) {
      $wrap_classes[] = $class;
    }

    // selected
    if ( !empty($wrap_selected) ) {
      $wrap_classes[] = $wrap_selected;
    }

    return join( ' ', $wrap_classes );

  }
}


/* ACF populate select field
 *
 * https://www.advancedcustomfields.com/resources/dynamically-populate-a-select-fields-choices/
 * fieldname = wrap_class
 */

function acf_load_wrap_class_field_choices( $field ) {

    // reset choices
    $field['choices'] = array(
      'alignwide' => 'Default width',
      'aligncenter' => 'Center width',
      'alignfull' => 'Full width',
    );

    return $field;

}

add_filter('acf/load_field/name=wrap_class', 'acf_load_wrap_class_field_choices');
