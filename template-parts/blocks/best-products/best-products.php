<?php
/**
 * Block Name: Best Products
 */

$content = get_field('content');
?>
<section id="best-products">
    <div class="container d-flex px-5 justify-content-between flex-column flex-md-row">
        <div class="col-12 col-md-3">
            <p>Most Popular</p>
            <h2>Our <span>Bestselling</span> products</h2>
            <a class="btn mt-4">Shop All</a>
        </div>
        <div class="col-12 col-md-8">
        <div class="d-flex text-color text-center justify-content-end">
            <ul class="d-flex">
                <li><i class="fas fa-arrow-left"></i></li>
                <li><i class="fas fa-arrow-right"></i></li>
            </ul>
        </div>
            <div class="best-products">
            <?php
            // Query WooCommerce featured products
            $featured_products = new WP_Query(array(
                'post_type'      => 'product',
                'posts_per_page' => -1,
                'tax_query'      => array(
                    array(
                        'taxonomy' => 'product_visibility',
                        'field'    => 'name',
                        'terms'    => 'featured',
                        'operator' => 'IN',
                    ),
                ),
            ));

            if ($featured_products->have_posts()) :
                while ($featured_products->have_posts()) :
                    $featured_products->the_post();

                    // Retrieve product information
                    $product_id = get_the_ID();
                    $product_title = get_the_title();
                    $product_permalink = get_permalink();
                    $product_image = get_the_post_thumbnail_url($product_id); // Change 'thumbnail' to the desired image size
                    $product = wc_get_product($product_id);
                    $product_price = $product->get_price();
                    ?>  
                    <div class="product">
                        <a href="<?php echo esc_url($product_permalink); ?>">
                            <img src="<?php echo $product_image; ?>">
                        </a>
                        <a href="<?php echo esc_url($product_permalink); ?>">
                            <h3><?php echo esc_html($product_title); ?></h3>
                        </a>
                        <p><?php echo wc_price($product_price); ?></p>
                        <a href="<?php echo esc_url($product_permalink); ?>">
                            <div class="btn">Add to Cart</div>
                        </a>
                        <!-- Additional product information can be added here -->
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata(); // Restore the global post object
            else :
                echo 'No featured products found.';
            endif;
            ?>
            </div>
        </div>
    </div>
</section>

