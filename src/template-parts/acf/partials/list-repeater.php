<?php
/**
 * List repeater partial
 *
 * @package hum-core-acf
 */

if ( have_rows( 'list_repeater' ) ) {

  ?>
  <ul class="block__list list--icon">

    <?php
    while ( have_rows( 'list_repeater' ) ) {

      the_row();
      $item_title = get_sub_field( 'list_item' );

      echo '<li class="block__item">'.$item_title.'</li>';

    }
    ?>

  </ul>

  <?php
}
