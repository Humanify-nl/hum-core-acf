<?php
/**
 * Link partial
 *
 * ACF: group_610400e38ad7e
 *
 * @package hum-core-acf
 */

$link = get_sub_field( 'calendly_url' );
$link_title = get_sub_field( 'calendly_title' );
$link_type = get_sub_field( 'link_type' );

if ( $link_type == 'block__link' ) {
  $link_class = 'block__link';
} else {
  $link_class = 'block__btn '.$link_type;
}

if ( $link ) {

  ?>
  <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
  <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>

  <a class="btn <?php echo $link_class;?>" href="" onclick="Calendly.initPopupWidget({url: '<?php echo esc_url($link); ?>'});return false;">

    <?php
    if ( $link_title ) {
      echo esc_html($link_title);
    } else {
      echo "Maak een afspraak";
    }
    ?>

  </a>
  <?php
}
