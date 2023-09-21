<?php /* Template Name: Payment Page Template*/ 

$full_width = get_field('full_width');
$title = get_field('title');
$divider = get_field('divider');
$alignment = get_field('alignment');

$image = get_field('image'); 
$content = get_field('content');
$image_2 = get_field('image_2'); 
$content_2 = get_field('content_2');
$image_3 = get_field('image_3'); 
$content_3 = get_field('content_3');
$background_colour = get_field('background_colour');
$image_width = get_field('image_width');
$image_height = get_field('image_height');

$usp_content = get_field('usp_content');

$order_title = get_field('order_title');
$order_image = get_field('order_image');
$order_icon_1 = get_field('order_icon_1');
$order_content_1 = get_field('order_content_1');
$order_icon_2 = get_field('order_icon_2');
$order_content_2 = get_field('order_content_2');
$order_icon_3 = get_field('order_icon_3');
$order_content_3 = get_field('order_content_3');
$order_icon_4 = get_field('order_icon_4');
$order_content_4 = get_field('order_content_4');


// Logo Section
$logo_icon_1 = get_field('logo_icon_1');
$logo_icon_2 = get_field('logo_icon_2');
$logo_icon_3 = get_field('logo_icon_3');
$logo_icon_4 = get_field('logo_icon_4');
$button_link = get_field('button_link');


?>

