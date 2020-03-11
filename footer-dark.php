

<footer class="footer">
    <section class="footer__main">
        <div class="container">
            <div class="row">

                <!-- Column About -->
                <div class="col-md-3 footer__main__about">

                <?php 
                    $img_logo_footer = get_template_directory_uri();
                    if(get_theme_mod('up_img_logo') && get_theme_mod('up_description_logo_footer')) : 
                ?>
                    <a href="<?php bloginfo(url); ?>">
                        <img src="<?php echo $img_logo_footer ?> './public/images/logo-footer.png' " alt="<?php echo get_theme_mod('up_description_logo_footer'); ?>" class="img-fluid">                    
                    </a>
                <?php endif; ?>

                    <?php if(get_theme_mod('up_text_about') ) : ?>
                        <p class="text">
                            <?php echo get_theme_mod('up_text_about') ?>
                        </p>
                    <?php endif; ?>

                    <ul class="redeSocial">

                        <?php if(get_theme_mod('up_facebook_footer')) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod('up_facebook_footer'); ?>" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                        <?php endif; ?>
    
                        <?php if(get_theme_mod('up_twitter_footer')) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod('up_twitter_footer'); ?>">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if(get_theme_mod('up_linkedin_footer')) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod('up_linkedin_footer'); ?>">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if(get_theme_mod('up_instagram_footer')) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod('up_instagram_footer'); ?>">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        <?php endif; ?>
                        
                    </ul>

                </div>
                <!-- end Column About -->

                <!-- Column Menu -->
                <div class="col-md-3 footer__main__menu">

                <?php if( get_theme_mod('up_title_menu') ) : ?>
                    <h5 class="title">
                        <?php echo get_theme_mod('up_title_menu'); ?>
                    </h5>
                <?php endif; ?>

                <?php
                    if( has_nav_menu('main-menu') ) {
                        wp_nav_menu([
                            'theme_location' => 'footer-menu',
                            'fallback_cb' => false,
                            'container_class' => null,
                            'container_id' => 'navbarResponsive',
                            'menu_class' => 'navbar'
                        ]);
                    }
                ?>
                    
                </div>
                <!-- end Column Menu -->

                <!-- Column Contacts -->
                <div class="col-md-3 footer__main__contact">
                    <h5 class="title">Contacts</h5>
                    <?php if( get_theme_mod('up_horario_funcionamento') ) : ?>
                        <p>
                            <i class="far fa-clock"></i>
                            <?php echo get_theme_mod('up_horario_funcionamento'); ?>
                        </p>
                    <?php endif; ?>
                    
                    <?php if( get_theme_mod('up_endereco_empresa') ) : ?>
                        <p>
                            <i class="fas fa-map-marker-alt"></i>
                            <?php echo get_theme_mod('up_endereco_empresa'); ?>
                        </p>
                    <?php endif; ?>

                    <?php if(get_theme_mod('up_telefone_empresa') ) : ?>
                        <p>
                            <i class="fas fa-phone"></i>
                            <?php echo get_theme_mod('up_telefone_empresa'); ?>
                        </p>
                    <?php endif; ?>

                    <?php if( get_theme_mod('up_email_empresa') && get_theme_mod('up_link_email_empresa') ) : ?>
                        <a href="mailto: <?php echo get_theme_mod('up_link_email_empresa'); ?>" class="email">
                            <i class="far fa-envelope"></i>
                            <?php echo get_theme_mod('up_email_empresa'); ?>
                        </a>
                    <?php endif; ?>

                </div>
                <!-- end Column Contacts -->

                <!-- Column Newsletter -->
                <div class="col-md-3 footer__main__newsletter">
                    <h5 class="title">Newsletter</h5>
                    <form action="#">
                        <input type="text" placeholder="Your email...">
                        <button>Subscribe</button>
                    </form>
                </div>
                <!-- end Column Newsletter -->

            </div>
        </div>
    </section>

    <section class="footer__copyright">
        <div class="container">
            <div class="wrapper">

            <?php if( get_theme_mod('up_copyright') && get_theme_mod('up_text_company') ) : ?>
                <p class="copy order-2 order-md-1"><?php echo get_theme_mod('up_copyright'); ?> &copy; <?php echo date('Y'); ?> - <span style="color:orangered;"><?php echo get_theme_mod('up_text_company'); ?></span></p>
            <?php endif; ?>

                <ul class=" order-1 order-md-2">
                    <li>
                        <a href="#">Terms of Use</a>
                    </li>
                    <li>
                        <a href="#">Privacy Policy</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

</footer>

    <?php wp_footer(); ?>

<style type="text/css">
    .footer__main__about .text {
        color: <?php echo get_theme_mod('up_cor_text_about_footer'); ?>;
    }

    .footer__main__about .redeSocial li a .fa-facebook-f {
        color: <?php echo get_theme_mod('up_cor_icon_face_footer'); ?>;
    }

    .footer__main__about .redeSocial li a .fa-facebook-f:hover {
        color: <?php echo get_theme_mod('up_cor_hover_icon_face_footer'); ?>;
    }

    .footer__main__about .redeSocial li a .fa-twitter {
        color: <?php echo get_theme_mod('up_cor_icon_twitter_footer'); ?>;
    }

    .footer__main__about .redeSocial li a .fa-twitter:hover {
        color: <?php echo get_theme_mod('up_cor_hover_icon_twitter_footer'); ?>;
    }

    .footer__main__about .redeSocial li a .fa-linkedin-in {
        color: <?php echo get_theme_mod('up_cor_icon_linkedin_footer'); ?>;
    }

    .footer__main__about .redeSocial li a .fa-linkedin-in:hover {
        color: <?php echo get_theme_mod('up_cor_hover_icon_linkedin_footer'); ?>;
    }

    .footer__main__about .redeSocial li a .fa-instagram {
        color: <?php echo get_theme_mod('up_cor_icon_insta_footer'); ?>;
    }

    .footer__main__about .redeSocial li a .fa-instagram:hover {
        color: <?php echo get_theme_mod('up_cor_hover_icon_insta_footer'); ?>;
    }

    .footer__main__menu .title {
        color: <?php echo get_theme_mod('up_cor_titulo_menu_footer'); ?>;
    }
    .footer__main__menu .title:hover {
        color: <?php echo get_theme_mod('up_cor_hover_titulo_menu'); ?>;
    }

</style>

<!-- Scripts -->
<!-- <script src="./public/theme.min.js"></script> -->
<!-- end Scripts -->

<script>
let menu = document.querySelector('.header__rowBottom');
let headerClassList = menu.classList

window.addEventListener('scroll', () => {
    if (window.scrollY >= 220) {
        if(!headerClassList.contains('scrollHide')) {
            headerClassList.add('scrollHide')
        }
    } else {
        headerClassList.remove('scrollHide');
    }
});

</script>

</body>
</html>