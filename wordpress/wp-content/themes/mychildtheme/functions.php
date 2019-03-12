<?php
function mychildtheme_enqueue_styles() {
    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}
add_action( 'wp_enqueue_scripts', 'mychildtheme_enqueue_styles' );
?>

<?php

function endgam_enqueue_scripts() {

 /* Register All JS for Site */

    wp_register_script( 'bootstrap-min',get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ) );
    wp_register_script( 'jquery3.2.1',get_stylesheet_directory_uri() . '/assets/js/jquery-3.2.1.min.js', array( 'jquery' ) );
    wp_register_script( 'magnific-popup',get_stylesheet_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array( 'jquery' ) );
    wp_register_script( 'slicknav',get_stylesheet_directory_uri() . '/assets/js/jquery.slicknav.min.js' , array( 'jquery' ));
    wp_register_script( 'sticky-sidebar',get_stylesheet_directory_uri() . '/assets/js/jquery.sticky-sidebar.min.js' , array( 'jquery' ));
    wp_register_script( 'mainjs',get_stylesheet_directory_uri() . '/assets/js/main.js' , array( 'jquery' ) );
    wp_register_script( 'owl-carousel',get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js' , array( 'jquery' ) );

/* Register All Styles for Site */
    wp_register_style( 'animate',get_stylesheet_directory_uri() . '/assets/animate.css' );
    wp_register_style( 'bootstrapcss',get_stylesheet_directory_uri() . '/assets/css/bootstrap-min.css' );
    wp_register_style( 'font-awesome',get_stylesheet_directory_uri() . '/assets/css/font-awesome.min.css' );
    wp_register_style( 'magnific-popup-css',get_stylesheet_directory_uri() . '/assets/css/magnific-popup.css' );
    wp_register_style( 'owl-carousel-css',get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css' );
    wp_register_style( 'slicknavcss',get_stylesheet_directory_uri() . '/assets/css/slicknav.min.css' );
    wp_register_style( 'stylecss',get_stylesheet_directory_uri() . '/assets/css/style.css' );
   

    /* Call All Scripts for Site */
    wp_enqueue_script( 'bootstrap-min' );
    wp_enqueue_script( 'jquery3.2.1' );
    wp_enqueue_script( 'magnific-popup' );
    wp_enqueue_script( 'slicknav' );
    wp_enqueue_script( 'sticky-sidebar' );
    wp_enqueue_script( 'mainjs' );
    wp_enqueue_script( 'owl-carousel' );
    
 
    wp_enqueue_style( 'animate' );
    wp_enqueue_style( 'bootstrapcss' );
    wp_enqueue_style( 'font-awesome' );
    wp_enqueue_style( 'magnific-popup-css' );
    wp_enqueue_style( 'owl-carousel-css' );
    wp_enqueue_style( 'slicknavcss' );
    wp_enqueue_style( 'stylecss' );
    
    }
    
    add_action( ‘wp_enqueue_scripts’, ‘endgam_enqueue_scripts’ );

    ?>

<?php
class Arrow_Walker_Nav_Menu extends Walker_Nav_Menu {
    function display_element($element, &$children_elements, $max_depth, $depth=0, $args, &$output) {
        $id_field = $this->db_fields['id'];
        if (!empty($children_elements[$element->$id_field])) {
            $element->classes[] = 'arrow'; //enter any classname you like here!
        }
        Walker_Nav_Menu::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }
}
?>
