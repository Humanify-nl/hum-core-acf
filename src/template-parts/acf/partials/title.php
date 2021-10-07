<?php
/**
 * Title-block partial
 *
 * ACF: group_5f11bd1934c8f
 *
 * @package hum-core-acf
 */

$block_title = get_sub_field( 'block_title' );

if ( $block_title ) {

  echo '<h3 class="block__title">';

    echo $block_title;

  echo '</h3>';
}
