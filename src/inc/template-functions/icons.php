<?php
/**
 * Get Icon
 *
 * This function is in charge of displaying SVG icons across the site.
 *
 * Place each <svg> source in the /assets/icons/{group}/ directory, without adding
 * both `width` and `height` attributes, since these are added dynamically,
 * before rendering the SVG code.
 *
 * All icons are assumed to have equal width and height, hence the option
 * to only specify a `$size` parameter in the svg methods.
 *
 * @author Bill Erickson
 *
 */
// echo hum_get_icon( array( 'icon' => 'arrow-left', 'group' => 'bootstrap', 'size' => 24, 'class' => 'arrow-left' ) );

function hum_get_icon( $atts = array() ) {

	$atts = shortcode_atts( array(
		'icon'	=> false,
		'group'	=> 'utility',
		'size'	=> 16,
		'class'	=> false,
		'label'	=> false,
	), $atts );

	if( empty( $atts['icon'] ) ) {
		return;
	}

	$icon_path = get_theme_file_path( '/assets/icons/' . $atts['group'] . '-' . $atts['icon'] . '.svg' );
	if( ! file_exists( $icon_path ) ) {
		return;
	}
  // get icon
	$icon = file_get_contents( $icon_path );

  // set class
	$class = 'svg-icon';
	if( !empty( $atts['class'] ) ) {
		$class .= ' ' . esc_attr( $atts['class'] );
	}
  // set size
	if( false !== $atts['size'] ) {
		$replace = sprintf( '<svg class="' . $class . '" width="%d" height="%d" aria-hidden="true" role="img" focusable="false" ', $atts['size'], $atts['size'] );
		$svg  = preg_replace( '/^<svg /', $replace, trim( $icon ) ); // Add extra attributes to SVG code.
	} else {
		$svg = preg_replace( '/^<svg /', '<svg class="' . $class . '"', trim( $icon ) );
	}
  // clean
	$svg  = preg_replace( "/([\n\t]+)/", ' ', $svg ); // Remove newlines & tabs.
	$svg  = preg_replace( '/>\s*</', '><', $svg ); // Remove white space between SVG tags.
  // set label
	if( !empty( $atts['label'] ) ) {
		$svg = str_replace( '<svg class', '<svg aria-label="' . esc_attr( $atts['label'] ) . '" class', $svg );
		$svg = str_replace( 'aria-hidden="true"', '', $svg );
	}

	return $svg;
}

/**
 * Render icon from chosen select field
 *
 */

function hum_icon_select() {

	$icon_selected = get_sub_field( 'icon_select' );

	if ( !empty( $icon_selected ) ) {
		return hum_get_icon( array( 'icon' => $icon_selected, 'group' => 'bootstrap', 'size' => 24, 'class' => $icon_selected ) );
  }
}



/* ACF populate select field
 *
 * https://www.advancedcustomfields.com/resources/dynamically-populate-a-select-fields-choices/
 * fieldname = icon_select
 */

function acf_load_icon_select( $field ) {

    // reset choices
    $field['choices'] = array(
      'arrow-left' => 'Arrow left',
			'arrow-right' => 'Arrow right',
    );

    return $field;

}

add_filter('acf/load_field/name=icon_select', 'acf_load_icons_select');
