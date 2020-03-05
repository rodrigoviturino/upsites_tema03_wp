<?php 
// Rede Social do Header

function up_header_customizer( $wp_customize ) {

    // Settings
    $wp_customize->add_setting('up_telefone', ['default' => '']);
    $wp_customize->add_setting('up_email', ['default' => '']);
    $wp_customize->add_setting('up_link_email', ['default' => '']);
    $wp_customize->add_setting('up_endereco', ['default' => '']);

    $wp_customize->add_setting('up_link_quote', ['default' => '']);
    $wp_customize->add_setting('up_text_quote', ['default' => '']);

    $wp_customize->add_setting('up_facebook', ['default' => '']);
    $wp_customize->add_setting('up_twitter', ['default' => '']);
    $wp_customize->add_setting('up_linkedin', ['default' => '']);
    $wp_customize->add_setting('up_instagram', ['default' => '']);

    // Sections
    $wp_customize->add_section('up_header_section', [
        'title' => 'Header - Infos e Redes Sociais',
        'priority' => '1'
    ]);

    // Controllers

    // Infos
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,

            'up_telefone',
                [
                    'label'=>'Telefone',
                    'section' => 'up_header_section',
                    'settings' => 'up_telefone',
                    'type' => 'text'  
                ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,

            'up_email',
                [
                    'label'=>'Email',
                    'section' => 'up_header_section',
                    'settings' => 'up_email',
                    'type' => 'text'  
                ]
            )
        );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,

            'up_link_email',
                [
                    'label'=>'Link do Email',
                    'section' => 'up_header_section',
                    'settings' => 'up_link_email',
                    'type' => 'text'  
                ]
            )
        );

 // Quote
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,

            'up_link_quote',
                [
                    'label'=>'Link do Quote',
                    'section' => 'up_header_section',
                    'settings' => 'up_link_quote',
                    'type' => 'text'  
                ]
            )
        );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,

            'up_text_quote',
                [
                    'label'=>'Texto do Quote',
                    'section' => 'up_header_section',
                    'settings' => 'up_text_quote',
                    'type' => 'text'  
                ]
            )
        );
// end Quote

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,

            'up_endereco',
                [
                    'label'=>'endereço',
                    'section' => 'up_header_section',
                    'settings' => 'up_endereco',
                    'type' => 'text'  
                ]
            )
        );

    // Rede Social 
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,

            'up_facebook',
                [
                    'label'=>'Link do Facebook',
                    'section' => 'up_header_section',
                    'settings' => 'up_facebook',
                    'type' => 'text'  
                ]
            )
        );
        
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,

            'up_twitter',
                [
                    'label'=>'Link do Twitter',
                    'section' => 'up_header_section',
                    'settings' => 'up_twitter',
                    'type' => 'text'  
                ]
            )
        );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,

            'up_linkedin',
                [
                    'label'=>'Link do Linkedin',
                    'section' => 'up_header_section',
                    'settings' => 'up_linkedin',
                    'type' => 'text'  
                ]
            )
        );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,

            'up_instagram',
                [
                    'label'=>'Link do Instagram',
                    'section' => 'up_header_section',
                    'settings' => 'up_instagram',
                    'type' => 'text'  
                ]
            )
        );

}