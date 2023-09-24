<?php
/**
 * Block Name: Video Section
 */
$video_title= get_field('video_title');
$video_url = get_field('video_url');

?>

<section id="video-section">
    <div class="container py-md-5">
        <h2 class="text-center">Coinbase Tutorial</h2>
        <iframe src="<?php echo $video_url; ?>" frameborder="0" allowfullscreen></iframe>
    </div>
</section>