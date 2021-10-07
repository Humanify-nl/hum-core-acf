<?php
/**
 * Block--image
 *
 * ACF: group_6145989014b83
 * @package hum-v7-core
 */

if ( get_sub_field( 'image_array' ) ) {

  ?>
  <div class="<?php echo hum_block_class( 'image' ); ?>">

    <?php
    include( locate_template( 'template-parts/acf/partials/image.php') );
    ?>

  </div>
  <?php

}
