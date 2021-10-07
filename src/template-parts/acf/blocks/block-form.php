<?php
/**
 * Block--form
 *
 * ACF: group_615dba495aae9
 *
 * @package hum-core-acf
 */

if ( get_sub_field( 'form_form' ) ) {

  ?>
  <div class="<?php echo hum_block_class( 'form' ); ?>">

      <?php
      include( locate_template( 'template-parts/acf/partials/form.php' ) );
      ?>

  </div>
  <?php

}
