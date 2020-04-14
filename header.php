<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Theme - Bauer </title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">

    <div class="header__rowTop">
        <div class="container header__rowTop__wrapper">

                <ul class="header__rowTop__wrapper__contact">
                    <li>

                        <?php if( get_theme_mod('up_telefone') ) : ?>
                            <a href="#" style="color: <?php echo get_theme_mod('up_cor_text_telefone_header'); ?>">
                                <i class="fas fa-phone" style="color: <?php echo get_theme_mod('up_cor_icone_telefone_header'); ?>"></i>
                                <?php echo get_theme_mod('up_telefone'); ?>
                            </a>
                        <?php endif; ?>
                    </li>

                    <li>
                        <?php if(get_theme_mod('up_link_email') && get_theme_mod('up_texto_email') ) : ?>
                            <a href="mailto:<?php echo get_theme_mod('up_link_email'); ?>" style="color: <?php echo get_theme_mod('up_cor_text_email_header'); ?>">
                                <i class="fas fa-envelope" style="color: <?php echo get_theme_mod('up_cor_icone_email_header'); ?>"></i>
                                <?php echo get_theme_mod('up_texto_email'); ?>
                            </a>
                        <?php endif; ?>
                    </li>

                    <li>
                        <?php if(get_theme_mod('up_endereco') ) : ?>
                            <a href="https://goo.gl/maps/68pzk3qJfcJ2" target="_blank" rel="nofollow" style="color: <?php echo get_theme_mod('up_cor_text_local_header'); ?>">
                                <i class="fas fa-map-marker-alt" style="color: <?php echo get_theme_mod('up_cor_icone_local_header'); ?>"></i>
                                <?php echo get_theme_mod('up_endereco'); ?>
                            </a>
                        <?php endif; ?>
                    </li>

                </ul>

                <ul class="header__rowTop__wrapper__redeSocial">

                    <li>
                        <?php if(get_theme_mod('up_facebook')) : ?>
                            <a href="<?php echo get_theme_mod('up_facebook'); ?>" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        <?php endif; ?>
                    </li>

                    <li>
                    <?php if(get_theme_mod('up_twitter')) : ?>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    <?php endif; ?>
                    </li>

                    <li>
                    <?php if(get_theme_mod('up_linkedin')) : ?>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    <?php endif; ?>
                    </li>

                    <li>
                    <?php if(get_theme_mod('up_instagram')) : ?>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    <?php endif; ?>
                    </li>

                </ul>

            
        </div>

    </div>

    <div class="header__rowCenter">
        <div class="container header__rowCenter__wrapper">

            <div class="logo">
                <?php 
                    $img_logo = get_template_directory_uri() . '/public/images/logo.png';
                    if(get_theme_mod('up_img_logo') ) : 
                ?>
                    <a href="<?php bloginfo(url); ?>">
                        <img src="<?php echo $img_logo = get_theme_mod('up_img_logo'); ?>" alt="" class='img-fluid'>
                    </a>
                <?php endif; ?>
            </div>

            <ul class="group-icons">

                <li>
                    <div>
                        <i class="far fa-check-square"></i>
                    </div>

                    <div>
                        <span class="text"><?= get_theme_mod('up_txt1_rules') ?></span><br>
                        <span class="text"><?= get_theme_mod('up_txt2_rules') ?></span>
                    </div>
                </li>

                <li>
                    <div>
                        <i class="far fa-clock"></i>
                    </div>
                    <div>
                        <span class="text"><?= get_theme_mod('up_txt1_jobs') ?></span><br>
                        <span class="text"><?= get_theme_mod('up_txt2_jobs') ?></span>
                    </div>
                </li>

                <li>
                    <div>
                        <i class="far fa-thumbs-up"></i>
                    </div>
                    <div>
                        <span class="text"><?= get_theme_mod('up_txt1_quali') ?></span><br>
                        <span class="text"><?= get_theme_mod('up_txt2_quali') ?></span>
                    </div>
                </li>

            </ul>

        </div>
    </div>

    <div class="header__rowBottom">
        <div class="container header__rowBottom__wrapper rounded js-scroll">
            
            <nav class="navbar navbar-expand-lg navbar-light">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse order-3 order-sm-3 order-lg-1" id="navbarSupportedContent">

                <?php
                    if( has_nav_menu('main-menu') ) {
                        wp_nav_menu([
                            'theme_location' => 'main-menu',
                            'container' => null,
                            'container_id' => 'navbarResponsive',
                            'menu_class' => 'navbar-nav mr-auto',
                            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                            'walker'  => new wp_bootstrap_navwalker()
                        ]);
                    }

                    
                ?>
                </div>

            
                <?php if( get_theme_mod('up_link_quote') && get_theme_mod('up_text_quote') ) : ?>
                    <a href="<?php echo get_theme_mod('up_link_quote'); ?>" class="btn_budget btn btn-lg rounded-pill d-block order-2 order-sm-2 order-lg-2">
                        <?php echo get_theme_mod('up_text_quote'); ?>
                    </a>
                <?php endif; ?>

            </nav>

        </div> <!-- end Container -->
    </div>

</header>