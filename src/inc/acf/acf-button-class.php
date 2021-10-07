<?php
/**
 * Button class builder
 *
 * @package hum-core-acf
 */

if ( !function_exists( 'hum_button_class' ) ) {

  function hum_button_class( $class = false ) {

    $button_selected = get_sub_field( 'link_type' );
    $button_type = $button_selected ? $button_selected : 'link';

    // build class array
    $button_class = [];

    if ( $button_type == 'link' ) {

      $button_class[] = 'block__link';

    } else {

      $button_class[] = 'block__btn';
      $button_class[] = 'btn';
      $button_class[] = $button_selected;

    }

    // add extra class
    if ( $class ) {
      $button_class[] = $class;
    }

    return join( ' ', $button_class);

  }

}


/* ACF populate select field
*
* https://www.advancedcustomfields.com/resources/dynamically-populate-a-select-fields-choices/
* fieldname = link_type
*/

function acf_load_button_class_choices( $field ) {

  // reset choices
  $field['choices'] = array(
  'button' => 'Button',
  'button--wired' => 'Wired button',
  'button--white' => 'White button',
  'link' => 'Default link',
  );

  // return the field
  return $field;

}

// preload choices for these fields:
add_filter('acf/load_field/name=link_type', 'acf_load_button_class_choices');
