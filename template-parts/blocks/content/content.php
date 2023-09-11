<?php
/**
 * Block Name: Content
 */

$content = get_field('content');
$show_button = get_field('show_button');
$button_text = get_field('button_text');
$button_link = get_field('button_link');

?>

<section id="content">
    <div class="container">
        <div class="row">
            <div>
                <?php echo $content; ?>
                <?php if ($show_button) { ?>
                    <a href="<?php echo $button_link; ?>"><div class="btn mt-3"><?php echo $button_text; ?></div></a>
                <?php } ?>
            </div>
        </div>
    </div>
</section>