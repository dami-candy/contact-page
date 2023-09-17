<?php
/**
 * Block Name: Blog
 */
?>
<section id="blogs">
	<div class="container">
		<div class="blog__wrap">
			<?php $subtitle = get_field('subtitle'); ?>
			<?php if($subtitle): ?>
				<h3 class="blog__subtitle subtitle"><?php echo $subtitle; ?></h3>
			<?php endif; ?>
			<?php $title = get_field('title'); ?>
			<?php
				$blog = get_page_by_path('blog');
				global $wp_query;
            	$posts_per_page = get_option('posts_per_page');
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'post',
                    'paged' => $paged,
                    'posts_per_page' => $posts_per_page,
                    'post_status' => 'publish'
                );
                $wp_query = new WP_Query($args);
            ?>
            <?php if($wp_query->have_posts()): ?>
            	<div class="blog__items">
					<ul class="blog__list">
						<?php while($wp_query->have_posts()): $wp_query->the_post(); ?>
							<li class="col-12 col-md-6 px-md-4">
								<div class="article">
									<a class="article__img" href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail(); ?>
									</a>
									<div class="article__body">
										<div class="article__heading">
											<div class="row d-flex justify-content-between">
												<div class="col-12 col-md-9"><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></div>
												<div class="col-12 col-md-3 text-left text-md-end"><p class="date text-uppercase mt-1"><?php echo get_the_date('d M Y'); ?></p></div>
											</div>
											<p><?php echo get_the_excerpt(); ?></p>
											<a href="<?php the_permalink(); ?>"><div class="read-btn">Read More</div></a>
										</div>
									</div>
								</div>
							</li>
						<?php endwhile; ?>
					</ul>
				</div>
				<div class="pagination justify-content-center">
					<?php
						$pagination_args = array(
							'prev_text' => '&lt;',
							'next_text' => '&gt;',
							'total' => $wp_query->max_num_pages,
							'current' => $paged,
							'end_size' => 1,
							'mid_size' => 2,
						);
						echo paginate_links($pagination_args);
					?>
				</div>
			<?php endif; ?>
	        <?php wp_reset_query(); ?>
		</div>
	</div>
</section