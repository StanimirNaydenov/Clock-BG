<?php
/**
 * Luxury Watches functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package luxury-watches
 * @since luxury-watches 1.0
 */

if ( ! function_exists( 'luxury_watches_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since luxury-watches 1.0
	 *
	 * @return void
	 */
	function luxury_watches_support() {

		load_theme_textdomain( 'luxury-watches', get_template_directory() . '/languages' );
		
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'align-wide' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		add_theme_support( 'responsive-embeds' );
		
		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );
	}

endif;

add_action( 'after_setup_theme', 'luxury_watches_support' );

if ( ! function_exists( 'luxury_watches_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since luxury-watches 1.0
	 *
	 * @return void
	 */
	function luxury_watches_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'luxury-watches-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		wp_enqueue_style( 
			'luxury-watches-animate-css', 
			esc_url(get_template_directory_uri()).'/assets/css/animate.css' 
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'luxury-watches-style' );

		wp_enqueue_style( 'dashicons' );

		wp_style_add_data( 'luxury-watches-style', 'rtl', 'replace' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'luxury_watches_styles' );

/* Enqueue Wow Js */
function luxury_watches_scripts() {
	wp_enqueue_script( 
		'luxury-watches-wow', esc_url(get_template_directory_uri()) . '/assets/js/wow.js', 
		array('jquery') 
	);
	wp_enqueue_script(
        'luxury-watches-scroll-to-top', 
        esc_url(get_template_directory_uri()) . '/assets/js/scroll-to-top.js', 
        array(), 
        null, 
        true // Load in footer
    );
}
add_action( 'wp_enqueue_scripts', 'luxury_watches_scripts' );

// Get Started
require get_template_directory() . '/get-started/getstart.php';

// Get Notice
require get_template_directory() . '/get-started/notice.php';

// Add block patterns
require get_template_directory() . '/inc/block-pattern.php';

// Add Customizer
require get_template_directory() . '/inc/customizer.php';

// Add block Style
require get_template_directory() . '/inc/block-style.php';
