<?php 

function this_theme_files() {

	wp_enqueue_style( 'fontAwesome', get_template_directory_uri(). '/assets/css/fontawesome.css', array(), '1.0', 'all');

	wp_enqueue_style( 'googleFonts', 'https://fonts.googleapis.com/css?family=Allura|Lato:300,400|Poppins:300,400&display=swap', array(), '1.0', 'all');

	wp_enqueue_style( 'owlCarousel', get_template_directory_uri(). '/assets/css/owl.carousel.min.css', array(), '1.0', 'all');
	

	wp_enqueue_style( 'customStyle', get_stylesheet_uri()); 	

	wp_enqueue_style( 'responsive', get_template_directory_uri(). '/assets/css/responsive.css', array(), '1.0', 'all');


	wp_enqueue_script( 'jqueryOld', get_template_directory_uri(). '/assets/js/jquery-1.12.4.min.js', array(), '1.0', true );

	wp_enqueue_script( 'owlCarousel', get_template_directory_uri(). '/assets/js/owl.carousel.min.js', array('jqueryOld'), '1.0', true );

	wp_enqueue_script( 'active',get_template_directory_uri(). '/assets/js/main.js', array('jqueryOld'), '1.0', true );
}

add_action('wp_enqueue_scripts', 'this_theme_files');


 ?>