<?php 
    get_header();
?>

<div class="container">
    <div class="single-img">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="card__image" class="card__image" width="600">
    </div>
    <?php
        while(have_posts()){
            the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        <?php }
    ?>
    <div class="post-navigation d-flex flex-wrap justify-content-between">
        <div class="previous-post col-4 text-end">
            <?php
            $prev_post = get_previous_post();
            if (!empty($prev_post)) :
                ?>
                <a class="float-right" href="<?php echo get_permalink($prev_post->ID); ?>">
                    <span class="nav-label justify-content-end">Previous Post</span>
                    <?php echo esc_html($prev_post->post_title); ?>
                </a>
            <?php endif; ?>
        </div>
        <div class="next-post col-4 text-start">
            <?php
            $next_post = get_next_post();
            if (!empty($next_post)) :
                ?>
                <a href="<?php echo get_permalink($next_post->ID); ?>">
                    <span class="nav-label">Next Post</span>
                    <?php echo esc_html($next_post->post_title); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php
    get_footer();
?>