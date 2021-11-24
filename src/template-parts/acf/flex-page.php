<?php
/**
 * Flex content - page
 *
 * ACF field: group_5f06ea7d13be4
 *
 * @package hum-core-acf
 */

$row_types = array(
  'text_multi',
  'image',
  'slider',
  'gallery',
  'collapse',
  'post_query',
  'form',
  'tabs',
  'page_siblings',
);


if( have_rows( 'flex_page' )) {

  while( have_rows( 'flex_page' )) {

    the_row();

    if( get_row_layout() == 'text' ) {

      hum_acf_build_row( 'text', false );

    }

    foreach( $row_types as $row_type ) {

      if( get_row_layout() == $row_type ) {

        $row_name = str_replace( '_', '-', $row_type);
        hum_acf_build_row( $row_name, true );

      }

    }

    // layouts
    //get_template_part( 'template-parts/acf/rows/row--text' );

    /*
    if( get_row_layout() == 'text_text' ) {

      hum_acf_build_row( 'text', 'block--text', 'block--text-r' );

      // get_template_part( 'template-parts/acf/rows/row--text-text' );
    }

    if( get_row_layout() == 'text_multi' ) {

      get_template_part( 'template-parts/acf/rows/row--text-multi' );
    }

    if( get_row_layout() == 'image' ) {

      get_template_part( 'template-parts/acf/rows/row--image' );
    }

    if( get_row_layout() == 'image_slider' ) {

      get_template_part( 'template-parts/acf/rows/row--slider' );
    }

    if( get_row_layout() == 'image_gallery' ) {

      get_template_part( 'template-parts/acf/rows/row--gallery' );
    }

    if( get_row_layout() == 'collapse' ) {

      get_template_part( 'template-parts/acf/rows/row--collapse' );
    }

    if ( get_row_layout() == 'form' ) {

      get_template_part( 'template-parts/acf/rows/row--form' );
    }

    if ( get_row_layout() == 'links' ) {

      get_template_part( 'template-parts/acf/rows/row--links' );
    }

    if ( get_row_layout() == 'link_pages' ) {

      get_template_part( 'template-parts/acf/rows/row--pagelinks' );
    }

    if ( get_row_layout() == 'link_posts' ) {

      get_template_part( 'template-parts/acf/rows/row--postlinks' );
    }

    if ( get_row_layout() == 'landing_pages' ) {

      get_template_part( 'template-parts/acf/queries/row--landing' );
    }

    if ( get_row_layout() == 'post_select' ) {

      get_template_part( 'template-parts/acf/queries/row--posts__select' );
    }

    if ( get_row_layout() == 'post_query' ) {

      get_template_part( 'template-parts/acf/queries/row--posts' );
    }

    if ( get_row_layout() == 'post_query_slider' ) {

      get_template_part( 'template-parts/acf/queries/row--posts__slider' );
    }
    */

  }

}
