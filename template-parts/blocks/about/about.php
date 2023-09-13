<?php
/**
 * Block Name: About
 */

$content = get_field('content');
$show_button = get_field('show_button');
$button_text = get_field('button_text');
$button_link = get_field('button_link');
$alignment = get_field('alignment');
$image = get_field('image');
$image_url = get_field('image_url');

$usp_icon_1 = get_field('usp_icon_1');
$usp_text_1 = get_field('usp_text_1');

$usp_icon_2 = get_field('usp_icon_2');
$usp_text_2 = get_field('usp_text_2');

$usp_icon_3 = get_field('usp_icon_3');
$usp_text_3 = get_field('usp_text_3');

?>

<section id="about">
    <div class="mask row mt-5 py-5">
        <div class="container d-flex justify-content-between mt-5 flex-wrap">
            <div class="col-12 col-md-4">
            <p>Our story</p>
            <h2>About SporeBuddies.com</h2>
            </div>
            <div class="col-12 col-md-7 usp d-flex justify-content-md-between flex-column flex-md-row">
                <div class="text-center mb-3">
                    <img src="<?php echo $usp_icon_1['url']; ?>"  alt="<?php echo $usp_icon_1['alt']; ?>">
                    <p><?php echo $usp_text_1; ?></p>
                </div>
                <div class="text-center mb-3">
                    <img src="<?php echo $usp_icon_2['url']; ?>"  alt="<?php echo $usp_icon_2['alt']; ?>">
                    <p><?php echo $usp_text_2; ?></p>
                </div>
                <div class="text-center mb-3">
                    <img src="<?php echo $usp_icon_3['url']; ?>"  alt="<?php echo $usp_icon_3['alt']; ?>">
                    <p><?php echo $usp_text_3; ?></p>
                </div>
            </div>
        </div>
        <div class="divider">
    </div>
    </div>

    <div class="content">
        <div class="container">
            <div class="story d-flex flex-wrap">
                <div class="col-12 col-md-6 p-1 pe-4">
                    <img src="<?php echo ( $image['url'] ); ?>">
                </div>
                <div class="col-12 col-md-6 mt-5">
                    <h2>Our Story</h2>
                    <p>
                    Back when I started to study mycology, good, clean Psilocybe Cubensis spore samples were difficult to come by. Now there are more vendors these days. But still, clean Psilocybe Cubensis spore print samples are still difficult to come by. 
                    <br>
                    <br>
                    SporeBuddies.com has been set up to collect, stock and resell the Worlds Largest Selection of Magic Mushroom Spores, magic mushroom spore syringes, magic mushroom prints and vials at the lowest prices. We aim to bring you spore syringes, spore prints and spore vials from as many labs and producers as we can.
                    Some samples will be from small scale Mycologists. Some samples will be from the larger commercial mushroom producers.
                    </p>
                    <a class="btn">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>