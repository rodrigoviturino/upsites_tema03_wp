

<footer class="footer">
    <section class="footer__main">
        <div class="container">
            <div class="row">

                <!-- Column About -->
                <div class="col-md-3 footer__main__about">

                    <img src="<?php echo get_template_directory_uri() ?> './public/images/logo-footer.png' " alt="" class="img-fluid">
                    <?php if(get_theme_mod('up_about') ) : ?>
                        <p class="text">
                            <?php echo get_theme_mod('up_about') ?>
                        </p>
                    <?php endif; ?>

                    <ul class="redeSocial">
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
                <!-- end Column About -->

                <!-- Column Menu -->
                <div class="col-md-3 footer__main__menu">
                    <h5 class="title">Useful Links</h5>

                <?php
                    if( has_nav_menu('main-menu') ) {
                        wp_nav_menu([
                            'theme_location' => 'main-menu',
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

                    <p>
                        <i class="fas fa-map-marker-alt"></i>
                        Av. Nações Unidas - 14261
                    </p>

                    <?php if(get_theme_mod('up_telefone') ) : ?>
                        <p>
                            <i class="fas fa-phone"></i>
                            <?php echo get_theme_mod('up_telefone'); ?>
                        </p>
                    <?php endif; ?>

                    <?php if( get_theme_mod('up_email') ) : ?>
                        <a href="mailto:contato@upsites.digital" class="email">
                            <i class="far fa-envelope"></i>
                            <?php echo get_theme_mod('up_email'); ?>
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

            <?php if( get_theme_mod('up_copyright') ) : ?>
                <p class="copy order-2 order-md-1"><?php echo get_theme_mod('up_copyright'); ?> &copy; <?php echo date('Y'); ?> - <span style="color:orangered;">Upsites</span></p>
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

<!-- Scripts -->
<!-- <script src="./public/theme.min.js"></script> -->
<!-- end Scripts -->

</body>
</html>