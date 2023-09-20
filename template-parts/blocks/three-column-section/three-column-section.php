<?php
/**
 * Block Name: Three Column Section
 */

$full_width = get_field('full_width');
$title = get_field('title');
$divider = get_field('divider');
$alignment = get_field('alignment');


$image = get_field('image'); 
$content = get_field('content');

$image_2 = get_field('image_2'); 
$content_2 = get_field('content_2');

$image_3 = get_field('image_3'); 
$content_3 = get_field('content_3');

$background_colour = get_field('background_colour');

$image_width = get_field('image_width');
$image_height = get_field('image_height');


?>

<section id="three-column-section" style="background:<?php echo $background_colour; ?>">
    <div class="container"> 
        <?php if (!$full_width) { echo '<div class="inner-container">'; } ?>
            <div class="row mb-5">
                <div class="mb-5"><?php echo $title; ?> </div>
                <div class="col-md-4" style="text-align:<?php echo $alignment; ?>">
                <img src="<?php echo $image['url']; ?>" class="img-responsive mb-4" style="width: <?php echo $image_width; ?>px; height: <?php echo $image_height; ?>px;" alt="Image">
                    <p><?php echo $content; ?></p>
                </div>
                <div class="col-md-4 <?php if($divider === 'divider') { echo "divider"; } ?>" style="text-align:<?php echo $alignment; ?>">
                <img src="<?php echo $image_2['url']; ?>" class="img-responsive mb-4" style="width: <?php echo $image_width; ?>px; height: <?php echo $image_height; ?>px;" alt="Image">
                    <p><?php echo $content_2; ?></p>
                </div>
                <div class="col-md-4" style="text-align:<?php echo $alignment; ?>">
                <img src="<?php echo $image_3['url']; ?>" class="img-responsive mb-4" style="width: <?php echo $image_width; ?>px; height: <?php echo $image_height; ?>px;" alt="Image">
                    <p><?php echo $content_3; ?></p>
                </div>
            </div>
        <?php if (!$full_width) { echo '</div'; } ?>
    </div>
</section>