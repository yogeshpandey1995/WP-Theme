<?php

function custom_theme_customize_register($wp_customize)
{
	$wp_customize->add_section('custom_copyright_section', array(
		'title'    => 'Footer Copyright Section',
		'description' => 'Change Your Footer Copyright Section',
		'priority' => 120,
	));

	// Footer Logo
	$wp_customize->add_setting('footer_logo', array(
		'default'           => get_bloginfo('template_url') . '/files/img/logo.png',
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
		'default'        => 'All Rights Reserved | Design and Developed By',
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