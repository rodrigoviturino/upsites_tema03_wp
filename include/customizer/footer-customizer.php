<?php 
// Footer informações das colunas

function up_footer_customizer( $wp_customize ) {
 
    // Settings 

    // Informações
        // LOGO
    $wp_customize->add_setting( 'up_logo_footer', [ 'default' => '' ]);
    $wp_customize->add_setting( 'up_description_logo_footer', [ 'default' => '' ]);
    $wp_customize->add_setting( 'up_text_about', [ 'default' => '' ]);
        // Rede social Footer
    $wp_customize->add_setting('up_facebook_footer', ['default' => '']);
    $wp_customize->add_setting('up_twitter_footer', ['default' => '']);
    $wp_customize->add_setting('up_linkedin_footer', ['default' => '']);
    $wp_customize->add_setting('up_instagram_footer', ['default' => '']);

    $wp_customize->add_setting( 'up_title_menu', [ 'default' => '' ]);
        // Coluna Contatos
    $wp_customize->add_setting( 'up_horario_funcionamento', [ 'default' => '' ]);
    $wp_customize->add_setting( 'up_endereco_empresa', [ 'default' => '' ]);
    $wp_customize->add_setting( 'up_telefone_empresa', [ 'default' => '' ]);
    $wp_customize->add_setting( 'up_email_empresa', [ 'default' => '' ]);
    $wp_customize->add_setting( 'up_link_email_empresa', [ 'default' => '' ]);
    
    $wp_customize->add_setting( 'up_copyright', [ 'default' => '' ]);

    $wp_customize->add_setting( 'up_link_termo_politica', [ 'default' => '' ]);

    // SELECT FOOTER
    $wp_customize->add_setting('up_select_footer', ['default' => '']);

    //Sections
    $wp_customize->add_section('up_footer_section', [
        'title' => 'Footer - Infos',
        'priority' => 3
    ]);

    //Controllers 

    // Coluna Descrição
    $wp_customize->add_control(
        new WP_Customize_Image_Control (
            $wp_customize,

            'up_logo_footer',
            [
                'label' => 'Logo do Footer',
                'section' => 'up_footer_section',
                'settings' => 'up_logo_footer'
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_description_logo_footer',
            [
                'label' => 'Descrição Logo do Footer',
                'section' => 'up_footer_section',
                'settings' => 'up_description_logo_footer',
                'type' => 'text'
            ]
        )
    );
    
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_text_about',
            [
                'label' => 'Texto sobre Empresa',
                'section' => 'up_footer_section',
                'settings' => 'up_text_about',
                'type' => 'textarea'
            ]
        )
    );

        // Rede Social
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
    
                'up_facebook_footer',
                    [
                        'label'=>'Link do Facebook',
                        'section' => 'up_footer_section',
                        'settings' => 'up_facebook_footer',
                        'type' => 'text'  
                    ]
                )
            );
            
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
    
                'up_twitter_footer',
                    [
                        'label'=>'Link do Twitter',
                        'section' => 'up_footer_section',
                        'settings' => 'up_twitter_footer',
                        'type' => 'text'  
                    ]
                )
            );
    
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
    
                'up_linkedin_footer',
                    [
                        'label'=>'Link do Linkedin',
                        'section' => 'up_footer_section',
                        'settings' => 'up_linkedin_footer',
                        'type' => 'text'  
                    ]
                )
            );
    
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
    
                'up_instagram_footer',
                    [
                        'label'=>'Link do Instagram',
                        'section' => 'up_footer_section',
                        'settings' => 'up_instagram_footer',
                        'type' => 'text'  
                    ]
                )
            );
    


    // Coluna Titulo Menu
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_title_menu',
            [
                'label' => 'Titulo sessão Menu',
                'section' => 'up_footer_section',
                'settings' => 'up_title_menu',
                'type' => 'text'
            ]
        )
    );
    
    // Coluna Contato
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_horario_funcionamento',
            [
                'label' => 'Horario de Funcionamento da Empresa',
                'section' => 'up_footer_section',
                'settings' => 'up_horario_funcionamento',
                'type' => 'text'
            ]
        )
    );
    
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_endereco_empresa',
            [
                'label' => 'Endereço da Empresa',
                'section' => 'up_footer_section',
                'settings' => 'up_endereco_empresa',
                'type' => 'text'
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_telefone_empresa',
            [
                'label' => 'Telefone da Empresa',
                'section' => 'up_footer_section',
                'settings' => 'up_telefone_empresa',
                'type' => 'text'
            ]
        )
    );
    
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_email_empresa',
            [
                'label' => 'Email da Empresa',
                'section' => 'up_footer_section',
                'settings' => 'up_email_empresa',
                'type' => 'text'
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_link_email_empresa',
            [
                'label' => 'Confirme o email novamente',
                'section' => 'up_footer_section',
                'settings' => 'up_link_email_empresa',
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


    // SELECT
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_select_footer',
            [
                'label' => 'Opções de Tema do rodapé',
                'section' => 'up_footer_section',
                'settings' => 'up_select_footer',
                'type' => 'select',
                'choices' => array(
                    'dark' => 'dark',
                    'light' => 'light',
                ),

            ]
        )
    );

    // OPÇÃO PARA PAGINAS DE TERMOS DE USO E POLITICAS DE PRIVACIDADES
    // $wp_customize->add_control(
    //     new WP_Customize_Control (
    //         $wp_customize,

    //         'up_select_footer',
    //         [
    //             'label' => 'Politica de privacidade',
    //             'section' => 'up_footer_section',
    //             'settings' => 'up_select_footer',
    //             'type' => 'dropdown-pages'
    //         ]
    //     )
    // );

}