<?php
/**
 * Block--gallery
 *
 * ACF: group_6149fc0058c0d
 * @package hum-core-acf
 */

if ( get_sub_field( 'gallery' ) ) {

  ?>
  <div class="<?php echo hum_block_class( 'gallery' ); ?>">

    <?php
    include( locate_template( 'template-parts/acf/partials/gallery.php' ) );
    ?>

  </div>
  <?php

}
