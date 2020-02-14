<?php 
// Footer informações das colunas

function up_footer_customizer( $wp_customize ) {
 
    // Settings 
        // Informações
    $wp_customize->add_setting( 'up_about', [ 'default' => "" ]);
    $wp_customize->add_setting( 'up_menu', [ 'default' => "" ]);
    $wp_customize->add_setting( 'up_horario_funcionamento', [ 'default' => "" ]);
    $wp_customize->add_setting( 'up_newsletter', [ 'default' => "" ]);
    $wp_customize->add_setting( 'up_copyright', [ 'default' => "" ]);

        // Rede social Footer
    $wp_customize->add_setting('up_facebook', ['default' => '']);
    $wp_customize->add_setting('up_twitter', ['default' => '']);
    $wp_customize->add_setting('up_linkedin', ['default' => '']);
    $wp_customize->add_setting('up_instagram', ['default' => '']);

    //Sections
    $wp_customize->add_section('up_footer_section', [
        'title' => 'Footer - Infos',
        'priority' => 2
    ]);

    //Controllers 
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_about',
            [
                'label' => 'Sobre Empresa',
                'section' => 'up_footer_section',
                'settings' => 'up_about',
                'type' => 'textarea' ,

            ]
        )
    );
    
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_menu',
            [
                'label' => 'Menu Footer',
                'section' => 'up_footer_section',
                'settings' => 'up_menu',
                'type' => 'text' ,

            ]
        )
    );
    
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_horario_funcionamento',
            [
                'label' => 'Horario de Funcionamento da Empresa',
                'section' => 'up_footer_section',
                'settings' => 'up_horario_funcionamento',
                'type' => 'text' ,

            ]
        )
    );
    
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_newsletter',
            [
                'label' => 'Newsletter',
                'section' => 'up_footer_section',
                'settings' => 'up_newsletter',
                'type' => 'text' ,

            ]
        )
    );
    
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_copyright',
            [
                'label' => 'Texto do Copyright',
                'section' => 'up_footer_section',
                'settings' => 'up_copyright',
                'type' => 'text' ,

            ]
        )
    );
  
    
    // Rede Social Footer
    
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_copyright',
            [
                'label' => 'Texto do Copyright',
                'section' => 'up_footer_section',
                'settings' => 'up_copyright',
                'type' => 'text' ,

            ]
        )
    );

}