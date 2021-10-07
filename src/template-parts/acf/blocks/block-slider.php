<?php
/**
 * Block--slider
 *
 * ACF: group_6149fd5ae884e
 *
 * @package hum-core-acf
 */

if ( have_rows( 'swiper_slides' ) ) {

  ?>
  <div class="<?php echo hum_block_class( 'slider' ); ?>">

    <?php
    include( locate_template( 'template-parts/acf/partials/slider.php') );
    ?>

  </div>
  <?php

}
