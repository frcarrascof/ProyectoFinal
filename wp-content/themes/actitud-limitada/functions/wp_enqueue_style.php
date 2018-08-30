<?php 

/**
 * Style Enqueue
 * Registers and Enqueue Styles in head
 *
 * @since   1.0
 * @version 1.2
 * @see     https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
 * @see     https://developer.wordpress.org/reference/functions/wp_register_style/
 * @see     https://developer.wordpress.org/reference/functions/wp_deregister_style/
 * @see     https://developer.wordpress.org/reference/functions/get_theme_file_uri/
 * @see     https://developer.wordpress.org/reference/functions/get_parent_theme_file_uri/
 */
function dl_enqueue_style() {
	wp_register_style( 'main_style', get_theme_file_uri( '/assets/css/style.css'), array(), '1.0.0', 'screen' );
	wp_register_style( 'bootstrap', get_theme_file_uri( '/assets/css/bootstrap.min.css'), array(), '1.0.0', 'screen' );

	
	wp_enqueue_style( 'bootstrap' );
	wp_enqueue_style( 'main_style' );
}

add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );
