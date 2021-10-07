<?php
/**
 * Link partial
 *
 * ACF: group_5f087f17ba886
 *
 * @package hum-core-acf
 */

$link = get_sub_field( 'link_page_post' );
$link_title = get_sub_field( 'link_title' );

if ( $link ) {

  echo '<a class="' . hum_button_class() . '" href="'.esc_url($link).'">';

  if ( !empty($link_title) ) {

    echo esc_html($link_title);

  } else {

    echo "Lees meer";

  }

  echo '</a>';
}
