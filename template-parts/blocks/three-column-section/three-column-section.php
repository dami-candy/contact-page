<?php
/**
 * Block Name: Three Column Section
 */

$title = get_field('title');
$divider = get_field('divider');
$alignment = get_field('alignment');


$image = get_field('image'); 
$image_width = get_field('image_width');
$content = get_field('content');

$image_2 = get_field('image_2'); 
$image_2_width = get_field('image_2_width');
$content_2 = get_field('content_2');

$image_3 = get_field('image_3'); 
$image_3_width = get_field('image_3_width');
$content_3 = get_field('content_3');

$background_colour = get_field('background_colour');
?>

<section id="three-column-section" style="background:<?php echo $background_colour; ?>">
    <div class="container">
        <div class="row mb-5">
            <div class="mb-5"><?php echo $title; ?> </div>
            <div class="col-md-4" style="text-align:<?php echo $alignment; ?>">
                <img src="<?php echo $image['url']; ?>" class="img-responsive" style="width:<?php echo $image_width; ?>px" alt="Image">
                <p><?php echo $content; ?></p>
            </div>
            <div class="col-md-4 <?php if($divider === 'divider') { echo "divider"; } ?>" style="text-align:<?php echo $alignment; ?>">
                <img src="<?php echo $image_2['url']; ?>" class="img-responsive" style="width:<?php echo $image_2_width; ?>px" alt="Image">
                <p><?php echo $content_2; ?></p>
            </div>
            <div class="col-md-4" style="text-align:<?php echo $alignment; ?>">
                <img src="<?php echo $image_3['url']; ?>" class="img-responsive" style="width:<?php echo $image_3_width; ?>px" alt="Image">
                <p><?php echo $content_3; ?></p>
            </div>
        </div>
    </div>
</section>