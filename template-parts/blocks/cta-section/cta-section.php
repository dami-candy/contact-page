<?php
/**
 * Block Name: CTA Section
 */

$content = get_field('content');
?>

<section id="cta-section">
    <div class="container py-2">
        <div class="row my-5 justify-content-center">
            <div class="col-12 col-md-6">
                <?php echo $content; ?>
            </div>
            <div class="col-12 col-md-2">
                <a href="tel:0800 069 926"><div class="btn ms-3 mt-2">Call Us Now</div></a>
            </div>
        </div>
    </div>
</section>