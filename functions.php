<?php

define('DEBUG', false);

if (!defined('S_VERSION')) {
  define('S_VERSION', DEBUG ? microtime() : '1.0.6');
}

add_theme_support('title-tag');
add_post_type_support('page', 'excerpt');

if (!is_admin()) {

  function zankavets_theme_setup()
  {

    // Styles
    wp_enqueue_style('swiper-styles', get_theme_file_uri('/assets/css/swiper.min.css'), array(), '10.0.5', 'all');
    wp_enqueue_style('zankavets-fonts', get_theme_file_uri('/assets/css/fonts.css'), array(), S_VERSION, 'all');
    wp_enqueue_style('zankavets-styles', get_theme_file_uri('/assets/css/styles.css'), array('zankavets-fonts', 'wp-block-library'), S_VERSION, 'all');

    // Scripts    
    wp_enqueue_script('swiper-script', get_theme_file_uri('/assets/js/swiper-bundle.min.js'), array(), '10.0.5', true);
    wp_enqueue_script('zankavets-script', get_theme_file_uri('/assets/js/main.js'), array('swiper-script'), S_VERSION, true);
  }
  add_action('after_setup_theme', 'zankavets_theme_setup');
}

function zankavets_admin_theme_setup()
{
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'zankavets_admin_theme_setup');

// CPT
function register_custom_post_types()
{
  register_post_type(
    'certificate',
    array(
      'labels'      => array(
        'name'          => __('Certificates', 'zankavets'),
        'singular_name' => __('Certificate', 'zankavets'),
      ),
      'public'      => true,
      'has_archive' => false,
      'menu_icon' => 'dashicons-awards',
      'supports' => array('title'),
      'rewrite' => array(
        'with_front' => false,
        'slug' => 'certification'
      )
    )
  );

  register_post_type(
    'testimonial',
    array(
      'labels'      => array(
        'name'          => __('Testimonials', 'zankavets'),
        'singular_name' => __('Testimonial', 'zankavets'),
      ),
      'taxonomies' => array('testimonial-category'),
      'public'      => true,
      'has_archive' => false,
      'menu_icon' => 'dashicons-testimonial',
      'supports' => array('title'),
      'rewrite' => array(
        'with_front' => false,
        'slug' => 'testimonials'
      )
    )
  );

  register_post_type(
    'book',
    array(
      'labels'      => array(
        'name'          => __('Books', 'zankavets'),
        'singular_name' => __('Book', 'zankavets'),
      ),
      'public'      => true,
      'has_archive' => false,
      'menu_icon' => 'dashicons-book-alt',
      'supports' => array('title', 'thumbnail', 'excerpt'),
      'rewrite' => array(
        'with_front' => false,
        'slug' => 'books'
      ),
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
    )
  );

  register_post_type(
    'service',
    array(
      'labels'      => array(
        'name'          => __('Services', 'zankavets'),
        'singular_name' => __('Service', 'zankavets'),
      ),
      'public'      => true,
      'has_archive' => false,
      'menu_icon' => 'dashicons-cart',
      'supports' => array('title', 'thumbnail', 'excerpt'),
      'rewrite' => array(
        'with_front' => false,
        'slug' => 'services'
      ),
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
    )
  );

  register_post_type(
    'article',
    array(
      'labels'      => array(
        'name'          => __('Articles', 'zankavets'),
        'singular_name' => __('Article', 'zankavets'),
      ),
      'public'      => true,
      'has_archive' => false,
      'menu_icon' => 'dashicons-analytics',
      'rewrite' => array(
        'with_front' => false,
        'slug' => 'articles'
      ),
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
    )
  );
}
add_action('init', 'register_custom_post_types');

//Custom Taxonomies
function register_custom_taxonomies()
{
  register_taxonomy('testimonial-category', 'testimonial', array(
    'label' => 'Category',
    'hierarchical' => true
  ));
}
add_action('init', 'register_custom_taxonomies');

// Shortcodes
function register_shortcodes()
{

  function print_socials($atts)
  {
    ob_start();
    get_template_part('template-parts/content/section', 'socials');
    return ob_get_clean();
  }
  add_shortcode('socials', 'print_socials');
}
add_action('init', 'register_shortcodes');

// CF7
add_filter('wpcf7_autop_or_not', '__return_false');
