<?php

/**
 * Enqueue scripts and styles.
 */
function green_site_scripts() {
	wp_enqueue_style( 'green-site-style-css', get_stylesheet_uri() );
	wp_enqueue_style( 'green-site-style', get_template_directory_uri().'/styles/main.min.css' );
	wp_enqueue_style( 'green-site-plyr', get_template_directory_uri() . '/libs/plyr/dist/plyr.css' );

	wp_enqueue_script( 'green-site-jquery-lazy', get_template_directory_uri() . '/libs/jquery-lazy/jquery.lazy.min.js', array('jquery'), null, true);
	wp_enqueue_script( 'green-site-plyr', get_template_directory_uri() . '/libs/plyr/dist/plyr.min.js', array('jquery'), null, true);
	wp_enqueue_script( 'green-site-slick', get_template_directory_uri() . '/libs/slick-carousel/slick/slick.min.js', array('jquery'), null, true);
	wp_enqueue_script( 'green-site-main-js', get_template_directory_uri() . '/js/main.min.js', array('jquery'), null, true);
	wp_enqueue_script( 'green-site-google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBT-q7eL6MRK8fQLwsnLJWMZI0Z52rVlZA&callback=initMap', array(), null, true);


}
add_action( 'wp_enqueue_scripts', 'green_site_scripts' );

add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'primary', 'Primary Menu' );
	register_nav_menu( 'footer', 'Footer Menu' );
}

?>