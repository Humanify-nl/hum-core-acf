<?php
/**
 * Block-page-siblings
 *
 * ACF:
 * @package hum-core-acf
 */

$title_custom = get_field( 'page_siblings_title', 'option') ;
$page_sib_title = $title_custom ? $title_custom : get_sub_field( 'page_siblings_title_c');

if ( $page_sib_title ) {
  echo '<div class="block block--text">';
    echo '<h2>'.$page_sib_title.'</h2>';
  echo '</div>';
}

?>
<div class="<?php echo hum_block_class( 'page-siblings' ); ?>">

  <?php
  include( locate_template( 'template-parts/acf/queries/query-page-siblings.php') );
  ?>

</div>
