<?php
/**
 * clicketyastrachild Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package clicketyastrachild
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_CLICKETYASTRACHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'clicketyastrachild-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_CLICKETYASTRACHILD_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );


/* |||||||||||||||| |||||||||||| |||||||||||| |||||||||||| |||||||||||| 
|||||||||||||||| clickety-clack.click - the-style.css |||||||||
|||||||||||| |||||||||||| |||||||||||| |||||||||||| |||||||||||| ||||||||||||*/


function smp_the_style()
{
	wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/css/the-style.css', array(), filemtime(get_stylesheet_directory() . '/css/the-style.css'), 'all');
}

add_action('wp_enqueue_scripts', 'smp_the_style', 1000);



 /*------------------------------------\
 the.useful - TO FRONTEND 
 \------------------------------------*/


function smp_frontend_the_useful_style()
{
	wp_enqueue_style('useful-frontend-style', get_stylesheet_directory_uri() . '/css/the-useful.css', array(), filemtime(get_stylesheet_directory() . '/css/the-useful.css'), 'all');
}

add_action('wp_enqueue_scripts', 'smp_frontend_the_useful_style', 999);


 /*------------------------------------\ 
  shortcodes in widgets
 \------------------------------------*/

/*
add_filter( 'widget_text', 'do_shortcode' );
*/


