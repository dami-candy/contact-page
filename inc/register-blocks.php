<?php
function custom_block_category($categories, $post) {
    $custom_block = array(
        'slug' => 'custom-blocks',
        'title' => __('Custom Blocks', 'custom-blocks')
    );
	$categories_sorted = array();
    $categories_sorted[0] = $custom_block;
    foreach ($categories as $category) {
        $categories_sorted[] = $category;
    }
    return $categories_sorted;
}
add_filter('block_categories', 'custom_block_category', 10, 2);

function register_acf_block_types() {

    // Main Banner
    acf_register_block_type(array(
        'name'              => 'slider',
        'title'             => __('Slider'),
        'render_template'   => 'template-parts/blocks/slider.php',
        'category'          => 'custom-blocks',
        'icon'              => '<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="image" class="svg-inline--fa fa-image fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M464 448H48c-26.51 0-48-21.49-48-48V112c0-26.51 21.49-48 48-48h416c26.51 0 48 21.49 48 48v288c0 26.51-21.49 48-48 48zM112 120c-30.928 0-56 25.072-56 56s25.072 56 56 56 56-25.072 56-56-25.072-56-56-56zM64 384h384V272l-87.515-87.515c-4.686-4.686-12.284-4.686-16.971 0L208 320l-55.515-55.515c-4.686-4.686-12.284-4.686-16.971 0L64 336v48z"></path></svg>',
        'mode'              => 'edit',
    ));

    // Jobs
    acf_register_block_type(array(
        'name'              => 'jobs',
        'title'             => __('Jobs'),
        'render_template'   => 'template-parts/blocks/jobs/jobs.php',
        'category'          => 'custom-blocks',
        'icon'              => '<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="briefcase" class="svg-inline--fa fa-briefcase fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M320 336c0 8.84-7.16 16-16 16h-96c-8.84 0-16-7.16-16-16v-48H0v144c0 25.6 22.4 48 48 48h416c25.6 0 48-22.4 48-48V288H320v48zm144-208h-80V80c0-25.6-22.4-48-48-48H176c-25.6 0-48 22.4-48 48v48H48c-25.6 0-48 22.4-48 48v80h512v-80c0-25.6-22.4-48-48-48zm-144 0H192V96h128v32z"></path></svg>',
        'enqueue_style' => get_template_directory_uri() . '/template-parts/blocks/jobs/jobs.css',
        'mode'              => 'edit',
    ));

    // Jobs Categories
    acf_register_block_type(array(
        'name'              => 'jobs-categories',
        'title'             => __('Jobs Categories'),
        'render_template'   => 'template-parts/blocks/jobs-categories/jobs-categories.php',
        'category'          => 'custom-blocks',
        'icon'              => '<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="briefcase" class="svg-inline--fa fa-briefcase fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M320 336c0 8.84-7.16 16-16 16h-96c-8.84 0-16-7.16-16-16v-48H0v144c0 25.6 22.4 48 48 48h416c25.6 0 48-22.4 48-48V288H320v48zm144-208h-80V80c0-25.6-22.4-48-48-48H176c-25.6 0-48 22.4-48 48v48H48c-25.6 0-48 22.4-48 48v80h512v-80c0-25.6-22.4-48-48-48zm-144 0H192V96h128v32z"></path></svg>',
        'enqueue_style' => get_template_directory_uri() . '/template-parts/blocks/jobs-categories/jobs-categories.css',
        'mode'              => 'edit',
    ));

    // Latest Jobs
    acf_register_block_type(array(
        'name'              => 'latest-jobs',
        'title'             => __('Latest Jobs'),
        'render_template'   => 'template-parts/blocks/latest-jobs/latest-jobs.php',
        'category'          => 'custom-blocks',
        'icon'              => '<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="briefcase" class="svg-inline--fa fa-briefcase fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M320 336c0 8.84-7.16 16-16 16h-96c-8.84 0-16-7.16-16-16v-48H0v144c0 25.6 22.4 48 48 48h416c25.6 0 48-22.4 48-48V288H320v48zm144-208h-80V80c0-25.6-22.4-48-48-48H176c-25.6 0-48 22.4-48 48v48H48c-25.6 0-48 22.4-48 48v80h512v-80c0-25.6-22.4-48-48-48zm-144 0H192V96h128v32z"></path></svg>',
        'mode'              => 'edit',
    ));

    // Image & Text
    acf_register_block_type(array(
        'name'              => 'image-text',
        'title'             => __('Image & Text'),
        'render_template'   => 'template-parts/blocks/image-text.php',
        'category'          => 'custom-blocks',
        'icon'              => '<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" role="img" aria-hidden="true" focusable="false"><path d="M4 17h7V6H4v11zm9-10v1.5h7V7h-7zm0 5.5h7V11h-7v1.5zm0 4h7V15h-7v1.5z"></path></svg>',
        'mode'              => 'edit',
    ));

    // Custom Banner
    acf_register_block_type(array(
        'name'              => 'custom-banner',
        'title'             => __('Custom Banner'),
        'render_template'   => 'template-parts/blocks/custom-banner/custom-banner.php',
        'category'          => 'custom-blocks',
        'icon'              => 'cover-image',
        'mode'              => 'edit',
    ));

    // Promo Banner
    acf_register_block_type(array(
        'name'              => 'promo-banner',
        'title'             => __('Promo Banner'),
        'render_template'   => 'template-parts/blocks/promo-banner/promo-banner.php',
        'category'          => 'custom-blocks',
        'icon'              => 'cover-image',
        'mode'              => 'edit',
    ));

    // Partners
    acf_register_block_type(array(
        'name'              => 'partners',
        'title'             => __('Partners'),
        'render_template'   => 'template-parts/blocks/partners/partners.php',
        'category'          => 'custom-blocks',
        'icon'              => 'businessman',
        'mode'              => 'edit',
    ));

    // Testimonials
    acf_register_block_type(array(
        'name'              => 'testimonials',
        'title'             => __('Testimonials'),
        'render_template'   => 'template-parts/blocks/testimonials/testimonials.php',
        'category'          => 'custom-blocks',
        'icon'              => 'format-quote',
        'mode'              => 'edit',
    ));

    // Latest Posts
    acf_register_block_type(array(
        'name'              => 'latest-posts',
        'title'             => __('Latest Posts'),
        'render_template'   => 'template-parts/blocks/latest-posts/latest-posts.php',
        'category'          => 'custom-blocks',
        'icon'              => 'admin-post',
        'mode'              => 'edit',
    ));

    // Blog
    acf_register_block_type(array(
        'name'              => 'blog',
        'title'             => __('Blog'),
        'render_template'   => 'template-parts/blocks/blog/blog.php',
        'category'          => 'custom-blocks',
        'icon'              => 'admin-post',
        'enqueue_style' => get_template_directory_uri() . '/template-parts/blocks/blog/blog.css',
        'mode'              => 'edit',
    ));

    // Post Columns
    acf_register_block_type(array(
        'name'              => 'post-columns',
        'title'             => __('Post Columns'),
        'render_template'   => 'template-parts/blocks/post-columns/post-columns.php',
        'category'          => 'custom-blocks',
        'icon'              => 'columns',
        'enqueue_style' => get_template_directory_uri() . '/template-parts/blocks/post-columns/post-columns.css',
        'mode'              => 'edit',
    ));

    // Contact
    acf_register_block_type(array(
        'name'              => 'contact',
        'title'             => __('Contact'),
        'render_template'   => 'template-parts/blocks/contact/contact.php',
        'category'          => 'custom-blocks',
        'icon'              => 'id',
        'enqueue_style' => get_template_directory_uri() . '/template-parts/blocks/contact/contact.css',
        'mode'              => 'edit',
    ));

    // About
    acf_register_block_type(array(
        'name'              => 'about',
        'title'             => __('About'),
        'render_template'   => 'template-parts/blocks/about/about.php',
        'category'          => 'custom-blocks',
        'icon'              => 'info',
        'enqueue_style' => get_template_directory_uri() . '/template-parts/blocks/about/about.css',
        'mode'              => 'edit',
    ));

    // Page Content
    acf_register_block_type(array(
        'name'              => 'page-content',
        'title'             => __('Page Content'),
        'render_template'   => 'template-parts/blocks/page-content/page-content.php',
        'category'          => 'custom-blocks',
        'icon'              => '<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="keyboard" class="svg-inline--fa fa-keyboard fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M528 448H48c-26.51 0-48-21.49-48-48V112c0-26.51 21.49-48 48-48h480c26.51 0 48 21.49 48 48v288c0 26.51-21.49 48-48 48zM128 180v-40c0-6.627-5.373-12-12-12H76c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h40c6.627 0 12-5.373 12-12zm96 0v-40c0-6.627-5.373-12-12-12h-40c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h40c6.627 0 12-5.373 12-12zm96 0v-40c0-6.627-5.373-12-12-12h-40c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h40c6.627 0 12-5.373 12-12zm96 0v-40c0-6.627-5.373-12-12-12h-40c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h40c6.627 0 12-5.373 12-12zm96 0v-40c0-6.627-5.373-12-12-12h-40c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h40c6.627 0 12-5.373 12-12zm-336 96v-40c0-6.627-5.373-12-12-12h-40c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h40c6.627 0 12-5.373 12-12zm96 0v-40c0-6.627-5.373-12-12-12h-40c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h40c6.627 0 12-5.373 12-12zm96 0v-40c0-6.627-5.373-12-12-12h-40c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h40c6.627 0 12-5.373 12-12zm96 0v-40c0-6.627-5.373-12-12-12h-40c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h40c6.627 0 12-5.373 12-12zm-336 96v-40c0-6.627-5.373-12-12-12H76c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h40c6.627 0 12-5.373 12-12zm288 0v-40c0-6.627-5.373-12-12-12H172c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h232c6.627 0 12-5.373 12-12zm96 0v-40c0-6.627-5.373-12-12-12h-40c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h40c6.627 0 12-5.373 12-12z"></path></svg>',
        'mode'              => 'edit',
    ));

}

if(function_exists('acf_register_block_type')) {
    add_action('acf/init', 'register_acf_block_types');
}