<?php
/**
 * Block Name: Shop Banner
 */

$content = get_field('content');
$show_button = get_field('show_button');
$button_text = get_field('button_text');
$button_link = get_field('button_link');

$image = get_field('image');
$image_width = get_field('image_width');

$background = get_field('background');


?>

<section id="shop-banner">
    <div class="container">
        <div class="row mb-5 px-5 py-2 flex-column-reverse flex-md-row">
            <div class="text col-md-6 p-md-5">
                <?php echo $content; ?>
                <?php if ($show_button) { ?>
                    <a href="<?php echo home_url(); ?>/"<?php echo $button_link; ?>"><div class="btn my-3"><?php echo $button_text; ?></div></a>
                <?php } ?>
            </div>
            <div class="col-md-6 text-center">
                <img src="<?php echo $image['url']; ?>" class="img-responsive" style="width:<?php echo $image_width; ?>px" alt="<?php echo $image['alt']?>">
            </div>
        </div>
    </div>
</section>