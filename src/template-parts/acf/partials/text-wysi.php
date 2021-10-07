<?php
/**
 * Text Tiny MCE
 *
 * ACF: group_5f087a5128e8a
 *
 * @package hum-core-acf
 */

$text_wysi = get_sub_field( 'text_wysi' );

if ( $text_wysi ) {

  echo '<div class="block__text">';

    echo $text_wysi;

  echo '</div>';

}
