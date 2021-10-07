<?php
/**
 * Block-post-query
 *
 * ACF: group_6145989014b83
 * @package hum-core-acf
 */

$post_type = get_sub_field( 'post_query_type' );
if ( $post_type ) {

  ?>
  <div class="<?php echo hum_block_class( 'post-query' ); ?>">

    <?php
    include( locate_template( 'template-parts/acf/queries/query-posts.php') );
    ?>

  </div>
  <?php
}
