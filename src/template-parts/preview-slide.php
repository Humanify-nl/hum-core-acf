<?php
/**
 * Preview slide
 *
 * @package hum-core-acf
 */
?>

<article class="preview preview-slide">

  <?php
	hum_preview_image( 'medium', $link = false );

	echo '<div class="preview__content inside">';
    hum_preview_title();
		hum_preview_category();
    hum_preview_excerpt();
    hum_preview_footer();
	echo '</div>';
  ?>

</article>
