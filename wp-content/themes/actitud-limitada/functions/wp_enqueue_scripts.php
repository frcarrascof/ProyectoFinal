<?php 


function dl_enqueue_scripts() {

	/* Register Scripts */
	wp_register_script( 'bootstrap', get_theme_file_uri('/assets/js/bootstrap.min.js'), array('jquery'), '2.1.0', true );
	wp_enqueue_script( 'bootstrap' );
}

add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts' );
