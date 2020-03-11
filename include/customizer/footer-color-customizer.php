<?php 
// Footer informações das colunas

function up_color_footer_customizer( $wp_customize ) {
 
    // Settings 

        $wp_customize->add_setting( 'up_cor_principal_footer', ['default' => "#030F27" ]);
    
        // Coluna About
        $wp_customize->add_setting( 'up_cor_text_about_footer', ['default' => "#fff" ]);

        $wp_customize->add_setting( 'up_cor_icone_telefone_footer', ['default' => "#F35C27" ]);
        $wp_customize->add_setting( 'up_cor_text_telefone_footer', ['default' => "#8A99C0" ]);
        $wp_customize->add_setting( 'up_cor_icone_email_footer', ['default' => "#F35C27" ]);
        $wp_customize->add_setting( 'up_cor_text_email_footer', ['default' => "#8A99C0" ]);
        $wp_customize->add_setting( 'up_cor_icone_local_footer', ['default' => "#F35C27" ]);
        $wp_customize->add_setting( 'up_cor_text_local_footer', ['default' => "#8A99C0" ]);

        // Icones Rede Social
        $wp_customize->add_setting( 'up_cor_icon_face_footer', ['default' => "#8A99C0" ]);
        $wp_customize->add_setting( 'up_cor_hover_icon_face_footer', ['default' => "#F35C27" ]);

        $wp_customize->add_setting( 'up_cor_icon_twitter_footer', ['default' => "#8A99C0" ]);
        $wp_customize->add_setting( 'up_cor_hover_icon_twitter_footer', ['default' => "#F35C27" ]);

        $wp_customize->add_setting( 'up_cor_icon_linkedin_footer', ['default' => "#8A99C0" ]);
        $wp_customize->add_setting( 'up_cor_hover_icon_linkedin_footer', ['default' => "#F35C27" ]);

        $wp_customize->add_setting( 'up_cor_icon_insta_footer', ['default' => "#8A99C0" ]);
        $wp_customize->add_setting( 'up_cor_hover_icon_insta_footer', ['default' => "#F35C27" ]);        

        // Coluna Menu
        $wp_customize->add_setting( 'up_cor_titulo_menu', ['default' => "#FFF" ]);        
        $wp_customize->add_setting( 'up_cor_hover_titulo_menu', ['default' => "#F35C27" ]);        


        $wp_customize->add_setting( 'up_cor_fundo_menu', ['default' => "#f7f9fa" ]);




    //Sections
    $wp_customize->add_section('up_color_footer_section', [
        'title' => 'Footer - Cores ',
        'priority' => 4
    ]);


    //Controllers 

     // Color Background
     $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_principal_footer',

            [
                'label' => 'Cor Background Footer',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_principal_footer',
            ]
        )
    );

    //  Coluna Sobre Empresa
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_text_about_footer',

            [
                'label' => 'Cor texto sobre Empresa',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_text_about_footer',
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_fundo_redesocial_footer',

            [
                'label' => 'Cor do fundo Topo',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_fundo_redesocial_footer',
            ]
        )
    );

        // Cor Rede Social
        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_icon_face_footer',
    
                [
                    'label' => 'Cor do Icon do Facebook',
                    'section' => 'up_color_footer_section',
                    'settings' => 'up_cor_icon_face_footer',
                ]
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_hover_icon_face_footer',
    
                [
                    'label' => 'Cor do Hover Icon do Facebook',
                    'section' => 'up_color_footer_section',
                    'settings' => 'up_cor_hover_icon_face_footer',
                ]
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_icon_twitter_footer',
    
                [
                    'label' => 'Cor do Icon do Twitter',
                    'section' => 'up_color_footer_section',
                    'settings' => 'up_cor_icon_twitter_footer',
                ]
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_hover_icon_twitter_footer',
    
                [
                    'label' => 'Cor do Hover Icon do Twitter',
                    'section' => 'up_color_footer_section',
                    'settings' => 'up_cor_hover_icon_twitter_footer',
                ]
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_icon_linkedin_footer',
    
                [
                    'label' => 'Cor do Icon do Linkedin',
                    'section' => 'up_color_footer_section',
                    'settings' => 'up_cor_icon_linkedin_footer',
                ]
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_hover_icon_linkedin_footer',
    
                [
                    'label' => 'Cor do Hover Icon do Linkedin',
                    'section' => 'up_color_footer_section',
                    'settings' => 'up_cor_hover_icon_linkedin_footer',
                ]
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_icon_insta_footer',
    
                [
                    'label' => 'Cor do Icon do Instagram',
                    'section' => 'up_color_footer_section',
                    'settings' => 'up_cor_icon_insta_footer',
                ]
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_hover_icon_insta_footer',
    
                [
                    'label' => 'Cor do Hover Icon do Instagram',
                    'section' => 'up_color_footer_section',
                    'settings' => 'up_cor_hover_icon_insta_footer',
                ]
            )
        );


    // Titulo Menu
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_titulo_menu_footer',

            [
                'label' => 'Cor Titulo da coluna Menu',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_titulo_menu_footer',
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_titulo_menu',

            [
                'label' => 'Cor Hover Titulo da coluna Menu',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_titulo_menu',
            ]
        )
    );

    // Cor Icone Telefone
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icone_telefone_footer',

            [
                'label' => 'Cor do icone do telefone',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_icone_telefone_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_text_telefone_footer',

            [
                'label' => 'Cor da texto do telefone',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_text_telefone_footer',
            ]
        )
    );
    // Cor Icone Email
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icone_email_footer',

            [
                'label' => 'Cor do icone do email',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_icone_email_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_text_email_footer',

            [
                'label' => 'Cor da texto do email',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_text_email_footer',
            ]
        )
    );
    // Cor Icone Local
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icone_local_footer',

            [
                'label' => 'Cor do icone do local',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_icone_local_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_text_local_footer',

            [
                'label' => 'Cor da texto do local',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_text_local_footer',
            ]
        )
    );


}