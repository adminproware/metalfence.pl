<?php
function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/example.js', array() );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

function motyw_theme_setup(){
    add_theme_support( 'menus' );
    register_nav_menu('primary', 'Main Header Menu' );
    register_nav_menu('footer', 'Main Footer Menu' );
    add_theme_support('custom-logo');
    add_theme_support('custom-background');
}
add_action('after_setup_theme','motyw_theme_setup');


