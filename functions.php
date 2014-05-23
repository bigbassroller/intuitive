<?php
// Start the engine
require_once( get_template_directory() . '/lib/init.php' );

// Child theme (do not remove)
define( 'genesis_parallax', 'Genesis Parallax' );
define( 'CHILD_THEME_URL', 'http://www.space-rocket.com/' );

// Add Viewport meta tag for mobile browsers
add_action( 'genesis_meta', 'sample_viewport_meta_tag' );
function sample_viewport_meta_tag() {
	echo '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>';
}

// Add support for custom background
add_theme_support( 'custom-background' );

// Add support for custom header
add_theme_support( 'genesis-custom-header', array(
	'width' => 1152,
	'height' => 120
	) );

// Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );


/**
 *  Enqueue scripts and styles
 */
function genesis_parallax_scripts() {
	wp_enqueue_style( 'genesis-parallax-styles', get_stylesheet_directory_uri(). '/assets/css/genesis-parallax.css', array( ), false, 'all' );
	wp_enqueue_script( 'skrollr.js', get_stylesheet_directory_uri(). '/assets/js/skrollr.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'genesis_parallax_scripts' );


// Make full width
add_theme_support( 'genesis-structural-wraps', array( 'header', 'subnav', 'inner', 'footer-widgets', 'footer' ) );

// Make it HTML5
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );
