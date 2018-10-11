<?php
	
function dd_assets() {
	//wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.min.css' );
	//wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style('app', get_template_directory_uri() . '/css/app.css' );
	wp_enqueue_style('fa', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style('main', get_stylesheet_uri());

	//wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr.min.js', '', '', true );
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script('app', get_template_directory_uri() . '/js/app.js', array('jquery', 'bootstrap'), '', true );
}

add_action( 'wp_enqueue_scripts', 'dd_assets' );
