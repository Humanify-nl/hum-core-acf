<?php
/**
 * Block class builder
 *
 * @package hum-core-acf
 */

if ( !function_exists( 'hum_block_class' ) ) {

  function hum_block_class( $partial_name = false, $partial_ext = false ) {

    // varsd
    $class_selected = get_sub_field( 'block_class' );
    $center_text = get_sub_field( 'block_center_txt' );

    // default class
    $block_classes = [ 'block' ];

    // block name
    if ( $partial_name ) {
      $block_classes[] = 'block--' . $partial_name;
    }
    // block variation name
    if ( $partial_ext ) {
      $block_classes[] = 'block--' . $partial_ext;
    }

    // selected class
    if ( isset($class_selected) && $class_selected !== 'default' ) {
      $block_classes[] = $class_selected;
    }

    if ( $center_text ) {
      $block_classes[] = 'is-center';
    }

    // return joined array
    return join( ' ', $block_classes );

  }
}


if ( !function_exists( 'hum_block_class_text' ) ) {

  function hum_block_class_text() {

    // vars
    $class_selected = get_sub_field( 'block_class_text' );
    $center_text = get_sub_field( 'block_center_txt' );

    // default class
    $block_classes = [ 'block', 'block--text' ];

    // selected class
    if ( isset($class_selected) && $class_selected !== 'default' ) {
      $block_classes[] = $class_selected;
    }

    if ( $center_text ) {
      $block_classes[] = 'is-center';
    }

    // return joined array
    return join( ' ', $block_classes );

  }
}


/* ACF populate select field
 *
 * https://www.advancedcustomfields.com/resources/dynamically-populate-a-select-fields-choices/
 * fieldname = block_class, block_class_text
 */

function acf_load_block_class_choices( $field ) {

    // reset choices
    $field['choices'] = array(
      'default' => 'Default',
      'has-pad' => 'Padded',
      'has-pad has-pad--2' => 'Padded x2',
    );

    // return the field
    return $field;

}

add_filter('acf/load_field/name=block_class', 'acf_load_block_class_choices');
add_filter('acf/load_field/name=block_class_text', 'acf_load_block_class_choices');
