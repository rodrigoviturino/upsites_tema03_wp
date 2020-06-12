<?php 

function up_theme_styles(){
    $version = date('hmi');

    // CSS
    wp_enqueue_style('theme_css', get_template_directory_uri().'/public/theme.min.css', [], $version, false );
    wp_enqueue_style('fontawesome_css', get_template_directory_uri().'/public/fonts/fonts.css', [], $version, false );

    // Javascript

    wp_enqueue_script('jquery_js', get_template_directory_uri(). '/src/js/libs/jquery-3.4.1.min.js', [], true);
    
    wp_enqueue_script('theme_js', get_template_directory_uri() . '/public/theme.min.js', ['jquery'], true);
}

// Menu
function up_after_setup(){
    // add_theme_support('menus');

    register_nav_menu('main-menu', ('Menu Principal') );
    register_nav_menu('footer-menu', ('Footer Menu') );
}