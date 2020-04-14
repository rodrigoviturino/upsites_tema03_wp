<?php 
// Rede Social do Header

function up_header_customizer( $wp_customize ) {

    // Settings
    $wp_customize->add_setting('up_telefone', ['default' => '']);
    $wp_customize->add_setting('up_texto_email', ['default' => '']);
    $wp_customize->add_setting('up_link_email', ['default' => '']);
    $wp_customize->add_setting('up_endereco', ['default' => '']);

    // Row Center
        // Logo
        $wp_customize->add_setting('up_img_logo', ['default' => '']);
        // Icons
        $wp_customize->add_setting('up_txt1_rules', ['default' => '']);
        $wp_customize->add_setting('up_txt2_rules', ['default' => '']);
        $wp_customize->add_setting('up_txt1_jobs', ['default' => '']);
        $wp_customize->add_setting('up_txt2_jobs', ['default' => '']);
        $wp_customize->add_setting('up_txt1_quali', ['default' => '']);
        $wp_customize->add_setting('up_txt2_quali', ['default' => '']);

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

    // Row Top
    
        // Telefone
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

        // Email
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,

            'up_texto_email',
                [
                    'label'=>'Insira o Email',
                    'section' => 'up_header_section',
                    'settings' => 'up_texto_email',
                    'type' => 'text'  
                ]
            )
        );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,

            'up_link_email',
                [
                    'label'=>'Confirme novamente o Email',
                    'section' => 'up_header_section',
                    'settings' => 'up_link_email',
                    'type' => 'text'  
                ]
            )
        );
    
        // Endereço
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


    // Row Center
        // Logo
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
    
                'up_img_logo',
                    [
                        'label'=>'Logo Header',
                        'section' => 'up_header_section',
                        'settings' => 'up_img_logo',
                        'mime_type' => 'image'
                    ]
                )
            );

            $wp_customize->add_control(
                new WP_Customize_Control(
                    $wp_customize,
        
                    'up_txt1_rules',
                        [
                            'label'=>'Texto linha 1 Normas/Iso9001',
                            'section' => 'up_header_section',
                            'settings' => 'up_txt1_rules',
                            'type' => 'text'  
                        ]
                    )
                );
            $wp_customize->add_control(
                new WP_Customize_Control(
                    $wp_customize,
        
                    'up_txt2_rules',
                        [
                            'label'=>'Texto linha 2 Normas/Iso9001',
                            'section' => 'up_header_section',
                            'settings' => 'up_txt2_rules',
                            'type' => 'text'  
                        ]
                    )
                );
            $wp_customize->add_control(
                new WP_Customize_Control(
                    $wp_customize,
        
                    'up_txt1_jobs',
                        [
                            'label'=>'Texto linha 1 Serviço',
                            'section' => 'up_header_section',
                            'settings' => 'up_txt1_jobs',
                            'type' => 'text'  
                        ]
                    )
                );
            $wp_customize->add_control(
                new WP_Customize_Control(
                    $wp_customize,
        
                    'up_txt2_jobs',
                        [
                            'label'=>'Texto linha 2 Serviço',
                            'section' => 'up_header_section',
                            'settings' => 'up_txt2_jobs',
                            'type' => 'text'  
                        ]
                    )
                );
            $wp_customize->add_control(
                new WP_Customize_Control(
                    $wp_customize,
        
                    'up_txt1_quali',
                        [
                            'label'=>'Texto Linha 1 Tempo de trabalho e resposta',
                            'section' => 'up_header_section',
                            'settings' => 'up_txt1_quali',
                            'type' => 'text'  
                        ]
                    )
                );
            $wp_customize->add_control(
                new WP_Customize_Control(
                    $wp_customize,
        
                    'up_txt2_quali',
                        [
                            'label'=>'Texto Linha 2 Tempo de trabalho e resposta',
                            'section' => 'up_header_section',
                            'settings' => 'up_txt2_quali',
                            'type' => 'text'  
                        ]
                    )
                );

        //Quote
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
    
                'up_link_quote',
                    [
                        'label'=>'Link do Call to Action',
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


    // Row Bottom
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