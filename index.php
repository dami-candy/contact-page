<?php 
    get_header(); ?>
   
    <?php if(have_posts()): ?>
        <main>
            <?php while(have_posts()):the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        </main>
    <?php endif; ?>
<?php get_footer();