<?php
/**
 * Block Name: Slider
 */
?>
<section id="slider">
    <div class="slider slider-1">
        <?php

        // Check rows existexists.
        if( have_rows('slides') ):

            // Loop through rows.
            while( have_rows('slides') ) : the_row();

                // Load sub field value.
                $content = get_sub_field('content');
                $image = get_sub_field('image');
                $button_text = get_sub_field('button_text');
                $button_link = get_sub_field('button_link');
                $show_button = get_sub_field('show_button');
                $button_colour = get_sub_field('button_colour');
                $button_border = get_sub_field('button_border');

                // Do something...
                ?>
                    <div class="slider" style="background-image: url('<?php echo esc_url( $image['url'] ); ?>');">
                        <div class="container py-2">
                            <div class="content w-50"><?php echo $content; ?></div>

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

