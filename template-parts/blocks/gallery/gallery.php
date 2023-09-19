<?php
/**
 * Block Name: Gallery
 */
?>
<section id="gallery">
    <div class="slider gallery">
        <?php

        // Check rows existexists.
        if( have_rows('gallery') ):

            // Loop through rows.
            while( have_rows('gallery') ) : the_row();

                // Load sub field value.
                $image = get_sub_field('image');

                // Do something...
                ?>
                    <div class="slider">
                        <div class="container py-2">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
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

