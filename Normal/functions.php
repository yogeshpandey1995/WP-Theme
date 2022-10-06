<?php 

// Support Title Tag
add_theme_support('title-tag');

// wp_enqueue_style_script

function custom_styles_scripts()
{
	// Stytesheet
	wp_enqueue_style('main_style', get_stylesheet_uri());
	wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/plugins/bootstrap/bootstrap.min.css', array(), '1.0');
	wp_enqueue_style('slick_css', get_template_directory_uri() . '/plugins/slick/slick.css', array(), '1.0');
	wp_enqueue_style('slick_theme', get_template_directory_uri() . '/plugins/slick/slick-theme.css', array(), '1.0');
	wp_enqueue_style('fancybox_css', get_template_directory_uri() . '/plugins/fancybox/jquery.fancybox.min.css', array(), '1.0');
	wp_enqueue_style('fontawesome_css', get_template_directory_uri() . '/plugins/fontawesome/css/all.min.css', array(), '1.0');
	wp_enqueue_style('animate_css', get_template_directory_uri() . '/plugins/animation/animate.min.css', array(), '1.0');
	wp_enqueue_style('jquery_ui_css', get_template_directory_uri() . '/plugins/jquery-ui/jquery-ui.css', array(), '1.0');
	wp_enqueue_style('timePicker_css', get_template_directory_uri() . '/plugins/timePicker/timePicker.css', array(), '1.0');
	// wp_enqueue_style('style_file', get_template_directroy_uri().'/css/style.css');
	// Javascript
	wp_enqueue_script('jquery_js', get_template_directory_uri() . '/plugins/jquery.min.js', array(), '1.1', true);
	wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/plugins/bootstrap/bootstrap.min.js', array(), '1.1', true);
	wp_enqueue_script('slick_js', get_template_directory_uri() . '/plugins/slick/slick.min.js', array(), '1.1', true);
	wp_enqueue_script('animation_js', get_template_directory_uri() . '/plugins/slick/slick-animation.min.js', array(), '1.1', true);
	wp_enqueue_script('fancybox_js', get_template_directory_uri() . '/plugins/fancybox/jquery.fancybox.min.js', array(), '1.1', true);;
	wp_enqueue_script('gmap_js', get_template_directory_uri() . '/plugins/google-map/gmap.js', array(), '1.1', true);
	wp_enqueue_script('jquery_ui_js', get_template_directory_uri() . '/plugins/jquery-ui/jquery-ui.js', array(), '1.1', true);
	wp_enqueue_script('timepicker_js', get_template_directory_uri() . '/plugins/timePicker/timePicker.js', array(), '1.1', true);
	wp_enqueue_script('script_js', get_template_directory_uri() . '/js/script.js', array(), '1.1', true);
}
add_action('wp_enqueue_scripts', 'custom_styles_scripts');

// register_custom_nav_menu

function theme_custom_menu()
{
	register_nav_menus(
		array(
			'primary_menu' => __('Primary Menu'),
			'footer_menu' => __('Footer Menu'),
			'footer_bottom_menu'  => __('Footer Bottom Menu')
		)
	);
}
add_action('init', 'theme_custom_menu');

// register_custom_logo

function theme_custom_logo()
{
	$defaults = array(
		'width' => 173,
		'height' => 67,
		'flex-width' => true,
		'flex-height' => true,
		'header-text' => 'site-title', 'site-description',
	);
	add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'theme_custom_logo');

// add class li in nav_menu

// function add_class_to_menu_list($classes, $item, $args, $depth)
// {
// 	/**** according to theme location *****/
// 	if ($args->theme_location == 'primary_menu') {
// 		$classes[] = 'nav-item';
// 	}
// 	return $classes;
// }
// add_filter('nav_menu_css_class', 'add_class_to_menu_list', 10, 4);

// add class anchor in nav_menu

// function add_class_to_list_anchor($atts, $item, $args, $depth)
// {
// 	/**** according to theme location *****/
// 	if ($args->theme_location == 'primary_menu') {
// 		$atts['class'] = "nav-link";
// 	}
// 	return $atts;
// }
// add_filter('nav_menu_link_attributes', 'add_class_to_list_anchor', 10, 4);

/**
 * 	Custom Post Type // Our projects. 
 **/

// function our_projects_cpt()
// {

