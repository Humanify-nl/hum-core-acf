<?php
include_once( get_template_directory() . '/inc/acf/acf-grid-class.php' );
include_once( get_template_directory() . '/inc/acf/acf-grid-class-preview.php' );
include_once( get_template_directory() . '/inc/acf/acf-grid-class-gallery.php' );
include_once( get_template_directory() . '/inc/acf/acf-row-class.php' );
include_once( get_template_directory() . '/inc/acf/acf-wrap-class.php' );
include_once( get_template_directory() . '/inc/acf/acf-row-image.php' );
include_once( get_template_directory() . '/inc/acf/acf-block-class.php' );
include_once( get_template_directory() . '/inc/acf/acf-button-class.php' );
include_once( get_template_directory() . '/inc/acf/acf-button-class-preview.php' );
include_once( get_template_directory() . '/inc/acf/acf-preview-type-select.php' );
include_once( get_template_directory() . '/inc/acf/acf-post-type-select.php' );
include_once( get_template_directory() . '/inc/acf/acf-image-size-select.php' );

/**
 * Build standard row structure
 *
 * @param string $name  row name
 * @param string $partial  included partial name
 * @param bool $text  include text block
 */

if ( ! function_exists('hum_acf_build_row') ) {

  function hum_acf_build_row( $partial = false, $text = true) {

    $row_name = $partial ? 'row--' . $partial : false;

    echo '<section class="' . hum_row_class( $row_name ) . '"' . hum_row_img() . '>';

      echo '<div class="' . hum_wrap_class(). '">';

        echo '<div class="' . hum_grid_class() . '">';

          if ( $text ) {
            include( locate_template( 'template-parts/acf/blocks/block-text.php') );
          }
          if ( $partial ) {
            include( locate_template( 'template-parts/acf/blocks/block-' . $partial. '.php') );
          }

        echo '</div>';

      echo '</div>';

    echo '</section>';
  }
}
