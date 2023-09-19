<?php /* Template Name: Full Width Template*/ ?>

<?php get_header();?>
<div class="container"><h1><?php the_title(); ?></h1></div>

<?php if(have_posts()): ?>
    <?php while(have_posts()):the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer();?>