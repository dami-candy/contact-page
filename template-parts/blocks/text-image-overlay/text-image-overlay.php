<?php
/**
 * Block Name: Text Image Overlay
 */
$image_position = get_field('image_position');
$image = get_field('image');
$content = get_field('content');
$content_position = get_field('content_position');
$show_button = get_field('show_button');
$button_text = get_field('button_text');
$button_link = get_field('button_link');

?>

<section id="text-image-overlay"> 
    <div class="row">   
        <div class="container d-flex flex-wrap flex-column
            <?php if ($image_position === 'right') { ?>
                flex-row-reverse
            <?php } ?>">
            <?php if ($content_position === 'top') { ?>
                <div class="col-12 inner-container top">
                    <?php echo $content; ?>
                </div>
            <?php } ?>
            <div class="col-12 d-flex align-content-center justify-content-center">
                <img src="<?php echo $image['url']; ?>">
            </div>
            <?php if ($content_position === 'bottom') { ?>
                <div class="col-12 inner-container bottom">
                    <?php echo $content; ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>