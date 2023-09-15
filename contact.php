<?php /* Template Name: Contact Template*/ 

$phone_icon = get_field('phone_icon'); 
$phone_number = get_field('phone_number'); 

$hours_icon = get_field('hours_icon'); 
$hours_text = get_field('hours_text');

$email_icon = get_field('email_icon'); 
$email_address = get_field('email_address');

$location_icon = get_field('location_icon'); 
$location_text = get_field('location_text');

$contact_information = get_field('contact_information');
?>

<?php get_header();?>

<div class="container">
    <div class="row">
        <div class="col-12 my-5">
            <p>Speak to us</p>
            <h2>Get In Touch</h2>
            <p>We love our customers, so feel free to call during normal business hours.</p>
        </div>
    </div>
    <div class="row">
        <div class="contact-info col-12 col-md-7 d-flex flex-wrap justify-content-between">
            <div class="col-5 col-md-6">
                <?php if ($phone_icon) { ?> 
                    <div class="mb-5">
                        <img class="mb-3" src="<?php echo ( $phone_icon['url'] ); ?>">
                        <h3>Phone</h3>
                        <a href="tel:<?php echo $phone_number;?>"><?php echo $phone_number;?></a>
                    </div>
                <?php } ?>
                <?php if ($hours_icon) { ?> 
                    <div class="mb-5">
                        <img class="mb-3" src="<?php echo ( $hours_icon['url'] ); ?>">
                        <h3>Opening Hours</h3>
                        <div><?php echo $hours_text; ?></div>
                    </div>
                <?php } ?>
            </div>
            <div class="col-5 col-md-6">
                <?php if ($email_icon) { ?> 
                    <div class="mb-5">
                        <img class="mb-3" src="<?php echo ( $email_icon['url'] ); ?>">
                        <h3>Email</h3>
                        <a href="tel:<?php echo $email_address;?>"><?php echo $email_address;?></a>
                    </div>
                <?php } ?>
                <?php if ($location_icon) { ?> 
                    <div class="mb-5">
                        <img class="mb-3" src="<?php echo ( $location_icon['url'] ); ?>">
                        <h3>Location</h3>
                        <div><?php echo $location_text; ?></div>
                    </div>
                <?php } ?>
            </div>
            <div class="col-10">
                <div><?php echo $contact_information; ?></div>
            </div>
        </div>
        <div class="col-12 col-md-5 mt-5">
            <?php echo do_shortcode('[contact-form-7 id="4d41094" title="Contact Page Form"]'); ?>
        </div>
        <img class="mt-5" src="<?php bloginfo('template_url'); ?>/images/map.jpg" alt="Map">
    </div>
</div>

<?php get_footer();?>
