<?php get_header(); ?>
<section id="404">
    <div class="container">
        <article id="post-0" class="post not-found">
        <header class="header">
        <div class="title">
            <h1 class="entry-title" itemprop="name"><?php esc_html_e( '404', 'generic' ); ?></h1>
            <img class="header-logo" src="<?php bloginfo('template_url'); ?>/images/favicon-logo.png" alt="Spore Buddies Logo" width="80px" height="80px">
        </div>
        <h2>Page not found</h2>
        </header>
        <div class="entry-content" itemprop="mainContentOfPage">
            <p><?php esc_html_e( "Oops! The page you're searching for seems to have gone on a little adventure. How about heading back to the homepage?", 'generic' ); ?></p>
            <a class="btn" href="<?php home_url(); ?>/#">Back to Home</a> 
        </div>
        </article>
    </div>
</section>
<?php get_footer(); ?>