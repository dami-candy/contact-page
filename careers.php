<?php /* Template Name: Careers Template*/ 

?>

<?php get_header();?>
<div class="container">
    <h1><?php the_title(); ?></h1>
    <div class="careers">
        <?php
        $args = array(
            'post_type' => 'careers',
            'posts_per_page' => 3
        );
        $the_query = new WP_Query( $args ); ?>

        <?php if ( $the_query->have_posts() ) : ?>

            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <?php
                $title = get_post_meta( get_the_ID(), 'title', true );
                $requirements = get_post_meta( get_the_ID(), 'requirements', true );
                $duties = get_post_meta( get_the_ID(), 'duties', true );
                $hours = get_post_meta( get_the_ID(), 'hours', true );
                $starting_wage = get_post_meta( get_the_ID(), 'starting_wage', true );
                $probation = get_post_meta( get_the_ID(), 'probation', true ); 
                $location = get_post_meta( get_the_ID(), 'location', true ); 
                $time = get_post_meta( get_the_ID(), 'time', true ); 
                $email = get_post_meta( get_the_ID(), 'time', true ); 
            ?>

            <div class="row">
                <div>
                    <div class="career-div">
                        <img src="<?php echo the_post_thumbnail_url()?>">
                        <div class="d-flex flex-wrap justify-content-between mt-4">
                            <div class="col-md-8 col-12 d-flex align-self-end"><h2 class="m-0"><?php the_title(); ?></h2></div>
                            <div class="col-md-2 col-12 mt-3 mt-md-0"><a href="mailto:<?php $email; ?>" class="btn">Email Us</a></div>
                        </div>
                        <div class="d-flex flex-wrap justify-content-between">
                            <div class="col-md-7 col-12">
                                <?php if ($requirements) { ?>
                                    <p class="sub-header">Requirements</p>
                                    <div><?php echo $requirements; ?> </div>
                                <?php } ?>
                                <?php if ($duties) { ?>
                                    <p class="sub-header">Duties</p>
                                    <div><?php echo $duties; ?> </div>
                                <?php } ?>
                                
                            </div>
                            <div class="col-md-4 col-12 d-flex flex-column align-self-md-end">
                                <?php if ($hours) { ?>
                                    <p class="sub-header">Hours</p>
                                    <div><?php echo $hours; ?> </div>
                                <?php } ?>
                                <?php if ($starting_wage) { ?>
                                    <p class="sub-header">Starting Wage</p>
                                    <div><?php echo $starting_wage; ?> </div>
                                <?php } ?>
                                <?php if ($probation) { ?>
                                    <p class="sub-header">Probation and Wage Review</p>
                                    <div><?php echo $probation; ?> </div>
                                <?php } ?>
                            </div>
                            <div class="col-12">
                                <div class="d-flex flex-wrap mt-4">
                                    <?php if ($location) { ?>
                                        <div class="col-md-2 col-12 icon">
                                            <img src="<?php bloginfo('template_url'); ?>/images/location.png" alt="Location Icon" width="20" height="20">
                                            <p class="ms-2"><?php echo $location; ?></p>
                                        </div>
                                    <?php } ?>
                                    <?php if ($time) { ?>
                                        <div class="col-md-2 col-12 icon">
                                            <img src="<?php bloginfo('template_url'); ?>/images/clock.png" alt="Location Icon" width="20" height="20">
                                            <p class="ms-2"><?php echo $time; ?></p>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

        <?php endif; ?>
    </div>
</div>

<?php if(have_posts()): ?>
	<main>
		<?php while(have_posts()):the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	</main>
<?php endif; ?>

<?php get_footer();?>
