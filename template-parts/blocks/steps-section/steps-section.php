<?php
/**
 * Block Name: Steps Section
 */
$title = get_field($title);
$image_position = get_field('image_position');

?>

<section id="steps-section">    
    <div class="container">
        <div class="row">
            <div class="col-12"><h2><?php echo $title; ?></h2></div>
            <div class="d-flex flex-wrap justify-content-between justify-content-md-start">
                <?php

                // Check if rows exist.
                if (have_rows('steps')) {

                    // Loop through rows.
                    while (have_rows('steps')) : the_row();

                        // Load sub field values.
                        $content = get_sub_field('content');
                        $show_button = get_sub_field('show_button');
                        $button_text = get_sub_field('button_text');
                        $button_link = get_sub_field('button_link');
                        $alignment = get_sub_field('alignment');
                        $image = get_sub_field('image');
                        $image_url = get_sub_field('image_url');

                        // Do something...
                        ?>
                        <div class="step col-5 col-md-4 mb-5">
                            <div class="content">
                                <?php if ($image && $image_position === 'top') { ?>
                                    <div class="image"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></div>
                                <?php } ?>
                                <div class="mt-4 <?php if($image === false) {echo 'arrow'; } ?>"><?php echo $content; ?></div>
                                <?php if ($show_button) { ?>
                                    <a href="<?php echo $button_link; ?>"><div class="btn mt-3 
                                    <?php echo $button_text; ?></div></a>
                                <?php } ?>
                                <?php if ($image && $image_position === 'bottom') { ?>
                                    <div class="image"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></div>
                                <?php } ?>
                            </div>
                        </div>

                        <?php

                    // End loop.
                    endwhile;

                } else {
                    // No value.
                    // You can add something here to handle the case when there are no rows.
                }
                ?>
            </div>
        </div>
    </div>
</section>


