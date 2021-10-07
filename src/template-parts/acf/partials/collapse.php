<?php
/**
 * Collapsible list block
 *
 * ACF: group_60212965217d1
 *
 * @package hum-core-acf
 */

if ( have_rows( 'collapse_repeater' ) ) {
?>

  <ul class="block__list collapse__list">

    <?php
    while ( have_rows( 'collapse_repeater' ) ) {

      the_row();

      $c_question = get_sub_field( 'collapse_question' );
      $c_answer = get_sub_field( 'collapse_answer' );

      echo '<li class="block__item collapse__item">';

        if ( $c_question ) {

          echo '<div class="block__header">';

            echo '<button class="btn collapse__btn">';
              echo $c_question;
              echo hum_get_icon( array( 'icon' => 'plus', 'group' => 'bootstrap', 'size' => 24, 'class' => 'plus open' ) );
              echo hum_get_icon( array( 'icon' => 'dash', 'group' => 'bootstrap', 'size' => 24, 'class' => 'dash close' ) );
            echo '</button>';

          echo '</div>';

          if ( $c_answer ) {

            echo '<div class="block__body collapse__body">';

              echo '<div class="block__text">';

                echo $c_answer;

              echo '</div>';

            echo '</div>';
          }

        }

      echo '</li>'; // collapse

    }
    ?>

  </ul>
<?php
}
