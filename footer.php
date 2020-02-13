

<footer class="footer">
    <section class="footer__main">
        <div class="container">
            <div class="row">

                <!-- Column About -->
                <div class="col-md-3 footer__main__about">

                    <img src="<?php echo get_template_directory_uri() ?> './public/images/logo-footer.png' " alt="" class="img-fluid">

                    <p class="text">With over 10 years of experience in construction, we partner with owners and design professionals to build high-quality projects.</p>

                    <ul class="redeSocial">
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
                    <p>
                        <i class="far fa-clock"></i>
                        Seg à Sex - 9h às 18h
                    </p>
                    <p>
                        <i class="fas fa-map-marker-alt"></i>
                        Av. Nações Unidas - 14261
                    </p>
                    <p>
                        <i class="fas fa-phone"></i>
                        (11) 4130-3275
                    </p>
                    <a href="mailto:contato@upsites.digital" class="email">
                        <i class="far fa-envelope"></i>
                        contato@upsites.digital
                    </a>
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
                <p class="copy order-2 order-md-1">Copyright &copy; <?php echo date('Y'); ?> - <span style="color:orangered;">Upsites</span></p>

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

    console.log(menu);

</script>

</body>
</html>