<?php
/**
 * Customizer
 * 
 * @package WordPress
 * @subpackage luxury-watches
 * @since luxury-watches 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function luxury_watches_customize_register( $wp_customize ) {
	$wp_customize->add_section( new Luxury_Watches_Upsell_Section($wp_customize,'upsell_section',array(
		'title'            => __( 'Luxury Watches Pro', 'luxury-watches' ),
		'button_text'      => __( 'Upgrade Pro', 'luxury-watches' ),
		'url'              => 'https://www.wpradiant.net/products/watch-store-wordpress-theme',
		'priority'         => 0,
	)));
}
add_action( 'customize_register', 'luxury_watches_customize_register' );

/**
 * Enqueue script for custom customize control.
 */
function luxury_watches_custom_control_scripts() {
	wp_enqueue_script( 'luxury-watches-custom-controls-js', get_template_directory_uri() . '/assets/js/custom-controls.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );
	wp_enqueue_style( 'luxury-watches-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'luxury_watches_custom_control_scripts' );