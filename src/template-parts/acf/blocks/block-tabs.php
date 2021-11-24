<?php
/**
 * Block--tabs
 *
 * ACF:
 *
 * @package hum-core-acf
 */

if ( have_rows( 'tab_repeater' ) ) {

  ?>
  <div class="<?php echo hum_block_class( 'tabs' ); ?>">

    <?php
    include( locate_template( 'template-parts/acf/partials/tabs.php') );
    ?>

  </div>
  <?php

}
