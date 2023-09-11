</main>

<footer>
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="newsletter d-flex flex-wrap mb-5">
                    <div class="col-12 col-sm-6 col-md-4">
                        <h2>Subscribe To Our Newsletter To Get 10% Off</h2>
                    </div>
                    <div class="col-12 col-sm-6 col-md-8">
                        <?php echo do_shortcode('[contact-form-7 id="95b2eb3" title="Footer Newsletter"]'); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="logo-div mb-3">
                        <a href="/#">
                            <img class="header-logo" src="<?php bloginfo('template_url'); ?>/images/spore-buddies.png" alt="Spore Buddies Logo" width="240px" height="60px">
                        </a>
                    </div>
                    <div class="contact-info">
                        <a href="tel:08000699269">
                            <div class="d-flex align-items-center">
                                <img src="<?php bloginfo('template_url'); ?>/images/footer-phone.png" alt="Phone Icon" width="17px" height="17px">
                                <p class="mb-0 ms-2">0800 069 9269</p>
                            </div>
                            <small>Call UK free phone (8.30am-6pm)</small>
                        </a>
                        <a href="mailto:hello@sporebuddies.com">
                            <div class="d-flex align-items-center mt-4">
                                <img src="<?php bloginfo('template_url'); ?>/images/footer-email.png" alt="Email Icon" width="17px" height="17px">
                                <p class="mb-0 ms-2">hello@sporebuddies.com</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-2">
                    <strong>Useful Links</strong>
                    <nav class="justify-content-center mt-3">
                        <?php
                            wp_nav_menu( array( 
                            'theme_location' => 'useful-links', 
                            'container_class' => 'useful-links' ) ); 
                        ?>
                    </nav>
                </div>
                <div class="col-md-2">
                    <strong>About Us</strong>
                    <nav class="justify-content-center mt-3">
                        <?php
                            wp_nav_menu( array( 
                            'theme_location' => 'about-menu', 
                            'container_class' => 'about-menu' ) ); 
                        ?>
                    </nav>
                </div>
            </div>
        </div>

       
      
        <div class="copyright mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 d-flex mt-3 justify-content-between">
                        <div class="d-flex">
                            <p class="me-3"><?php the_field('copyright_text', 'option'); ?></p>
                            <nav class="justify-content-center d-none d-lg-block">
                                <?php
                                    wp_nav_menu( array( 
                                    'theme_location' => 'copyright-menu', 
                                    'container_class' => 'copyright-menu' ) ); 
                                ?>
                            </nav>
                        </div>
                        <ul class="social-icons d-flex">
                            <?php
                                if (have_rows('socials', 'option')) :
                                    while (have_rows('socials', 'option')) : the_row(); ?>
                                        <li>
                                            <a href="<?php the_sub_field('link'); ?>" target="_blank" rel="noopener" aria-label="<?php echo $icon['alt']; ?>">
                                                <?php $icon = get_sub_field('icon', 'option');
                                                        if ($icon) : ?>
                                                    <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" width="20" height="20">
                                                <?php endif; ?>
                                            </a>
                                        </li>
                                <?php
                                    endwhile;
                                    endif; 
                                ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
<!-- end footer -->
        <?php wp_footer(); ?>
    </body>
</html>