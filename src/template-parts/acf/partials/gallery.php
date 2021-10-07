<?php
/**
 * Gallery
 *
 * ACF: group_5b9f96c01459b
 *
 * @package hum-core-acf
 */

$images = get_sub_field( 'gallery' );
if ( $images ) { $count_img = count($images); }
$n = 1;

if ( $images ) {

  ?>
  <div class="block__gallery">

    <div class="<?php echo hum_grid_class_gallery( 'grid-items-'.$count_img ); ?>">

      <?php
      // show each image
      foreach ( $images as $image ) {

        echo '<div class="block gallery__frame n'. $n++ .'">';

          echo '<a href="'.$image['url'].'">';

            echo '<img class="gallery__img" src="'.$image['sizes']['medium'].'" alt="'.$image['alt'].'" />';

          echo '</a>';

          if ( $image['caption'] ) { echo '<div class="wp-caption">';

            echo '<p class="wp-caption-text">'.$image['caption'].'</p></div>';

          }

        echo '</div>';

      }
      ?>

    </div>

  </div>
  <?php
}
