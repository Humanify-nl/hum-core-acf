<?php
/**
 * Collapsible list block
 *
 * ACF field: group_60212965217d1
 *
 * @package hum-v7-core
 */

if ( have_rows( 'tab_repeater' ) ) {
?>

  <ul class="block__list list--tabs wrap alignwide">

    <?php
    $n = 1;
    while ( have_rows( 'tab_repeater' ) ) {

      the_row();

      echo '<li class="block__item tab tab--'.$n++.'">';

        if ( get_sub_field( 'text_wysi' ) ) {

          echo '<div class="block__frame tab--wrap">';

            include( locate_template( 'template-parts/acf/partials/title.php') );

            echo '<div class="tab--card">';

              echo '<div class="block__body wrap alignwide">';

                include( locate_template( 'template-parts/acf/partials/text-wysi.php') );

                if ( get_sub_field( 'link_page_post' )) {

                  echo '<div class="block__footer">';
                  include( locate_template( 'template-parts/acf/partials/link-flex.php') );
                  echo '</div>';
                }

              echo '</div>';

            echo '</div>';

          echo '</div>';
        }

      echo '</li>'; // block

    }
    ?>

  </ul>
<?php
}
