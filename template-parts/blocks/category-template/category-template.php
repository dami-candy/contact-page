<?php
/**
 * Block Name: Category Template
 */

?>

<section id="category-template">
    <div class="container py-2">
        <div class="row my-5">
            <?php 
                if( have_rows('product_template') ):

                    // Loop through rows.
                    while( have_rows('product_template') ) : the_row();
        
                        // Load sub field value.
                        $product = get_sub_field('product');
                        // Do something...
                        ?>
                            <div class="col-6 col-md-4">
                                <?php
                                    $category_id = $product; 
                                    $category = get_term($category_id, 'product_cat');

                                    // Get the category thumbnail (featured image) ID
                                    $thumbnail_id = get_term_meta($category_id, 'thumbnail_id', true);
                                    $category_url = get_term_link($category, 'product_cat');

                                    // Get the image URL
                                    $thumbnail_url = wp_get_attachment_image_url($thumbnail_id, 'thumbnail'); // 'thumbnail' is the image size you want (you can change it to 'medium', 'large', etc.)

                                    echo '<a href="' . esc_url($category_url) . '">';
                                        echo '<img class="category-image" src="' . esc_url($thumbnail_url) . '" alt="Category Thumbnail">';
                                        echo '<div class="d-flex justify-content-between">';
                                            echo '<p class="category-name mt-3">' . esc_html($category->name) . '</p>';
                                            echo '<img class="arrow" src="' . esc_url(get_template_directory_uri()) . '/images/arrow.png">';
                                        echo '</div>';
                                    echo '</a>';
                                ?>
                            </div>
                        <?php 
        
                    // End loop.
                    endwhile;
        
                // No value.
                else :
                    // Do something...
                endif;
            ?>
            <a href="/" class="text-center"><div class="btn btn-alt mt-5">View All</div></a>
        </div>
    </div>
</section>