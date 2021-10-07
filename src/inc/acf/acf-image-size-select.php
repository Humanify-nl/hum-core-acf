<?php
/**
 * Image sizes from wp to acf select
 *
 * @package hum-core-acf
 */


function hum_acf_image_sizes( $field ) {

  $field['choices'] = [
    'small' => 'Small',
    'medium' => 'Medium',
    'large' => 'Large',
  ];

  return $field;

}

add_filter('acf/load_field/name=image_sizes', 'hum_acf_image_sizes');
