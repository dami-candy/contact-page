<?php
/**
 * Block Name: Slider
 */
?>
<?php
	$bg_image = get_field('bg_image');

	$columns = get_field('columns');
	$text = get_field('text');
	$image = get_field('image');
	// print_r($image);
	$width = 540;
	$height = 540;
	if ($image) :
		$img_url = $image['url'];
		$img_width = $image['width'];
		$img_height = $image['height'];
		$image = aq_resize($img_url,$width,$height,false);
		if (!$image) :
			$image = $img_url;
		endif;

		$dims = image_resize_dimensions( $img_width,$img_height,$width,$height,false);

		if ($dims) :
		    $imgwidth = $dims[4];
		    $imgheight = $dims[5];
		else :
		    $imgwidth = $img_width;
		    $imgheight = $img_height;
		endif;

	endif;

	$lottie = get_field('lottie');
	$form = get_field('form');
	$text_2 = get_field('text_2');
	$link = get_field('link');
?>
<section class="service-block">
	<div class="restangle restangle-left">
		<div class="stripes-pattern"></div>
	</div>
	<div class="restangle restangle-right">
		<div class="stripes-pattern"></div>
	</div>
	<?php if($bg_image): ?>
		<div class="service-block__image">
			<img src="<?php echo $bg_image['url']; ?>" alt="<?php echo $bg_image['title']; ?>" width="<?php echo $bg_image['width']; ?>" height="<?php echo $bg_image['height']; ?>">
		</div>
	<?php endif; ?>
	<div class="container z2">
		<div class="service">
			<?php if($image || $form || $lottie): ?>
				<div class="text-image__image">
					<?php if(!$form && !$lottie && $image): ?>
						<img src="<?php echo $image; ?>" alt="<?php echo $image['title']; ?>"  width="<?php echo $imgwidth; ?>" height="<?php echo $imgheight; ?>">
					<?php endif; ?>
					<?php if(!$form && $lottie): ?>
						<lottie-player autoplay="" speed="1" loop="" mode="normal" src="<?php echo $lottie; ?>" background="transparent"></lottie-player>
					<?php endif; ?>
					<?php if($form): ?>
						<div class="service__form">
							<?php echo do_shortcode('[contact-form-7 id="'.$form->ID.'" title="'.$form->post_title.'"]'); ?>
						</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			<?php if($text || $text_2 || $link): ?>
				<div class="text-image__text<?php if($columns == '2') echo ' list-col-2'; ?>">
					<?php echo $text; ?>
					<?php echo $text_2; ?>
					<?php if($link): ?>
						<?php $target = $link['target'] ? $link['target'] : '_self'; ?>
						<a href="<?php echo $link['url']; ?>" target="<?php echo $target; ?>" class="btn">
							<?php echo $link['title']; ?>
							<svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M14.332.171L12.309 2.29a.376.376 0 0 0 0 .52l3.428 3.565H.912a.368.368 0 0 0-.364.371v2.972c0 .205.163.372.364.372h14.825l-3.428 3.565a.377.377 0 0 0 0 .519l2.023 2.119a.36.36 0 0 0 .521 0l7.449-7.802a.374.374 0 0 0 0-.518L14.853.17a.36.36 0 0 0-.521 0z" fill="#fff"/>
							</svg>
						</a>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>