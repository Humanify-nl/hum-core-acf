<?php
/**
 * Block--collapse
 *
 * @package hum-core-acf
 */

if ( have_rows( 'collapse_repeater' ) ) {

  ?>
  <div class="<?php echo hum_block_class( 'collapse' ); ?>">

    <?php
    include( locate_template( 'template-parts/acf/partials/collapse.php' ) );
    ?>

  </div>
  <?php

}
