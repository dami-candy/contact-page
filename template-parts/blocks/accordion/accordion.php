<?php
/**
 * Block Name: Accordion
 */

$content = get_field('content');
?>

 <section id="accordion">
 <div class="container py-2 ">
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

                    // Create unique IDs for input and label elements based on the counter variable.
                    $input_id = 'acc' . $counter;
                    $label_id = 'label' . $counter;
                    
                    // Do something...
                    ?>
                    <div>
                        <input type="radio" name="acc" id="<?php echo esc_attr($input_id); ?>">
                        <label for="<?php echo esc_attr($input_id); ?>"><?php echo $header; ?></label>
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
        </div>
    </div>
 </div>
</section>