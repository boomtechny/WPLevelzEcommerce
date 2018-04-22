<?php

function bt_enqueue(){
	wp_register_style( 'bt_google_fonts', 'http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic' );
	wp_register_style( 'bt_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
  wp_register_style( 'bt_style', get_template_directory_uri() . '/assets/style.css' );
  wp_enqueue_style( 'bt_google_fonts' );
	wp_enqueue_style( 'bt_bootstrap' );
  wp_enqueue_style( 'bt_style' );
	
  wp_register_script( 'bt_functions', get_template_directory_uri() . '/assets/js/functions.js', array(), false, true );
  
	wp_enqueue_script( 'bt_functions' );

}