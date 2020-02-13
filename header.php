<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="./theme.min.css"> -->
    <!-- <link rel="stylesheet" href="./fonts/fonts.css"> -->
    <title>Theme - Bauer </title>
    <?php wp_head(); ?>
</head>

<body>

<header class="header">

    <div class="header__rowTop">
        <div class="container header__rowTop__wrapper">

                <ul class="header__rowTop__wrapper__contact">

                    <li>
                        <a href="#">
                            <i class="fas fa-phone"></i>
                            (11) 4130-3275
                        </a>
                    </li>

                    <li>
                        <a href="mailto:contato@upsites.digital">
                            <i class="fas fa-envelope"></i>
                            contato@upsites.digital
                        </a>
                    </li>

                    <li>
                        <a href="https://goo.gl/maps/68pzk3qJfcJ2" target="_blank" rel="nofollow">
                            <i class="fas fa-map-marker-alt"></i>
                            R. Prof. Ernest Marcus, 65 - Pacaembu, São Paulo - SP - 01246-080
                        </a>
                    </li>

                </ul>

                <ul class="header__rowTop__wrapper__redeSocial">

                    <li>
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>

                </ul>

            
        </div>

    </div>

    <div class="header__rowCenter">
        <div class="container header__rowCenter__wrapper">
            <div class="logo">
                <a href="<?php bloginfo(url); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?> './public/images/logo.png' " alt="" class="img-fluid">
                </a>
            </div>

            <!-- <a href="#" class="btn_budget"></a> -->
            <button type="button" class=" btn_budget btn btn-lg rounded-pill d-block">Get a Quote</button>

        </div>
    </div>

    <div class="header__rowBottom">
        <div class="container header__rowBottom__wrapper rounded js-scroll">
            
            <nav class="navbar navbar-expand-lg navbar-light">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <ul class="shop-cart order-md-2">
                    <li>
                        <a href="#">
                            <i class="fas fa-search"></i>
                        </a>
                    </li>    
                    <li>
                        <a href="#">
                            <i class="fas fa-shopping-cart"></i>                      
                        </a>
                    </li>                        
                </ul>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <?php
                    if( has_nav_menu('main-menu') ) {
                        wp_nav_menu([
                            'theme_location' => 'main-menu',
                            'fallback_cb' => false,
                            'container_class' => null,
                            'container_id' => 'navbarResponsive',
                            'menu_class' => 'navbar-nav mr-auto'
                        ]);
                    }
                ?>

                  
                </div>
            </nav>

        </div> <!-- end Container -->
    </div>

</header>