<?php

function custom_dequeue() {
    wp_dequeue_style('shapely-scss');
    wp_deregister_style('shapely-scss');

    wp_dequeue_style('bootstrap');
    wp_deregister_style('bootstrap');
}

add_action( 'wp_enqueue_scripts', 'custom_dequeue', 99 );
add_action( 'wp_head', 'custom_dequeue', 99 );

function shapely_child_enqueue_styles() {
	wp_enqueue_style( 'bootstrap-child', get_template_directory_uri() . '/inc/css/bootstrap.min.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

 add_action( 'wp_enqueue_scripts', 'shapely_child_enqueue_styles', true );


function logo_size_change(){
	remove_theme_support( 'custom-logo' );
	add_theme_support( 'custom-logo', array(
	    'height'      => 100,
	    'width'       => 400,
	    'flex-height' => true,
	    'flex-width'  => true,
	) );
}

add_action( 'after_setup_theme', 'logo_size_change', 11 );


?>