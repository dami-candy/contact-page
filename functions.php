<?php
    add_action( 'after_setup_theme', 'generic_setup' );
    function generic_setup() {
        load_theme_textdomain( 'generic', get_template_directory() . '/languages' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'custom-logo' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'responsive-embeds' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'html5', array( 'search-form', 'navigation-widgets' ) );
        add_theme_support( 'woocommerce' );
        global $content_width;
        if ( !isset( $content_width ) ) { $content_width = 1920; }
        register_nav_menus( array( 'main-menu' => esc_html__( 'Main Menu', 'generic' ) ) );
    }

    wp_enqueue_script( 'jquery' );

    // -------- Bootstrap CDN
    wp_register_style( 'Bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' );
    wp_enqueue_style('Bootstrap');

    // -------- Fontawesome CDN
    wp_register_style( 'Font_Awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css' );
    wp_enqueue_style('Font_Awesome');

    function baseline_files() {
        wp_enqueue_style('baseline_main_styles', get_stylesheet_uri());
        wp_enqueue_style('font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css');
    }
    add_action('wp_enqueue_scripts', 'baseline_files');

    // -------- Slick slider css
    wp_register_style( 'Slick_slider_css', get_stylesheet_directory_uri() . '/vendors/slick.css');
    wp_enqueue_style('Slick_slider_css');

    // -------- Slick slider JS
    function slick_slider_load() {
        wp_enqueue_script( 'slick_slider_script', get_stylesheet_directory_uri() . '/js/vendors/slick.min.js');
    }

    add_action('wp_enqueue_scripts','slick_slider_load');

    // -------- Custom JS
    function custom_js_load() {
        wp_enqueue_script( 'custom-js-script', get_stylesheet_directory_uri() . '/js/custom.js');
    }

    add_action('wp_enqueue_scripts','custom_js_load');

    // -------- Adding Theme Functions
    function my_theme_setup(){
        add_theme_support('post-thumbnails');
        add_theme_support( 'menus' );

    }

    add_action('after_setup_theme', 'my_theme_setup');


    // -------- Adding Excerpt max length
    function custom_excerpt_length( $length ) {
	    return 10;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


    // -------- Adding Useful Links menu
    function useful_links_menu() {
        register_nav_menu('useful-links',__( 'Useful Links' ));
    }
    add_action( 'init', 'useful_links_menu' );

    // -------- Adding Copyright menu
    function copyright_menu() {
        register_nav_menu('copyright-menu',__( 'Copyright Menu' ));
    }
    add_action( 'init', 'copyright_menu' );

     // -------- About menu
     function about_menu() {
        register_nav_menu('about-menu',__( 'About Menu' ));
    }
    add_action( 'init', 'about_menu' );


    // Regsiter New Block
    function register_layout_category( $categories ) {
	
        $categories[] = array(
            'slug'  => 'custom-block',
            'title' => 'Custom Block'
        );
    
        return $categories;
    }
    
    if ( version_compare( get_bloginfo( 'version' ), '5.8', '>=' ) ) {
        add_filter( 'block_categories_all', 'register_layout_category' );
    } else {
        add_filter( 'block_categories', 'register_layout_category' );
    }


    
 
    function register_acf_block_types(){

        // Slider block
        acf_register_block_type(
            array(
            'name'              => 'slider',
            'title'             => __('Slider'),
            'description'       => __('A custom testimonial block.'),
            'render_template'   => 'template-parts/blocks/slider.php',
            'icon'              => 'media-default',
            'category'          => 'custom-blocks',
            'keywords'          => array( 'testimonial', 'quote' ),
            )
        );

        // Three Column Section
        acf_register_block_type(
            array(
            'name'              => 'three-column-section',
            'title'             => __('Three Column Section'),
            'description'       => __('A custom testimonial block.'),
            'render_template'   => 'template-parts/blocks/three-column-section/three-column-section.php',
            'icon'              => 'media-default',
            'keywords'          => array( 'testimonial', 'quote' ),
            )
        );

        // Shop Banner
        acf_register_block_type(
            array(
            'name'              => 'shop-banner',
            'title'             => __('Shop Banner'),
            'description'       => __('A custom testimonial block.'),
            'render_template'   => 'template-parts/blocks/shop-banner/shop-banner.php',
            'icon'              => 'media-default',
            'keywords'          => array( 'testimonial', 'quote' ),
            )
        );

        // CTA Section
        acf_register_block_type(
            array(
            'name'              => 'cta-section',
            'title'             => __('CTA Section'),
            'description'       => __('Call to action block.'),
            'render_template'   => 'template-parts/blocks/cta-section/cta-section.php',
            'icon'              => 'media-default',
            'keywords'          => array( 'testimonial', 'quote' ),
            )
        );

        // Categories
        acf_register_block_type(
            array(
            'name'              => 'category-template',
            'title'             => __('Category Template'),
            'description'       => __('Call to action block.'),
            'render_template'   => 'template-parts/blocks/category-template/category-template.php',
            'icon'              => 'media-default',
            'keywords'          => array( 'testimonial', 'quote' ),
            )
        );

        // Accordion
         acf_register_block_type(
            array(
            'name'              => 'accordion',
            'title'             => __('Accordion'),
            'description'       => __('Call to action block.'),
            'render_template'   => 'template-parts/blocks/accordion/accordion.php',
            'icon'              => 'media-default',
            'keywords'          => array( 'testimonial', 'quote' ),
            )
        );

        // Blog
        acf_register_block_type(
            array(
            'name'              => 'blogs',
            'title'             => __('Blogs'),
            'description'       => __('Call to action block.'),
            'render_template'   => 'template-parts/blocks/blogs/blogs.php',
            'icon'              => 'media-default',
            'keywords'          => array( 'testimonial', 'quote' ),
            )
        );

        // Content
         acf_register_block_type(
            array(
            'name'              => 'content',
            'title'             => __('Content'),
            'description'       => __('Call to action block.'),
            'render_template'   => 'template-parts/blocks/content/content.php',
            'icon'              => 'media-default',
            'keywords'          => array( 'testimonial', 'quote' ),
            )
        );

        // Product Slider
         acf_register_block_type(
            array(
            'name'              => 'product-slider',
            'title'             => __('Product Slider'),
            'description'       => __('Call to action block.'),
            'render_template'   => 'template-parts/blocks/product-slider/product-slider.php',
            'icon'              => 'media-default',
            'keywords'          => array( 'testimonial', 'quote' ),
            )
        );

         // Best Products
         acf_register_block_type(
            array(
            'name'              => 'best-products',
            'title'             => __('Best Products'),
            'description'       => __('Call to action block.'),
            'render_template'   => 'template-parts/blocks/best-products/best-products.php',
            'icon'              => 'media-default',
            'keywords'          => array( 'testimonial', 'quote' ),
            )
        );

        // About
          acf_register_block_type(
            array(
            'name'              => 'about',
            'title'             => __('About'),
            'description'       => __('Call to action block.'),
            'render_template'   => 'template-parts/blocks/about/about.php',
            'icon'              => 'media-default',
            'keywords'          => array( 'testimonial', 'quote' ),
            )
        );

        // Text Image
          acf_register_block_type(
            array(
            'name'              => 'text-image',
            'title'             => __('Text Image'),
            'description'       => __('Call to action block.'),
            'render_template'   => 'template-parts/blocks/text-image/text-image.php',
            'icon'              => 'media-default',
            'keywords'          => array( 'testimonial', 'quote' ),
            )
        );

        // Text Image Overlay
         acf_register_block_type(
            array(
            'name'              => 'text-image-overlay',
            'title'             => __('Text Image Overlay'),
            'description'       => __('Call to action block.'),
            'render_template'   => 'template-parts/blocks/text-image-overlay/text-image-overlay.php',
            'icon'              => 'media-default',
            'keywords'          => array( 'testimonial', 'quote' ),
            )
        );

        // Gallery
        acf_register_block_type(
            array(
            'name'              => 'gallery',
            'title'             => __('Gallery'),
            'description'       => __('Call to action block.'),
            'render_template'   => 'template-parts/blocks/gallery/gallery.php',
            'icon'              => 'media-default',
            'keywords'          => array( 'testimonial', 'quote' ),
            )
        );

        // Contact Form
         acf_register_block_type(
            array(
            'name'              => 'contact-form',
            'title'             => __('Contact Form'),
            'description'       => __('Call to action block.'),
            'render_template'   => 'template-parts/blocks/contact-form/contact-form.php',
            'icon'              => 'media-default',
            'keywords'          => array( 'testimonial', 'quote' ),
            )
        );

        // Image Block
        acf_register_block_type(
            array(
            'name'              => 'image-block',
            'title'             => __('Image Block'),
            'description'       => __('Call to action block.'),
            'render_template'   => 'template-parts/blocks/image-block/image-block.php',
            'icon'              => 'media-default',
            'keywords'          => array( 'testimonial', 'quote' ),
            )
        );

    }

    if (function_exists('acf_register_block_type')) {
        add_action('acf/init', 'register_acf_block_types');
    }


    // Removes the decoding attribute from images added inside post content.
    add_filter( 'wp_img_tag_add_decoding_attr', '__return_false' );

    // Remove the decoding attribute from featured images and the Post Image block.
    add_filter( 'wp_get_attachment_image_attributes', function( $attributes ) {
        unset( $attributes['decoding'] );
        return $attributes;
    } );


    // Breadcrumbs
    function custom_breadcrumbs() {
        echo '<div class="breadcrumbs">';
    
        // Home link
        echo '<a href="' . esc_url(home_url('/')) . '">Home</a>';
    
        // Check if it's a WooCommerce product page
        if (function_exists('is_product') && is_product()) {
            $product = wc_get_product(get_the_ID());
            $product_cats = wc_get_product_cat_ids($product->get_id());
    
            if (!empty($product_cats)) {
                $product_cat_id = $product_cats[0];
                $product_cat = get_term($product_cat_id, 'product_cat');
                echo ' / <a href="' . esc_url(get_term_link($product_cat)) . '">' . esc_html($product_cat->name) . '</a>';
            }
            
            echo ' / ' . get_the_title();
        }
        // Check if it's a blog page (posts page)
        elseif (is_home()) {
            echo ' / Blog';
        }
        // Check if it's a single blog post
        elseif (is_single()) {
            $categories = get_the_category();
            
            if (!empty($categories)) {
                $category = $categories[0];
                echo ' / <a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
            }
            
            echo ' / ' . get_the_title();
        }
        // Check if it's a category archive page
        elseif (is_category()) {
            $category = get_queried_object();
            echo ' / ' . esc_html($category->name);
        }
        // Check if it's a tag archive page
        elseif (is_tag()) {
            echo ' / Tag: ' . esc_html(single_tag_title('', false));
        }
        // Check if it's a search results page
        elseif (is_search()) {
            echo ' / Search results for: ' . esc_html(get_search_query());
        }
        // Check if it's an author archive page
        elseif (is_author()) {
            $author = get_queried_object();
            echo ' / Author: ' . esc_html($author->display_name);
        }
        // Check if it's a 404 error page
        elseif (is_404()) {
            echo ' / 404 Not Found';
        }
        // For other pages, display the page title
        else {
            echo ' / ' . get_the_title();
        }
    
        echo '</div>';
    }
    

    // Updating the related products text
    add_filter(  'gettext',  'change_related_products_title', 10, 3 );
    function change_related_products_title( $translated, $text, $domain  ) {
        if( $text === 'Related products' && $domain === 'woocommerce' ){
            $translated = esc_html__( 'You May Also Like', $domain );
        }
        return $translated;
    }
?>

