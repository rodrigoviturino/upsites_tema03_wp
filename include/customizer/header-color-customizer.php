<?php 
// Footer informações das colunas

function up_color_header_customizer( $wp_customize ) {
 
    // Settings 
        // Row Top
        $wp_customize->add_setting( 'up_cor_fundo_redesocial_header', ['default' => "#1E2227" ]);
        $wp_customize->add_setting( 'up_cor_icone_telefone_header', ['default' => "#F35C27" ]);
        $wp_customize->add_setting( 'up_cor_text_telefone_header', ['default' => "#8A99C0" ]);
        $wp_customize->add_setting( 'up_cor_icone_email_header', ['default' => "#F35C27" ]);
        $wp_customize->add_setting( 'up_cor_text_email_header', ['default' => "#8A99C0" ]);
        $wp_customize->add_setting( 'up_cor_icone_local_header', ['default' => "#F35C27" ]);
        $wp_customize->add_setting( 'up_cor_text_local_header', ['default' => "#8A99C0" ]);
        // Icones Rede Social
        $wp_customize->add_setting( 'up_cor_icon_face_header', ['default' => "#8A99C0" ]);
        $wp_customize->add_setting( 'up_cor_icon_twitter_header', ['default' => "#8A99C0" ]);
        $wp_customize->add_setting( 'up_cor_icon_linkedin_header', ['default' => "#8A99C0" ]);
        $wp_customize->add_setting( 'up_cor_icon_insta_header', ['default' => "#8A99C0" ]);

        // Row Center
        $wp_customize->add_setting( 'up_cor_principal_header', ['default' => "#030F27" ]);
        
        // Row Bottom
        $wp_customize->add_setting( 'up_cor_fundo_menu', ['default' => "#f7f9fa" ]);




    //Sections
    $wp_customize->add_section('up_color_header_section', [
        'title' => 'Header - Cores ',
        'priority' => 2
    ]);


    //Controllers 
        // Row Top
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_fundo_redesocial_header',

            [
                'label' => 'Cor do fundo Topo',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_fundo_redesocial_header',
            ]
        )
    );
    // Cor Icone Telefone
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icone_telefone_header',

            [
                'label' => 'Cor do icone do telefone',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_icone_telefone_header',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_text_telefone_header',

            [
                'label' => 'Cor da texto do telefone',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_text_telefone_header',
            ]
        )
    );
    // Cor Icone Email
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icone_email_header',

            [
                'label' => 'Cor do icone do email',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_icone_email_header',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_text_email_header',

            [
                'label' => 'Cor da texto do email',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_text_email_header',
            ]
        )
    );
    // Cor Icone Local
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icone_local_header',

            [
                'label' => 'Cor do icone do local',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_icone_local_header',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_text_local_header',

            [
                'label' => 'Cor da texto do local',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_text_local_header',
            ]
        )
    );

    // Cor Rede Social
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icon_face_header',

            [
                'label' => 'Cor do Icon do Facebook',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_icon_face_header',
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icon_twitter_header',

            [
                'label' => 'Cor do Icon do Twiiter',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_icon_twitter_header',
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icon_linkedin_header',

            [
                'label' => 'Cor do Icon do Linkedin',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_icon_linkedin_header',
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icon_insta_header',

            [
                'label' => 'Cor do Icon do Instagram',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_icon_insta_header',
            ]
        )
    );






        // Row Center - Logo
        // Color Background <Footer>
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_principal_header',

            [
                'label' => 'Cor de Fundo da Logo',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_principal_header',
            ]
        )
    );

    // Row Bottom - Menu
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_fundo_menu',

            [
                'label' => 'Cor de Fundo do Menu',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_fundo_menu',
            ]
        )
    );


}