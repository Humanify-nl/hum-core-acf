<?php
/**
 * Slider with swiper.js
 *
 * ACF: group_5d0a2f53766fd
 *
 * @package hum-core-acf
 */

if ( have_rows( 'swiper_slides' ) ) {

  ?>
  <div class="swiper block__img block__img--slider">

    <div class="swiper-wrapper">

      <?php
      while ( have_rows( 'swiper_slides' ) ) {

        the_row();

        $slide_size = 'large';
        $slide_id = get_sub_field( 'swiper_slide_id' );

        echo '<div class="swiper-slide">';

          echo wp_get_attachment_image( $slide_id, $slide_size );

        echo '</div>';

      }
      ?>

    </div>

    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

  </div>
  <?php
}
