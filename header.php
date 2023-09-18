<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width" />
        <meta name="description" content="<?php if ( is_single() ) { echo esc_html( wp_strip_all_tags( get_the_excerpt(), true ) ); } else { bloginfo( 'description' ); } ?>" />
        <meta name="keywords" content="<?php echo esc_html( implode( ', ', wp_get_post_tags( get_the_ID(), array( 'fields' => 'names' ) ) ) ); ?>" />
        <meta property="og:image" content="<?php if ( is_single() && has_post_thumbnail() ) { the_post_thumbnail_url( 'full' ); } elseif ( has_site_icon() ) { echo esc_url( get_site_icon_url() ); } ?>" />
        <meta name="twitter:card" content="photo" />
        <meta name="twitter:site" content="<?php bloginfo( 'name' ); ?>" />
        <meta name="twitter:title" content="<?php if ( is_single() ) { the_title(); } else { bloginfo( 'name' ); } ?>" />
        <meta name="twitter:description" content="<?php if ( is_single() ) { echo esc_html( wp_strip_all_tags( get_the_excerpt(), true ) ); } else { bloginfo( 'description' ); } ?>" />
        <meta name="twitter:image" content="<?php if ( is_single() && has_post_thumbnail() ) { the_post_thumbnail_url( 'full' ); } elseif ( has_site_icon() ) { echo esc_url( get_site_icon_url() ); } ?>" />
        <meta name="twitter:url" content="<?php if ( is_single() ) { esc_url( the_permalink() ); } else { echo esc_url( home_url() ) . '/'; } ?>" />
        <meta name="twitter:widgets:theme" content="light" />
        <meta name="twitter:widgets:link-color" content="#007acc" />
        <meta name="twitter:widgets:border-color" content="#fff" />
        <link rel="canonical" href="<?php echo esc_url( 'https://' . $_SERVER["HTTP_HOST"] . parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ) ); ?>" />
    </head>
    <body <?php body_class();?>>
    <div class="slider banner-slider">
        <div class="banner text-center py-2"><p><?php the_field('banner_text', 'option'); ?></p></div>
        <div class="banner text-center py-2"><p><?php the_field('banner_text_alt', 'option'); ?></p></div>
    </div>
    <header id="header" class="hfeed">
        <div class="container flex-wrap">
            <div class="logo-div">
                <a href="<?php echo home_url(); ?>/#">
                    <img class="header-logo" src="<?php bloginfo('template_url'); ?>/images/spore-buddies.png" alt="Spore Buddies Logo" width="240px" height="60px">
                </a>
            </div>
            <div class="content d-flex">
                <a href="tel:0800 069 9269" class="d-flex align-items-center phone"><img src="<?php bloginfo('template_url'); ?>/images/phone.png" alt="Phone icon" width="18px" height="18px"><span class="d-none d-xl-flex">0800 069 9269</span></a>
                <a href="mailto:hello@sporebuddies.com" class="d-flex align-items-center email ms-xl-5"><img src="<?php bloginfo('template_url'); ?>/images/email.png" alt="Phone icon" width="18px" height="18px"><span class="d-none d-xl-flex">hello@sporebuddies.com</span></a>

                <div class="search d-flex align-items-center ms-xl-5"> 
                    <div>
                        <form role="search" method="get" class="search-form d-none d-md-block" action="<?php echo home_url( '/' ); ?>">
                            <img class="mr-2" src="<?php bloginfo('template_url'); ?>/images/search.png" alt="Search icon" width="14px" height="14px">
                            <label>
                                <span class="screen-reader-text">Search for:</span>
                                <input type="search" class="search-field" placeholder="Search …" value="" name="s" title="Search for:" />
                            </label>
                            <!-- <input type="submit" class="d-none" value="Search" /> -->
                        </form>
                    </div>
                    <div class="account-details ms-4 d-none d-md-block">
                        <a href="<?php echo home_url(); ?>/basket"><img src="<?php bloginfo('template_url'); ?>/images/cart.svg" alt="Cart icon" width="22px" height="22px"></a>
                        <a class="ms-2" href="<?php echo home_url(); ?>/my-account"><img src="<?php bloginfo('template_url'); ?>/images/account.png" alt="Phone icon" width="17px" height="17px"></a>
                    </div>
                    <div class="hamburger-menu d-md-none ms-4">
                        <div class="bar-top"></div>
                        <div class="bar-middle"></div>
                        <div class="bar-bottom"></div>
                    </div>
                </div>
            </div>
            
            
            
            <div class="w-100 d-none d-md-block mt-3 header-div">
                <div class="container mob-account-details justify-content-between my-2 d-none">
                    <div class="search">
                        <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                            <img class="mr-2" src="<?php bloginfo('template_url'); ?>/images/search.png" alt="Search icon" width="14px" height="14px">
                            <label>
                                <span class="screen-reader-text">Search for:</span>
                                <input type="search" class="search-field" placeholder="Search …" value="" name="s" title="Search for:" />
                            </label>
                            <!-- <input type="submit" class="d-none" value="Search" /> -->
                        </form>
                    </div>
                    <div class="d-flex">
                        <a href="<?php echo home_url(); ?>/basket"><img src="<?php bloginfo('template_url'); ?>/images/cart.svg" alt="Cart icon" width="22px" height="22px"></a>
                        <a class="ms-2" href="<?php echo home_url(); ?>/my-account"><img src="<?php bloginfo('template_url'); ?>/images/account.png" alt="Phone icon" width="17px" height="17px"></a>
                    </div>
                </div>
                <nav class="justify-content-center d-none d-lg-block">
                    <?php
                        wp_nav_menu( array( 
                        'theme_location' => 'main-menu', 
                        'container_class' => 'main-menu' ) ); 
                    ?>
                </nav>
            </div>

        </div>            
    </header>

<main id="content" role="main">