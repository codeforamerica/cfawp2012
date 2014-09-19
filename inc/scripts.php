<?php // Scripts and styles functions

add_action( 'wp_enqueue_scripts', 'inti_scripts' );

function inti_scripts()
{
	// Register styles
	wp_register_style( 'webtype', '//cloud.webtype.com/css/944a7551-9b08-4f0a-8767-e0f83db4a16b.css' );
	wp_register_style( 'main', 'http://style.codeforamerica.org/style/css/main.css' );
	wp_register_style( 'layout', 'http://style.codeforamerica.org/style/css/layout.css', array(), false, 'all and (min-width: 40em)' );
	wp_register_style( 'prism', 'http://style.codeforamerica.org/style/css/prism.css' );
	wp_register_style( 'style', get_stylesheet_uri() );


	// Enqueue styles
	wp_enqueue_style('webtype');
	wp_enqueue_style('main');
	wp_enqueue_style('layout');
	wp_enqueue_style('prism');
	wp_enqueue_style('style');

	// Register scripts
	wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', false, null, true);

	// Enqueue scripts
	wp_enqueue_script('jquery');
}