<?php get_header();?>
    <section id="payment-page">
        <div class="container"><h1><?php the_title(); ?></h1>
            <div class="row">
                <div class="d-flex flex-wrap justify-content-between">
                    <div class="col-12 col-md-5">
                        <h2>Card Payment</h2>
                        <p>Pay with debit/credit card over the phone Call. 
                            Card payments will show on your bank statement as "OMS".</p>
                            <a><div class="btn">Call us  0800 069 9269</div></a>
                    </div>
                    <div class="col-12 col-md-5">
                        <h2>Card Payment</h2>
                        <p>Pay with debit/credit card over the phone Call. 
                            Card payments will show on your bank statement as "OMS".</p>
                            <div></div>
                    </div>
                    <div class="col-12 col-md-5 mt-5">
                        <h2>Card Payment</h2>
                        <p>Pay with debit/credit card over the phone Call. 
                            Card payments will show on your bank statement as "OMS".</p>
                            <div></div>
                    </div>
                    <div class="col-12 col-md-5 mt-5">
                        <h2>Card Payment</h2>
                        <p>Pay with debit/credit card over the phone Call. 
                            Card payments will show on your bank statement as "OMS".</p>
                            <a><div class="btn">Call us  0800 069 9269</div></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row half-section mt-5">
            <div class="container d-flex flex-wrap">
                <div class="col-12 col-md-6">
                <img class="header-logo" src="<?php echo $order_image['url']; ?>" alt="<?php echo $order_image['alt']; ?>">
                </div>
                <div class="col-12 col-md-6">
                    <div class="mb-5"><?php echo $order_title; ?></div>
                    <div class="d-flex flex-wrap mb-4">
                        <div class="col-1 d-flex"><img class="icon" src="<?php echo $order_icon_1['url']; ?>" alt="<?php echo $order_icon_1['alt']; ?>"></div>
                        <div class="col-11 ps-3">
                            <div><?php echo $order_content_1; ?></div>
                        </div>
                        
                    </div>
                    <div class="d-flex flex-wrap mb-4">
                    <div class="col-1 d-flex"><img class="icon" src="<?php echo $order_icon_2['url']; ?>" alt="<?php echo $order_icon_2['alt']; ?>"></div>
                        <div class="col-11 ps-3">
                            <div><?php echo $order_content_2; ?></div>
                        </div>
                        
                    </div>
                    <div class="d-flex flex-wrap mb-4">
                    <div class="col-1 d-flex"><img class="icon" src="<?php echo $order_icon_3['url']; ?>" alt="<?php echo $order_icon_3['alt']; ?>"></div>
                        <div class="col-11 ps-3">
                            <div><?php echo $order_content_3; ?></div>
                        </div>
                        
                    </div>
                    <div class="d-flex flex-wrap mb-4">
                    <div class="col-1 d-flex"><img class="icon" src="<?php echo $order_icon_4['url']; ?>" alt="<?php echo $order_icon_4['alt']; ?>"></div>
                        <div class="col-11 ps-3">
                            <div><?php echo $order_content_4; ?></div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row logo-section">
            <div class="container text-center">
                <div><small>Other Ways to Pay</small>
                    <h2 class="my-3">Western Union Money Transfer</h2>
                    <p>Now accepting Western Union Money Transfer. <br>
                        Please always send to the bank details found in the order confirmation Payment link. </p>
                        <div class="logos col-12 d-flex flex-wrap my-4">
                            <div class="col-3"><img src="<?php echo $logo_icon_1['url']; ?>" alt="<?php echo $logo_icon_1['alt']; ?>"></div>
                            <div class="col-3"><img src="<?php echo $logo_icon_2['url']; ?>" alt="<?php echo $logo_icon_2['alt']; ?>"></div>
                            <div class="col-3"><img src="<?php echo $logo_icon_3['url']; ?>" alt="<?php echo $logo_icon_3['alt']; ?>"></div>
                            <div class="col-3"><img src="<?php echo $logo_icon_4['url']; ?>" alt="<?php echo $logo_icon_4['alt']; ?>"></div>
                        </div>
                        <div class="btn"><a href="<?php echo $button_link; ?>">Visit Site</a></div>
                </div>
            </div>      
        </div>
        <div class="container">
           <?php echo $usp_content; ?>
        </div>

        <section id="three-column-section" style="background:<?php echo $background_colour; ?>">
            <div class="container"> 
                <?php if (!$full_width) { echo '<div class="inner-container">'; } ?>
                    <div class="row mb-5">
                        <div class="mb-5"><?php echo $title; ?> </div>
                        <div class="col-md-4" style="text-align:<?php echo $alignment; ?>">
                        <img src="<?php echo $image['url']; ?>" class="img-responsive mb-4" style="width: <?php echo $image_width; ?>px; height: <?php echo $image_height; ?>px;" alt="Image">
                            <p><?php echo $content; ?></p>
                        </div>
                        <div class="col-md-4 <?php if($divider === 'divider') { echo "divider"; } ?>" style="text-align:<?php echo $alignment; ?>">
                        <img src="<?php echo $image_2['url']; ?>" class="img-responsive mb-4" style="width: <?php echo $image_width; ?>px; height: <?php echo $image_height; ?>px;" alt="Image">
                            <p><?php echo $content_2; ?></p>
                        </div>
                        <div class="col-md-4" style="text-align:<?php echo $alignment; ?>">
                        <img src="<?php echo $image_3['url']; ?>" class="img-responsive mb-4" style="width: <?php echo $image_width; ?>px; height: <?php echo $image_height; ?>px;" alt="Image">
                            <p><?php echo $content_3; ?></p>
                        </div>
                    </div>
                <?php if (!$full_width) { echo '</div'; } ?>
            </div>
        </section>

        <section id="steps-section">    
            <div class="container">
                <div class="row">
                    <div class="col-12"><h2><?php echo $title; ?></h2></div>
                    <div class="d-flex flex-wrap justify-content-between justify-content-md-start">
                        <?php

                        // Check if rows exist.
                        if (have_rows('steps')) {

                            // Loop through rows.
                            while (have_rows('steps')) : the_row();

                                // Load sub field values.
                                $content = get_sub_field('content');
                                $show_button = get_sub_field('show_button');
                                $button_text = get_sub_field('button_text');
                                $button_link = get_sub_field('button_link');
                                $alignment = get_sub_field('alignment');
                                $image = get_sub_field('image');
                                $image_url = get_sub_field('image_url');

                                // Do something...
                                ?>
                                <div class="step col-5 col-md-4 mb-5">
                                    <div class="content">
                                        <?php if ($image && $image_position === 'top') { ?>
                                            <div class="image"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></div>
                                        <?php } ?>
                                        <div class="mt-4 <?php if($image === false) {echo 'arrow'; } ?>"><?php echo $content; ?></div>
                                        <?php if ($show_button) { ?>
                                            <a href="<?php echo $button_link; ?>"><div class="btn mt-3 
                                            <?php echo $button_text; ?></div></a>
                                        <?php } ?>
                                        <?php if ($image && $image_position === 'bottom') { ?>
                                            <div class="image"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></div>
                                        <?php } ?>
                                    </div>
                                </div>

                                <?php

                            // End loop.
                            endwhile;

                        } else {
                            // No value.
                            // You can add something here to handle the case when there are no rows.
                        }
                        ?>
                    </div>
                </div>
            </div>
</section>



        <?php 
        
        the_content();
        ?>
        </div>
    </section>

</div>
<?php get_footer();?>


