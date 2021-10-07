<?php
/**
 * Form
 *
 * ACF: group_60213b397b048
 *
 * @package hum-v7-core
 */

$form = get_sub_field( 'form_form' );

if ( $form ) {

  echo '<div class="block__form">';

  echo do_shortcode( $form );

  echo '</div>';
}
