<?php
/**
 * The main template file and used for blog-index,
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package hum-core-acf
 */

get_header();

tha_content_before();

	echo '<div class="' . hum_post_class( 'content-area', 'wrap-content' , apply_filters( 'hum_content_area_wrap', false ) ) . '">';

		tha_content_wrap_before();
		?>

		<main class="site-main" role="main">

			<?php
			tha_content_top();
			tha_content_loop();
			tha_content_bottom();
			?>

		</main>

		<?php
		get_sidebar();
		tha_content_wrap_after();

	echo '</div>';

tha_content_after();

get_footer();