// 	$labels = [
// 		"name" => __("Our Projects", "cpt_our_projects"),
// 		"singular_name" => __("Our Project", "cpt_our_projects"),
// 		"menu_name" => __("Our Projects", "cpt_our_projects"),
// 		"all_items" => __("All Projects", "cpt_our_projects"),
// 		"add_new" => __("Add New", "cpt_our_projects"),
// 		"add_new_item" => __("Add New Project", "cpt_our_projects"),
// 		"edit_item" => __("Edit Project", "cpt_our_projects"),
// 		"new_item" => __("New Project", "cpt_our_projects"),
// 		"view_item" => __("View Project", "cpt_our_projects"),
// 		"search_items" => __("Search Project", "cpt_our_projects"),
// 		"not_found" => __("Projects Not Found", "cpt_our_projects"),
// 		"not_found_in_trash" => __("Not Found In Trash", "cpt_our_projects"),
// 		"featured_image" => __("Featured Image", "cpt_our_projects"),
// 		"set_featured_image" => __("Set Featured Image", "cpt_our_projects"),
// 		"remove_featured_image" => __("Remove Featured Image", "cpt_our_projects"),
// 		"use_featured_image" => __("Use as a Featured image", "cpt_our_projects"),
// 		"parent_item_colon" => __("Parent Project", "cpt_our_projects"),
// 		"archives" => __("Project Archives", "cpt_our_projects"),
// 		"insert_into_item" => __("Insert into Project", "cpt_our_projects"),
// 		"uploaded_to_this_item" => __("Upload to This Project", "cpt_our_projects"),
// 		"filter_items_list" => __("Filter Projects List", "cpt_our_projects"),
// 		"items_list_navigation" => __("Projects list navigation", "cpt_our_projects"),
// 		"items_list" => __("Projects List", "cpt_our_projects"),
// 		"name_admin_bar" => __("Project", "cpt_our_projects"),
// 		//"view_items" => __( "hello11", "cpt_our_projects" ),
// 		//"parent" => __( "hello15", "cpt_our_projects" ),
// 		//"attributes" => __( "hello26", "cpt_our_projects" ),
// 		//"item_published" => __( "hello28", "cpt_our_projects" ),
// 		//"item_published_privately" => __( "hello29", "cpt_our_projects" ),
// 		//"item_reverted_to_draft" => __( "hello30", "cpt_our_projects" ),
// 		//"item_scheduled" => __( "hello31", "cpt_our_projects" ),
// 		//"item_updated" => __( "hello32", "cpt_our_projects" ),

// 	];

// 	$args = [
// 		"labels" => $labels,
// 		"description" => "This is Our Projects Description",
// 		"public" => true,
// 		"publicly_queryable" => true,
// 		"show_ui" => true,
// 		"show_in_rest" => true,
// 		"has_archive" => false,
// 		"show_in_menu" => true,
// 		"show_in_nav_menus" => true,
// 		"capability_type" => "post",
// 		"hierarchical" => false,
// 		"rewrite" => ["slug" => "our_projects", "with_front" => true],
// 		"query_var" => true,
// 		"supports" => array('title', 'editor', 'thumbnail', 'post-formats'),   /* 'excerpt','trackbacks'.'custom_fields','comments','revisions','author','page_attributes','post_formats','none' */
// 		"taxonomies" => ["category", "post_tag"],
// 		"menu_icon" => "dashicons-admin-site",
// 		//"rest_base" => "",
// 		//"rest_controller_class" => "WP_REST_Posts_Controller",
// 		//"map_meta_cap" => true,		
// 		//"show_in_graphql" => false,
// 		//"delete_with_user" => false,
// 		//"exclude_from_search" => false,
// 	];
// 	register_post_type("our_projects", $args);
// }
// add_action('init', 'our_projects_cpt');

// Show Feature Image In Theme Post Type

function post_feature_img()
{
	add_theme_support('post-thumbnails');
	//add_image_size('post_image_size',150,150,true);

	add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

	//add post-formats to post_type 'your_custom_post_type'
	/* add_post_type_support('our_projects', 'post-formats'); */
}
add_action('after_setup_theme', 'post_feature_img');

// Show Widgets Sidebar In Theme

