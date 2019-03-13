
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

function wpmu_callouts ($atts, $content = null) {

    $atts = shortcode_atts( array (
        'align' => ''
    ), $atts, 'wp-callout' );

    ob_start();

    echo '<aside class="wp-callout ' . $atts['align'] . '" > ' . $content . '</aside>';

    return ob_get_clean();
}

add_shortcode ('wp-callout', 'wpmu_callouts');
 
function wpmu_callouts_add_stylesheet () {

    wp_register_style ('wpmu_callouts_style', plugins_url( 'style.css', __FILE__ ) );
    wp_enqueue_style ( 'wpmu_callouts_style' );

}

add_action ('wp_enqueue_scripts', 'wpmu_callouts_add_stylesheet' );

add_theme_support ( 'post-thumbnails' );