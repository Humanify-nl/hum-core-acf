<?php
/**
 * Block--text-multi
 *
 * ACF: group_614a00bd9f451
 *
 * @package hum-core-acf
 */

$block_style_rep = hum_block_class();
$grid_class = hum_grid_class_preview();

if ( have_rows( 'text_repeater' ) ) {

  echo '<div class="' . hum_block_class( 'text-multi' ) . '">';

    echo '<div class="'. $grid_class . '">';

    while ( have_rows( 'text_repeater' ) ) {

      the_row();

      if ( get_sub_field( 'text' ) ) {

        ?>
        <div class="<?php if ( $block_style_rep ){ echo $block_style_rep; } ?>">

          <?php
          include( locate_template( 'template-parts/acf/partials/image-icon.php') );
          include( locate_template( 'template-parts/acf/partials/title.php') );
          include( locate_template( 'template-parts/acf/partials/text.php') );
          include( locate_template( 'template-parts/acf/partials/link.php') );
          ?>

        </div>
        <?php

      }
    }

    echo '</div>';

  echo '</div>';

}
