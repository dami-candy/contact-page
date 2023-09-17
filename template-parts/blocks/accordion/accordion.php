<?php
/**
 * Block Name: Accordion
 */

$content = get_field('content');
$show_link = get_field('show_link');
$link_text = get_field('link_text');
$link_url = get_field('link_url');
?>

<section id="accordion">
    <div class="container py-2">
        <div class="row">
            <div class="acc-container">
                <?php echo $content; ?>
                <?php
                if (have_rows('accordion')):
                    $counter = 1; // Initialize the counter variable

                    // Loop through rows.
                    while (have_rows('accordion')) : the_row();

                        // Load sub field value.
                        $header = get_sub_field('header');
                        $panel = get_sub_field('panel');

                        // Create a unique base ID based on the post ID and counter variable.
                        $base_id = 'acc_' . get_the_ID() . '_';

                        // Append a random number or any other unique identifier to the base ID.
                        $unique_id = $base_id . wp_rand(1, 1000); // You can adjust the range as needed.

                        // Do something...
                        ?>
                        <div>
                            <input type="radio" name="acc" id="<?php echo esc_attr($unique_id); ?>">
                            <label for="<?php echo esc_attr($unique_id); ?>"><?php echo $header; ?></label>
                            <div class="acc-body">
                                <?php echo $panel; ?>
                            </div>
                        </div>
                        <?php

                        // Increment the counter for the next iteration
                        $counter++;

                    // End loop.
                    endwhile;

                // No value.
                else :
                    // Do something...
                endif;
                ?>
            <?php if ($show_link) { ?>
                <div><a href="<?php echo $link_url;?>"><?php echo $link_text;?></a></div>
            <?php } ?>
            </div>
        </div>
    </div>
</section>