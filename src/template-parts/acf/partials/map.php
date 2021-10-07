<?php
/**
 * Map partial
 *
 * ACF field: group_5f09c4c20072d
 *
 * @package hum-core-acf
 */

$map_loc = get_sub_field( 'map' );

if ( $map_loc ) {

  echo '<div class="block__map">';

    echo '<div class="marker" data-lat="'.$map_loc['lat'].'" data-lng="'.$map_loc['lng'].'">';
    echo '</div>';

  echo '</div>';

}
