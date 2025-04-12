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
	
	wp_register_style( 'screen', get_template_directory_uri().'/style.css', array(), filemtime( get_template_directory().'/style.css' ) );
	wp_enqueue_style( 'screen' );

	if(WP_DEBUG)
	{
		wp_enqueue_script('wh-script',get_template_directory_uri().'/index.js', array( 'jquery' ), '20140380', true );
	}
	else
	{
		wp_enqueue_script('wh-script',get_template_directory_uri().'/index.js',array( 'jquery' ), '20140380', true );
	}

	wp_localize_script( 'wh-script', 'ajax_object', array( 
		'ajaxurl' => admin_url( 'admin-ajax.php' ),
		'ajax_nonce' => wp_create_nonce('wh-yay')
		));      

}