<?php
/**
 * Swiper support
 *
 * @package hum-core-acf
 */

function hum_swiper_scripts() {

  wp_enqueue_script( 'hum-swiper-js',
    get_template_directory_uri() . '/assets/js/swiper.js',
    array( 'jquery' ),
    filemtime( get_template_directory() . '/assets/js/swiper.js' )
  );

  wp_enqueue_style( 'hum-swiper-css',
    get_template_directory_uri() . '/assets/css/swiper.css',
    array(),
    filemtime( get_template_directory() . '/assets/css/swiper.css' )
  );
}

add_action( 'wp_enqueue_scripts', 'hum_swiper_scripts' );