function widgets_sidebar()
{
	register_sidebar(array(
		'name'          => __('Footer 1', 'custom_theme'),
		'id'            => 'footer-1',
		'description'   => __('This is First Footer Widget', 'custom_theme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	));
	register_sidebar(array(
		'name'          => __('Footer 2', 'custom_theme'),
		'id'            => 'footer-2',
		'description'   => __('This is Second Footer Widget', 'custom_theme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	));
	register_sidebar(array(
		'name'          => __('Footer 3', 'custom_theme'),
		'id'            => 'footer-3',
		'description'   => __('This is third Footer Widget', 'custom_theme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	));
	register_sidebar(array(
		'name'          => __('Footer 4', 'custom_theme'),
		'id'            => 'footer-4',
		'description'   => __('This is Fourth Footer Widget', 'custom_theme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	));
	register_sidebar(array(
		'name'          => __('Blog Sidebar', 'custom_theme'),
		'id'            => 'blog_sidebar',
		'description'   => __('This is Blog Sidebar Widget', 'custom_theme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	));
}
add_action('widgets_init', 'widgets_sidebar');






// function add_class_li($classes,$item,$args){
//     if(isset($args->li_class)){
//         $classes[] = $args->li_class;
//     }
//     if(isset($args->active_class) && in_array('current-menu-item', $classes)){
//         $classes[] = $args->active_class;
//     }
//     return $classes;
// }
// add_filter('nav_menu_css_class', 'add_class_li', 10, 3);

// function add_anchor_class($attr,$item,$args){
//     if(isset($args->a_class)){
//         $attr['class'] = $args->a_class;
//     }
//     return $attr;
// }
// add_filter('nav_menu_link_attributes','add_anchor_class', 10, 3 );

function custom_theme_customize_register($wp_customize)
{
	$wp_customize->add_section('custom_copyright_section', array(
		'title'    => 'Footer Copyright Section',
		'description' => 'Change Your Footer Copyright Section',
		'priority' => 120,
	));

	// Footer Logo
	$wp_customize->add_setting('footer_logo', array(
		'default'           => get_bloginfo('template_url') . '/images/logo-2.png',
		'capability'        => 'edit_theme_options',
		'type'           => 'option',

	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'image_upload_test', array(
		'label'    => 'Footer Logo Upload',
		'section'  => 'custom_copyright_section',
		'settings' => 'footer_logo',
	)));

	// Footer Copyright Section Text
	$wp_customize->add_setting('custom_copyright_setting', array(
		'default'        => 'Copyright 2021. Designed & Developed By',
		'capability'     => 'edit_theme_options',
		'type'           => 'option',

	));

	$wp_customize->add_control('custom_copyright_control', array(
		'label'      => 'Copyright Text',
		'section'    => 'custom_copyright_section',
		'settings'   => 'custom_copyright_setting',
	));

	// Footer Copyright Link Text
	$wp_customize->add_setting('custom_copyright_link_text_setting', array(
		'default'        => 'Yogesh',
		'capability'     => 'edit_theme_options',
		'type'           => 'option',

	));

	$wp_customize->add_control('copyright_link_text_control', array(
		'label'      => 'Copyright Link Text',
		'section'    => 'custom_copyright_section',
		'settings'   => 'custom_copyright_link_text_setting',
	));

	// Footer Copyright Link 
	$wp_customize->add_setting('custom_copyright_link_setting', array(
		'default'        => '#',
		'capability'     => 'edit_theme_options',
		'type'           => 'option',

	));

	$wp_customize->add_control('copyright_link_control', array(
		'label'      => 'Copyright Link',
		'section'    => 'custom_copyright_section',
		'settings'   => 'custom_copyright_link_setting',
	));
}
add_action('customize_register', 'custom_theme_customize_register');

// Shortcode 

function our_shortcode()
{
	include 'hedeartop/top-header.php';
}
// register shortcode
add_shortcode('shortcode_file', 'our_shortcode');


// Our custom post type function
function header_cpt()
{

	register_post_type('top-header',

		array(
			'labels' => array(
				'name' => __('My Header'),
				'singular_name' => __('Header')
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'top-header'),
			'show_in_rest' => true,
			'supports' => array('title'),
			"menu_icon" => "dashicons-admin-generic",

		)
	);
}
add_action('init', 'header_cpt');

function footer_cpt()
{

	register_post_type('footer',

		array(
			'labels' => array(
				'name' => __('My Footer'),
				'singular_name' => __('Footer')
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'footer'),
			'show_in_rest' => true,
			'supports' => array('title'),
			"menu_icon" => "dashicons-admin-generic",

		)
	);
}
add_action('init', 'footer_cpt');
