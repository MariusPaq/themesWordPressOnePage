<?php
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );

register_nav_menus( array(
	'main' => 'Menu',
	'footer' => 'footerMenu',
) );

function theme_js(){

	wp_enqueue_script(
        'jquery',
        'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js',
        false,
        '3.3.1',
        true
    );

		wp_enqueue_script( 'script',
		get_template_directory_uri() . '/script.js',
		array( 'jquery' ),
		'1.0',
		true
	);
}

add_action( 'wp_enqueue_scripts','theme_js');
