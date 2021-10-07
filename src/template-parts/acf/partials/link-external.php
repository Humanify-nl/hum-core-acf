<?php
/**
 * Link partial
 *
 * ACF: group_5d7cf890e4325
 *
 * @package hum-core-acf
 */

$link_ext = get_sub_field( 'link_ext_arr' );
$link_type = get_sub_field( 'link_type' );

if ( $link_type == 'block__link' ) {
  $link_class = 'block__link';
} else {
  $link_class = 'block__btn '.$link_type;
}

if ( $link_ext ) {

  echo '<a class="btn '.$link_class.'" href="'. esc_url($link_ext['url']).'"';

  // target
  if ( $link_ext['target']) {
    echo 'target="'.esc_attr($link_ext['target']).'"';
  }

  echo '>';

  // title
  if ( $link_ext['title'] ) {

    echo esc_html($link_ext['title']) ;

  } else {
    echo "Lees meer";
  }

  echo '</a>';
}
