<?php /* Template Name: Magic Journey Template*/ 

$usp_title = get_field('usp_title');
$usp_1 = get_field('usp_1');
$usp_2 = get_field('usp_2');
$usp_3 = get_field('usp_3');
$usp_image = get_field('usp_image');

$two_column_content = get_field('two_column_content');
$two_column_1_content = get_field('two_column_1_content');
$two_column_1_image = get_field('two_column_1_image');

$two_column_2_content = get_field('two_column_2_content');
$two_column_2_image = get_field('two_column_2_image');


$selection_text = get_field('selection_text');
$selection_header_1 = get_field('selection_header_1');
$selection_content_1 = get_field('selection_content_1');
$selection_image_1 = get_field('selection_image_1');

$selection_header_2 = get_field('selection_header_2');
$selection_content_2 = get_field('selection_content_2');
$selection_image_2 = get_field('selection_image_2');

$selection_header_3 = get_field('selection_header_3');
$selection_content_3 = get_field('selection_content_3');
$selection_image_3 = get_field('selection_image_3');



?>

<?php get_header();?>
<div class="container">
    <h1><?php the_title(); ?></h1>
    <div class="row mx-md-5">
        <h2 class="title text-center mb-5"><?php echo $usp_title; ?></h2>
        <div class="col-12 col-md-6">
            <div class="mt-5"><?php echo $usp_1; ?></div>
            <div class="mt-5"><?php echo $usp_2; ?></div>
            <div class="mt-5"><?php echo $usp_3; ?></div>
        </div>
        <div class="col-12 col-md-6">
            <img src="<?php echo $usp_image['url']; ?>" alt="<?php echo $usp_image['alt']; ?>">
        </div>
        <h3 class="text-center my-5">Agaricus campestris (Common Field Mushroom)</h3>
    </div>
    <div class="row two-column justify-content-between flex-column-reverse flex-md-row">
        <div class="col-md-6 col-12">
            <?php echo $two_column_1_content; ?>
        </div>
        <div class="col-md-5 col-12">
            <img src="<?php echo $two_column_1_image['url']; ?>" alt="<?php echo $two_column_1_image['alt']; ?>">
        </div>
    </div>
    <div class="row two-column justify-content-between flex-row-reverse mt-5">
        <div class="col-md-6 col-12">
            <?php echo $two_column_2_content; ?>
        </div>
        <div class="col-md-5 col-12">
            <img src="<?php echo $two_column_2_image['url']; ?>" alt="<?php echo $two_column_2_image['alt']; ?>">
        </div>
    </div>
    <div><?php echo $two_column_content;?></div>
    <hr>
</div>

<?php include get_template_directory() . '/template-parts/blocks/text-image-overlay/text-image-overlay.php'; ?>


<section id="selection">
    <div class="container">
        <div class="text">
            <?php echo $selection_text;?>
        </div>
        <div class="row justify-content-between">
            <div class="col-12 col-md-7">
                <h2><?php echo $selection_header_1;?></h2>
                <div><?php echo $selection_content_1;?></div>
            </div>
            <div class="col-12 col-md-4">
                <img src="<?php echo $selection_image_1['url']; ?>" alt="<?php echo $selection_image_1['alt']; ?>">
            </div>
            <div class="col-12 col-md-7">
                <h2><?php echo $selection_header_2;?></h2>
                <div><?php echo $selection_content_2;?></div>
            </div>
            <div class="col-12 col-md-4">
                <img src="<?php echo $selection_image_2['url']; ?>" alt="<?php echo $selection_image_2['alt']; ?>">
            </div>
            <div class="col-12 col-md-7">
                <h2><?php echo $selection_header_3;?></h2>
                <div><?php echo $selection_content_3;?></div>
            </div>
            <div class="col-12 col-md-4">
                <img src="<?php echo $selection_image_3['url']; ?>" alt="<?php echo $selection_image_3['alt']; ?>">
            </div>
        </div>
    </div>
</section>

<?php include get_template_directory() . '/template-parts/blocks/steps-section/steps-section.php'; ?>


<section id="content">
    <div class="container">
        <div class="row">
            <div style="text-align:center">
                <h2>Need Help?</h2>
                <p>If you ever got stuck with creating your print, just send me a message and we will be there to help.</p>
                <a href="<?php echo home_url(); ?>/contact"><div class="btn mt-3">Get in Touch</div></a>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>