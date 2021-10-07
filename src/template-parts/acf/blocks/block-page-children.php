<?php
/**
 * Block-page-children
 *
 * ACF:
 * @package hum-core-acf
 */
?>

<div class="<?php echo hum_block_class( 'page-children' ); ?>">

  <?php
  include( locate_template( 'template-parts/acf/queries/query-page-children.php') );
  ?>

</div>
