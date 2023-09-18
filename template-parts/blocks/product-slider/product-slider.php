<?php
/**
 * Block Name: Product Slider
 */
$product_title = get_field('product_title');
?>
<section id="product-slider">
    <div class="title"><?php echo $product_title; ?></div>
    <div class="slider product-slider">
        <?php

        // Check rows existexists.
        if( have_rows('product_slides') ):

            // Loop through rows.
            while( have_rows('product_slides') ) : the_row();

                // Load sub field value.
                $content = get_sub_field('content');
                $title = get_sub_field('title');
                $image = get_sub_field('image');
                $button_text = get_sub_field('button_text');
                $button_link = get_sub_field('button_link');
                $show_button = get_sub_field('show_button');
                $button_colour = get_sub_field('button_colour');
                $button_border = get_sub_field('button_border');

                // Do something...
                ?>
                    <div class="slider">
                        <div class="container">
                            <div class="row">
                                <div class="content d-flex flex-wrap">
                                    <div class="col-12 col-md-8">
                                        <h2><?php echo $title; ?></h2>
                                        <span class="branding d-flex">by
                                            <img class="ms-2" src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Email Icon" width="115px" height="22px">
                                        </span>
                                    </div>
                                    <div class="col-12 col-md-4 d-none d-md-block text-end">
                                        <a class="btn">Shop Now</a>
                                    </div>
                                    <div class="col-12 col-md-10 mt-3 info">
                                        <?php echo $content; ?>
                                    </div>
                                    <div class="col-12 col-md-4 d-block d-md-none">
                                        <a class="btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <img class="slide-img" src="<?php echo ( $image['url'] ); ?>">
                            <?php if($show_button) { ?>
                                <a href="<?php echo $button_link; ?>"><div style="background: <?php echo $button_colour; ?>; border: 3px solid <?php echo $button_border; ?>" class="btn mt-3"><?php echo $button_text; ?></div></a>
                            <?php } ?>
                        </div>
                    </div>
                <?php 

            // End loop.
            endwhile;

        // No value.
        else :
            // Do something...
        endif;
        ?>
    </div>
</section>

