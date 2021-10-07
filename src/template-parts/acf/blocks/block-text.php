<?php
/**
 * Block--text
 *
 * ACF: group_610918c6ca7c2
 * @package hum-v7-core
 */

$vert = get_sub_field( 'btn_grp_vert' );
$big = get_sub_field( 'btn_grp_big' );

if ( get_sub_field( 'text_wysi' ) || have_rows( 'flex_link') ) {

  ?>
  <div class="<?php echo hum_block_class_text();?>">

    <?php
    include( locate_template( 'template-parts/acf/partials/text-wysi.php') );
    include( locate_template( 'template-parts/acf/partials/link-flex.php') );
    ?>

  </div>
  <?php

}
