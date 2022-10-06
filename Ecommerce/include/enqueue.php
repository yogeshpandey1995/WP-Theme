<?php

// Title Support
add_action('after_setup_theme', 'title_tag');
function title_tag()
{
    add_theme_support('title_tag');
}

// Enqueue Styles And Scripts
add_action('wp_enqueue_scripts', 'style_script');
function style_script()
{
    // Enqueue CSS
    wp_enqueue_style('main_css', get_stylesheet_uri());
    wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/files/css/bootstrap.min.css', array(), '1.0', false);
    wp_enqueue_style('fontawesome_css', get_template_directory_uri() . '/files/css/font-awesome.min.css', array(), '1.0', false);
    wp_enqueue_style('elegant_icons_css', get_template_directory_uri() . '/files/css/elegant-icons.css', array(), '1.0', false);
    wp_enqueue_style('jquery_css', get_template_directory_uri() . '/files/css/jquery-ui.min.css', array(), '1.0', false);
    wp_enqueue_style('magnific_popup_css', get_template_directory_uri() . '/files/css/magnific-popup.css', array(), '1.0', false);
    wp_enqueue_style('owl_carousel_css', get_template_directory_uri() . '/files/css/owl.carousel.min.css', array(), '1.0', false);
    wp_enqueue_style('slicknav_css', get_template_directory_uri() . '/files/css/slicknav.min.css', array(), '1.0', false);
    wp_enqueue_style('style_css', get_template_directory_uri() . '/files/css/style.css', array(), '1.0', false);
    // Enqueue JS
    wp_enqueue_script('jquery_js', get_template_directory_uri() . '/files/js/jquery-3.3.1.min.js', array(), '1.0.0', true);
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/files/js/bootstrap.min.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery_magnific_js', get_template_directory_uri() . '/files/js/jquery.magnific-popup.min.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery_ui_js', get_template_directory_uri() . '/files/js/jquery-ui.min.js', array(), '1.0.0', true);
    wp_enqueue_script('mixitup_js', get_template_directory_uri() . '/files/js/mixitup.min.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery_countdown_js', get_template_directory_uri() . '/files/js/jquery.countdown.min.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery_slicknav_js', get_template_directory_uri() . '/files/js/jquery.slicknav.js', array(), '1.0.0', true);
    wp_enqueue_script('owl_carousel_js', get_template_directory_uri() . '/files/js/owl.carousel.min.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery_nicescroll_js', get_template_directory_uri() . '/files/js/jquery.nicescroll.min.js', array(), '1.0.0', true);
    wp_enqueue_script('main_js', get_template_directory_uri() . '/files/js/main.js', array(), '1.0.0', true);
}

// Register Custom Menus
add_action('after_setup_theme', 'register_custom_menus');
function register_custom_menus()
{
    register_nav_menus(
        array(
            'primary_menu' => __('Primary Menu'),
            'footer_menu'  => __('Footer Menu'),
        )
    );
}

// Register Custom Logo
function custom_logo()
{
    $defaults = array(
        'height'               => 35,
        'width'                => 100,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array('site-title', 'site-description'),
        'unlink-homepage-logo' => true,
    );
    add_theme_support('custom-logo', $defaults);
}

// Add List (li) Class In Nav_Menu
// add_filter('nav_menu_css_class', 'add_li_class', 10, 4);
// function add_li_class($classes, $item, $args, $depth)
// {
//     if ($args->theme_location == 'primary_menu') {
//         $classes[] = 'nav-item';
//     }
//     return $classes;
// }

// Add Anchor (a) Class In Nav_Menu
// add_filter('nav_menu_link_attributes', 'add_a_class', 10, 4);
// function add_a_class($atts, $item, $args, $depth)
// {

//     if ($args->theme_location == 'primary_menu') {
//         $atts['class'] = "nav-link";
//     }
//     return $atts;
// }

// Show Feature Image In Blog Post Type
add_action('after_setup_theme', 'post_feature_img');
function post_feature_img()
{
	add_theme_support('post-thumbnails');
	//add_image_size('post_image_size',150,150,true);
	add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

}
