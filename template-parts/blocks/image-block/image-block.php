<?php
/**
 * Block Name: Image Block
 */
$image_block = get_field('image_block');
$full_width = get_field('full_width');

?>
<div id="image-block">
    <?php if ($full_width === true) { echo "<div class='container'>"; } ?>
        <img src="<?php echo $image_block['url']; ?>" alt="<?php echo $image_block['alt']; ?>">
    <?php echo "</div>" ?>
</div>