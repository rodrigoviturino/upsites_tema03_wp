<?php 
// Incluir outros arquivos/functions
require get_template_directory().'./include/setup.php';
require get_template_directory().'/include/customizer/theme-customizer.php';
// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';


// Hooks

add_action('after_setup_theme', 'up_after_setup');

add_action('wp_enqueue_scripts', 'up_theme_styles');

// Custumer
add_action('customize_register', 'up_customize_register');
