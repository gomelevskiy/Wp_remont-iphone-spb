<?php
define("THEME_DIR", get_template_directory_uri());
/*--- REMOVE GENERATOR META TAG ---*/
remove_action('wp_head', 'wp_generator');

// ENQUEUE STYLES

function enqueue_styles() {

    /** STYLE CSS **/
    wp_register_style( 'bootstrap', THEME_DIR . '/css/bootstrap.css', array(), '1', 'all' );
    wp_enqueue_style( 'bootstrap' );
    wp_register_style( 'bootstrap-responsive', THEME_DIR . '/css/bootstrap-responsive.css', array(), '1', 'all' );
    wp_enqueue_style( 'bootstrap-responsive' );
    wp_register_style( 'normalize', THEME_DIR . '/css/normalize.css', array(), '1', 'all' );
    wp_enqueue_style( 'normalize' );
    wp_register_style( 'font-awesome', THEME_DIR . '/css/font-awesome.css', array(), '1', 'all' );
    wp_enqueue_style( 'font-awesome' );
    wp_register_style( 'screen-style', THEME_DIR . '/css/style-all.css', array(), '1', 'all' );
    wp_enqueue_style( 'screen-style' );

}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );

// ENQUEUE SCRIPTS

function enqueue_scripts() {
    
    /** SCRIPTS JS **/
    wp_register_script( 'jquery', THEME_DIR . '/js/jquery-3.1.0.min.js', array( 'jquery' ), '1', false );
    wp_enqueue_script( 'jquery' );
    wp_register_script( 'bootstrap', THEME_DIR . '/js/bootstrap.min.js', array( 'jquery' ), '1', false );
    wp_enqueue_script( 'bootstrap' );

}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

register_nav_menus(array(
    'top'    => 'Верхнее меню',
    'left' => 'Боковое меню'
));

