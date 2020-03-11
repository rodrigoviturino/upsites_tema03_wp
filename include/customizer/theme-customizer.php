<?php
// Rede Social do Header e Footer
require get_template_directory().'/include/customizer/header-customizer.php';
require get_template_directory().'/include/customizer/header-color-customizer.php';
require get_template_directory().'/include/customizer/footer-customizer.php';
require get_template_directory().'/include/customizer/footer-color-customizer.php';

function up_customize_register( $wp_customize ){

    up_header_customizer( $wp_customize );
    up_color_header_customizer( $wp_customize );
    up_footer_customizer( $wp_customize );
    up_color_footer_customizer( $wp_customize );

}