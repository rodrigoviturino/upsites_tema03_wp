

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

            <?php if( get_theme_mod('up_text_copyright') && get_theme_mod('up_text_company_copyright') ) : ?>
                <p class="copy order-2 order-md-1"><?php echo get_theme_mod('up_text_copyright'); ?> &copy; <?php echo date('Y'); ?> - <span style="color:orangered;"><?php echo get_theme_mod('up_text_company_copyright'); ?></span></p>
            <?php endif; ?>

                <ul class=" order-1 order-md-2">
                <?php if(get_theme_mod('up_link_termo_use') && get_theme_mod('up_text_termo_use') ) : ?>
                    <li>
                        <a href="<?php echo get_permalink( get_theme_mod('up_link_termo_use') ); ?>"><?php echo get_theme_mod('up_text_termo_use'); ?></a>
                    </li>
                <?php endif; ?>

                <?php if(get_theme_mod('up_text_termo_politica') && get_theme_mod('up_link_termo_politica') ) : ?>
                    <li>
                        <a href="<?php get_permalink( get_theme_mod('up_link_termo_politica') ); ?>">
                            <?php echo get_theme_mod('up_text_termo_politica'); ?>
                        </a>
                    </li>
                <?php endif; ?>
                </ul>
            </div>
        </div>
    </section>

</footer>

    <?php wp_footer(); ?>

<style type="text/css">

/* Header */
    .header__rowTop {
        background-color: <?php echo get_theme_mod('up_cor_fundo_redesocial_header'); ?>;
    }
    /* .header__rowCenter {
        background-color: <?php// echo get_theme_mod('up_cor_principal_header'); ?>;
    } */
    .header__rowBottom__wrapper {
        background-color: <?php echo get_theme_mod('up_cor_principal_fundo_menu'); ?>;
    }
    .header__rowTop__wrapper__redeSocial li a .fa-facebook-f {
        color: <?php echo get_theme_mod('up_cor_icon_face_header'); ?>;
    }
    .header__rowTop__wrapper__redeSocial li a .fa-facebook-f:hover {
        color: <?php echo get_theme_mod('up_cor_hover_icon_face_header'); ?>;
    }
    /* Rede Social */
    .header__rowTop__wrapper__redeSocial li a .fa-instagram{
        color: <?php echo get_theme_mod('up_cor_icon_insta_header'); ?>;
    }
    .header__rowTop__wrapper__redeSocial li a .fa-instagram:hover{
        color: <?php echo get_theme_mod('up_cor_hover_icon_insta_header'); ?>;
    }
    .header__rowTop__wrapper__redeSocial li a .fa-linkedin-in{
        color: <?php echo get_theme_mod('up_cor_hover_icon_linkedin_header'); ?>;
    }
    .header__rowTop__wrapper__redeSocial li a .fa-linkedin-in:hover{
        color: <?php echo get_theme_mod('up_cor_hover_icon_linkedin_header'); ?>;
    }
    .header__rowTop__wrapper__redeSocial li a .fa-twitter{
        color: <?php echo get_theme_mod('up_cor_icon_twitter_header'); ?>;
    }
    .header__rowTop__wrapper__redeSocial li a .fa-twitter:hover{
        color: <?php echo get_theme_mod('up_cor_hover_icon_twitter_header'); ?>;
    }

    /* Row Center */
    .header__rowCenter__wrapper .btn_budget {
        background-color: <?php echo get_theme_mod('up_cor_btn_contact'); ?>;
    }
    .header__rowCenter__wrapper .btn_budget {
        color: <?php echo get_theme_mod('up_cor_text_btn_contact'); ?>;
    }

    .header__rowCenter__wrapper .group-icons li:first-child .text {
        color: <?php echo get_theme_mod('up_cor_txt_rules'); ?>;
    }
    .header__rowCenter__wrapper .group-icons li:nth-child(2) .text {
        color: <?php echo get_theme_mod('up_cor_txt_jobs'); ?>;
    }
    .header__rowCenter__wrapper .group-icons li:last-child .text {
        color: <?php echo get_theme_mod('up_cor_txt_quali'); ?>;
    }

    /* Row Bottom - Itens do menu */
    .header__rowBottom__wrapper .navbar .navbar-nav .menu-item a {
        color: <?php echo get_theme_mod('up_cor_text_menu'); ?>;
    }
    .header__rowBottom__wrapper .navbar .navbar-nav .menu-item a:after{
        background-color: <?php echo get_theme_mod('up_cor_hover_text_menu'); ?>;
    }
    .header__rowBottom .shop-cart .fa-search{
        color: <?php echo get_theme_mod('up_cor_icon_search'); ?>;
    }
    .header__rowBottom .shop-cart .fa-search:hover{
        color: <?php echo get_theme_mod('up_cor_hover_icon_search'); ?>;
    }
    .header__rowBottom .shop-cart .fa-shopping-cart{
        color: <?php echo get_theme_mod('up_cor_icon_cart'); ?>;
    }
    .header__rowBottom .shop-cart .fa-shopping-cart:hover{
        color: <?php echo get_theme_mod('up_cor_hover_icon_cart'); ?>;
    }

/* end Header */

/* Footer */
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

    .footer__main__menu .navbar li a {
        color: <?php echo get_theme_mod('up_cor_itens_menu_footer'); ?>;
    }
    .footer__main__menu .navbar li a:hover {
        color: <?php echo get_theme_mod('up_cor_hover_itens_menu_footer'); ?>;
    }

    .footer__main__newsletter .title {
        color: <?php echo get_theme_mod('up_cor_title_newsletter_footer'); ?>;
    }
    .footer__main__newsletter form button {
        color: <?php echo get_theme_mod('up_cor_button_newsletter_footer'); ?>;
        border-color: <?php echo get_theme_mod('up_cor_button_newsletter_footer'); ?>;
    }

    .footer__main__newsletter form button:hover {
        color: <?php echo get_theme_mod('up_cor_hover_text_button_newsletter_footer'); ?>;
        background-color: <?php echo get_theme_mod('up_cor_hover_button_newsletter_footer'); ?>;
        border-color: <?php echo get_theme_mod('up_cor_hover_button_newsletter_footer'); ?>;
    }

    .footer__copyright {
        background-color: <?php echo get_theme_mod('up_cor_fundo_copyright'); ?>;
    }

    .footer__copyright .wrapper ul li a {
        color: <?php echo get_theme_mod('up_cor_link_copyright'); ?>;
    }

    .footer__copyright .wrapper ul li a:hover {
        color: <?php echo get_theme_mod('up_cor_hover_link_copyright'); ?>;
    }

/* end Footer */

</style>

<!-- Scripts -->
<script src=" <?php echo get_template_directory_uri(); ?>'/node_modules/bootstrap/dist/js/bootstrap.min.js' "></script>
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