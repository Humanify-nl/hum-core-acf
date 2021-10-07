<?php
/**
 * Text partial
 *
 * ACF: group_5f76fe72ae503
 *
 * @package hum-core-acf
 */

$text = get_sub_field( 'text' );

if ( $text ) {

  echo '<div class="block__text">';

    echo $text;

  echo '</div>';

}
