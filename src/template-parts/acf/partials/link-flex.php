<?php
/**
 * Link flex partial
 *
 * ACF: group_61040cefc8625
 *
 * @package hum-core-acf
 */

if ( have_rows( 'flex_link' )) {
  $count = 0;
  while ( have_rows( 'flex_link' )) {
    the_row();
    $count++;
  }
}

if ( have_rows( 'flex_link' )) {

  ?>
  <div class="button-group n-<?php echo $count; if ( $vert ){ echo ' button-group--vert';} if ( $big ){ echo ' big';} ?>">

    <?php
    while ( have_rows( 'flex_link' )) {

      the_row();

      // layouts
      if ( get_row_layout() == 'link' ) {

        get_template_part( 'template-parts/acf/partials/link' );
      }

      if ( get_row_layout() == 'link_ext' ) {

        get_template_part( 'template-parts/acf/partials/link-external' );
      }

      if ( get_row_layout() == 'calendly' ) {

        get_template_part( 'template-parts/acf/partials/link-calendly' );
      }
    }
    ?>

  </div>
  <?php
}
