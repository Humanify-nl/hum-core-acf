<?php
/* Add background img
 *
 */

if ( !function_exists( 'hum_row_img' ) ) {

  function hum_row_img( $url = false) {

    // row field
    $row_style_selected = get_sub_field( 'row_style' );
    $img_url_row = get_sub_field( 'row_bg_url' );


    if ( $row_style_selected == 'has-none' ) {
      return;
    }
    if ( $row_style_selected == 'has-bg' ) {
      return;
    }
    if ( $row_style_selected == 'has-style-1' ) {
      return;
    }


    // hierarchy
    $img_url = $url ? $url : $img_url_row;

    // custom bg
    if ( $img_url ) {
      $string = 'style="background-image: url('.$img_url.')"';

      return $string;
    }
  }
}
