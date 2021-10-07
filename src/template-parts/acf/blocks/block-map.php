<?php
/**
 * Block-map
 *
 * @package hum-core-acf
 */

if ( get_sub_field( 'map' ) ) {

  ?>
  <div class="<?php echo hum_block_class( 'map' ); ?>">

    <?php
    include( locate_template( 'template-parts/acf/partials/map.php' ) );
    ?>

  </div>
  <?php

}
