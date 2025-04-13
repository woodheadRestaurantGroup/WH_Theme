<?php
/**
 * WH Theme functions and definitions
 *
 * @package WordPress
 * @subpackage WH RESTAURANT THEME
 * @since WH RESTAURANT THEME 1.0
 */

show_admin_bar( false );

add_action( 'wp_enqueue_scripts', 'wh_load_scripts' );
function wh_load_scripts()
{
	// Get file modification time for cache busting
	$css_version = filemtime( get_template_directory() . '/style.css' );
	$js_version = filemtime( get_template_directory() . '/index.js' );
	
	// Register and enqueue styles with version
	wp_register_style( 'screen', get_template_directory_uri() . '/style.css', array(), $css_version );
	wp_enqueue_style( 'screen' );

	// Register and enqueue scripts with version
	wp_register_script( 'wh-script', get_template_directory_uri() . '/index.min.js', array(), $js_version, true );
	wp_enqueue_script( 'wh-script' );

	wp_localize_script( 'wh-script', 'ajax_object', array( 
		'ajaxurl' => admin_url( 'admin-ajax.php' ),
		'ajax_nonce' => wp_create_nonce('wh-yay')
	));      
}