<?php
/**
 * Block Name: Image & Text
 */
?>
<?php $title = get_field('title'); ?>
<?php $subtitle = get_field('subtitle'); ?>
<?php $text = get_field('text'); ?>
<?php $image = get_field('image'); ?>
<?php $image_2 = get_field('image_2'); ?>
<?php $image_3 = get_field('image_3'); ?>
<?php $reverse = get_field('reverse'); ?>
<?php $images = get_field('images'); ?>
<section class="img-text">
	<div class="container">
		<div class="img-text__wrap">
			<div class="img-text__row<?php if($reverse) echo ' fd-row-reverse'; ?>">
				<?php if($image || $image_2): ?>
					<div class="img-text__col">
						<div class="img-text__img<?php if($images) echo ' img-text__img-mix'; ?> animated zoomIn delay1 duration2 eds-on-scroll">
							<?php if($image): ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
							<?php endif; ?>
							<?php if($image_2): ?>
								<img src="<?php echo $image_2['url']; ?>" alt="<?php echo $image_2['title']; ?>">
							<?php endif; ?>
							<?php if($image_3): ?>
								<img src="<?php echo $image_3['url']; ?>" alt="<?php echo $image_3['title']; ?>">
							<?php endif; ?>
						</div>
					</div>
				<?php endif; ?>
				<?php if($title || $subtitle || $text): ?>
					<div class="img-text__col">
						<div class="img-text__text">
							<?php if($subtitle): ?>
								<h3 class="img-text__subtitle subtitle animated fadeInUp duration2 eds-on-scroll "><?php echo $subtitle; ?></h3>
							<?php endif; ?>
							<?php if($title): ?>
								<h2 class="img-text__title animated fadeInUp duration2 eds-on-scroll "><?php echo $title; ?></h2>
							<?php endif; ?>
							<?php if($text): ?>
								<div class="img-text__body animated fadeInUp duration2 eds-on-scroll "><?php echo $text; ?></div>
							<?php endif; ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>