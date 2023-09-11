<?php
/**
 * Block Name: CTA Section
 */

$content = get_field('content');
?>

<section id="cta-section">
    <div class="container py-2">
        <div class="row my-5">
            <?php echo $content; ?>
        </div>
    </div>
</section>