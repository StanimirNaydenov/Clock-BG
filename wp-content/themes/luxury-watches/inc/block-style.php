<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage luxury-watches
 * @since luxury-watches 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since luxury-watches 1.0
	 *
	 * @return void
	 */
	function luxury_watches_register_block_styles() {
		
		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'luxury-watches-border',
				'label' => esc_html__( 'Borders', 'luxury-watches' ),
			)
		);

		
	}
	add_action( 'init', 'luxury_watches_register_block_styles' );
}