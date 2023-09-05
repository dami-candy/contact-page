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
    <header id="header" class="hfeed">
        <div class="container flex-wrap">
            <div class="logo-div">
                <a href="/#">
                    <img class="header-logo " src="<?php bloginfo('template_url'); ?>/images/spore-buddies.png" alt="Spore Buddies Logo" width="240px" height="60px">
                </a>
            </div>
            <div class="phone"><a href="tel:0800 069 9269"><img src="<?php bloginfo('template_url'); ?>/images/phone.png" alt="Phone icon" width="18px" height="18px">0800 069 9269</a></div>
            <div class="email"><a href="mailto:hello@sporebuddies.com"><img src="<?php bloginfo('template_url'); ?>/images/email.png" alt="Phone icon" width="18px" height="18px">hello@sporebuddies.com</a></div>
            <div class="search d-flex align-items-center"> 
                <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                    <img class="mr-2" src="<?php bloginfo('template_url'); ?>/images/search.png" alt="Search icon" width="14px" height="14px">
                    <label>
                        <span class="screen-reader-text">Search for:</span>
                        <input type="search" class="search-field" placeholder="Search …" value="" name="s" title="Search for:" />
                    </label>
                    <input type="submit" class="d-none" value="Search" />
                </form>
            </div>
            <div class="w-100 mt-3">
                <nav class="justify-content-md-center">
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