<?php
/**
 * Image icon
 *
 * ACF: group_6001ad4d86b75
 *
 * @package hum-core-acf
 */

$image_id = get_sub_field( 'image_icon_id' );

if ( $image_id ) {

  echo '<div class="block__img block__img--icon">';

    echo wp_get_attachment_image( $image_id, 'thumbnail' );

  echo '</div>';
}
