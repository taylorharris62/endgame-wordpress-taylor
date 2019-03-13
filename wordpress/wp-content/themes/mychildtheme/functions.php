
<?php
/**
 * EndGam functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package EndGam
 */



 function mychildtheme_enqueue_styles() {
     $parent_style = 'parent-style';
 
     wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
     
     wp_enqueue_style( 'child-style',
         get_stylesheet_directory_uri() . '/style.css',
         array( $parent_style )
     );

     wp_register_script('owl.carousel-js' , get_template_directory_uri() . './js/owl.carousel.min.js' );
     wp_register_script('main-js' , get_template_directory_uri() . './js/main.js' );
 }
 add_action( 'wp_enqueue_scripts', 'mychildtheme_enqueue_styles' );

function register_my_menu() {
    register_nav_menu('new-menu', __( 'New Menu'));
}
add_action ('init' , 'register_my_menu' );

 