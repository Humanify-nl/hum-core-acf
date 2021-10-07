<?php
/**
 * Row style
 *
 * ACF field: group_5f76e008a957f
 *
 * @package hum-core-acf
 */

if ( !function_exists( 'hum_row_class' ) ) {

  function hum_row_class( $class = false ) {

    $row_style_selected = get_sub_field( 'row_style' );
    $row_spacing = get_sub_field( 'row_spacing' );

    // default
    $row_classes = [ 'row' ];

    // extra class
    if ( $class ) {
      $row_classes[] = $class;
    }
    // selected
    if ( isset($row_style_selected) ) {
      $row_classes[] = $row_style_selected;
    }
    // spacing
    if ( isset($row_spacing) ) {
      $row_classes[] = $row_spacing;
    }

    return join( ' ', $row_classes );

  }
}

/* ACF populate select field
 * fieldname = row_style
 */

function acf_load_row_style_field_choices( $field ) {

    // reset choices
    $field['choices'] = array(
      'has-none' => 'Color (lightgrey)',
      'has-bg' => 'Color (white)',
      'has-style-1' => 'Color (primary)',
      'has-img' => 'Image',
      'has-img repeat' => 'Image (repeat)',
      'has-img parallax' => 'Image (parallax)',
    );

    // return the field
    return $field;

}

add_filter('acf/load_field/name=row_style', 'acf_load_row_style_field_choices');

/* ACF populate select field
 * fieldname = row_spacing
 */
function acf_load_row_spacing_field_choices( $field ) {

    // reset choices
    $field['choices'] = array(
      'is-default' => 'None',
      'is-compact' => 'Compact',
      'is-tall' => 'Tall',
    );

    // return the field
    return $field;

}

add_filter('acf/load_field/name=row_spacing', 'acf_load_row_spacing_field_choices');
