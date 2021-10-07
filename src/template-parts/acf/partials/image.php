<?php
/**
 * Image
 *
 * ACF: group_5f08897738074
 *
 * @package hum-core-acf
 */

$image = get_sub_field( 'image_array' );
$img_size = get_sub_field( 'image_sizes' );

// img controls
$image_on_click = get_sub_field( 'image_on_click' ); // select: nothing, zoom, link
$image_link = get_sub_field( 'image_link_url' ); // if link
$image_cover = get_sub_field( 'image_fit' ); // off=contain, on=cover

if ( $image ) {

  echo '<div class="block__img'; if ( $image_cover ) { echo ' cover'; } echo '">';

  if ( !empty( $image ) ) {
    // vars
    $img_url = $image['url'];
    $img_id = $image['id'];
    $img_title = $image['title'];
    $img_alt = $image['alt'];
    $img_caption = $image['caption'];

    $get_img = wp_get_attachment_image( $img_id, $img_size );


    if ( isset($image_on_click) ) {

      if ( $image_on_click == 'link' ) {

        echo '<a href="'.$image_link.'">';

        echo $get_img;

        echo '</a>';

      } elseif ( $image_on_click == 'zoom' ) {

        echo '<a href="'.$img_url.'">';

        echo $get_img;

        echo '</a>';

      } else {

        echo $get_img;
      }

    } else {

      echo $get_img;
    }


    if ( $img_caption ) {
      echo '<div class="wp-caption">';
        echo '<p class="wp-caption-text">'.$img_caption.'</p>';
      echo '</div>';
    }
  }


  echo '</div>';

}
