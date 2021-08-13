<?php

function love_is_scripts(){
     //Jquery
	 wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js' , array(), '4.5.1', true );
  
	//Bootstrap javascript and CSS files
	wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), '5.0.6', 'all' );
 	wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js' , array(), '5.0.6', true );
	 
	
    //Lity javascript and CSS files
 	wp_enqueue_script( 'lity-js', 'https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.js' , array(), '5.0.6', true );
 	wp_enqueue_style( 'lity-css', 'https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.css', array(), '5.0.6', 'all' );

 	// Theme's main stylesheet
	if ( is_front_page() ){
		wp_enqueue_style( 'main-style', get_template_directory_uri() . '/style.css', false, '1.0', 'all'  );
	}  else {
		wp_enqueue_style( 'main-second-style', get_template_directory_uri() . '/main.css', false, '1.0', 'all'  );
	}
 	

	//Theme main Scripts
	wp_enqueue_script( 'index.js', get_template_directory_uri() . '/index.js' , array(), '4.5.1', true );

 	// Google Fonts
 	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap' );
 }

 add_action( 'wp_enqueue_scripts', 'love_is_scripts' );