<?php
/**
 * Block Name: Text Image
 */
$image_position = get_field('image_position');
$image = get_field('image');
$content = get_field('content');
$show_button = get_field('show_button');
$button_text = get_field('button_text');
$button_link = get_field('button_link');

?>

<section id="text-image"> 
    <div class="row">   
        <div class="container d-flex flex-wrap
            <?php if ($image_position === 'right') { ?>
                flex-row-reverse
            <?php } ?>">
            <div class="col-12 col-md-6 d-flex align-content-center">
                <img src="<?php echo $image['url']; ?>">
            </div>
            <div class="col-12 col-md-6">
                <?php echo $content; ?>
                <a href="<?php echo $button_link; ?>" class="btn mt-5"><?php echo $button_text; ?></a>
            </div>
        </div>
    </div>
</section>