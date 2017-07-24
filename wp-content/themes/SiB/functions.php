<?php

function learningWordPress_resources() {
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'learningWordPress_resources');
    
    
//Navigation menus
register_nav_menus(array(
'primary' => __('Primary Menu'),
'footer' => __('Footer Menu')
));

//Gör det möjligt att ändra logotyp, öppnar upp WP för möjligheten
//add_theme_support( 'custom-logo' );
add_theme_support( 'custom-logo', array(
	'height'      => 53,
	'width'       => 220,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );

 //add_theme_support('custom-background');

// Add Footer callout section to admin appearance customize screen
// Flytta till index vid senare tillfälle ska också byta namn, men det är från en youtubetuturial
function lwp_footer_callout($wp_customize) {
	$wp_customize->add_section('lwp-footer-callout-section', array(
		'title' => 'Landing page'
	));

	$wp_customize->add_setting('lwp-footer-callout-display', array(
		'default' => 'No'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'lwp-footer-callout-display-control', array(
			'label' => 'Display this section?',
			'section' => 'lwp-footer-callout-section',
			'settings' => 'lwp-footer-callout-display',
			'type' => 'select',
			'choices' => array('No' => 'No', 'Yes' => 'Yes')
		)));

	$wp_customize->add_setting('lwp-footer-callout-headline', array(
		'default' => 'Example Headline Text!'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'lwp-footer-callout-headline-control', array(
			'label' => 'Headline',
			'section' => 'lwp-footer-callout-section',
			'settings' => 'lwp-footer-callout-headline'
		)));

	$wp_customize->add_setting('lwp-footer-callout-text', array(
		'default' => 'Example paragraph text.'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'lwp-footer-callout-text-control', array(
			'label' => 'Text',
			'section' => 'lwp-footer-callout-section',
			'settings' => 'lwp-footer-callout-text',
			'type' => 'textarea'
		)));

	$wp_customize->add_setting('lwp-footer-callout-link');

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'lwp-footer-callout-link-control', array(
			'label' => 'Link',
			'section' => 'lwp-footer-callout-section',
			'settings' => 'lwp-footer-callout-link',
			'type' => 'dropdown-pages'
		)));

	$wp_customize->add_setting('lwp-footer-callout-image');
    
// Här ändrar man måtten för scaling av bild i wordpress
	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-footer-callout-image-control', array(
			'label' => 'Image',
			'section' => 'lwp-footer-callout-section',
			'settings' => 'lwp-footer-callout-image',
			'width' => 1440,
			'height' => 800,
        
		)));
}

add_action('customize_register', 'lwp_footer_callout');



//FEATURED IMAGE IN ADMIN PANEL
add_image_size( 'crunchify-admin-post-featured-image', 120, 120, false );
 
// Add the posts and pages columns filter. They can both use the same function.
add_filter('manage_posts_columns', 'crunchify_add_post_admin_thumbnail_column', 2);
add_filter('manage_pages_columns', 'crunchify_add_post_admin_thumbnail_column', 2);
 
// Add the column
function crunchify_add_post_admin_thumbnail_column($crunchify_columns){
	$crunchify_columns['crunchify_thumb'] = __('Featured Image');
	return $crunchify_columns;
}
 
// Let's manage Post and Page Admin Panel Columns
add_action('manage_posts_custom_column', 'crunchify_show_post_thumbnail_column', 5, 2);
add_action('manage_pages_custom_column', 'crunchify_show_post_thumbnail_column', 5, 2);
 
// Here we are grabbing featured-thumbnail size post thumbnail and displaying it
function crunchify_show_post_thumbnail_column($crunchify_columns, $crunchify_id){
	switch($crunchify_columns){
		case 'crunchify_thumb':
		if( function_exists('the_post_thumbnail') )
			echo the_post_thumbnail( 'crunchify-admin-post-featured-image' );
		else
			echo 'hmm... your theme doesn\'t support featured image...';
		break;
	}
}


