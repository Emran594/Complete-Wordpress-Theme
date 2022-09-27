<?php
/*
Plugin Name: photo
Plugin URI:
Description: Companion Plugin for photo Theme
Version: 1.0
Author: Emran
Author URI:
License: GPLv2 or later
Text Domain: photo
Domain Path: /languages/
*/

function photo_load_text_domain() {
	load_plugin_textdomain( 'photo', false, dirname( __FILE__ ) . "/languages" );
}

add_action( 'plugins_loaded', 'photo_load_text_domain' );

function photo_register_my_cpts() {

	/**
	 * Post Type: Sliders.
	 */

	$labels = [
		"name" => __( "Sliders", "photo" ),
		"singular_name" => __( "Slider", "photo" ),
		"menu_name" => __( "Slider", "photo" ),
		"all_items" => __( "All Slider Items", "photo" ),
		"add_new" => __( "Add New", "photo" ),
		"add_new_item" => __( "Add New Slider", "photo" ),
		"edit_item" => __( "Edit Slider Item", "photo" ),
		"new_item" => __( "New Slider", "photo" ),
		"view_item" => __( "View Slider", "photo" ),
		"view_items" => __( "View All Slider", "photo" ),
		"search_items" => __( "Search Slider", "photo" ),
	];

	$args = [
		"label" => __( "Sliders", "photo" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => false,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "slider", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-slides",
		"supports" => [ "title", "editor", "thumbnail", "custom-fields" ],
	];

	register_post_type( "slider", $args );

	/**
	 * Post Type: Services.
	 */

	$labels = [
		"name" => __( "Services", "photo" ),
		"singular_name" => __( "Service", "photo" ),
		"menu_name" => __( "Services", "photo" ),
		"all_items" => __( "ALl Services", "photo" ),
		"add_new" => __( "Add New Services", "photo" ),
		"add_new_item" => __( "Add New Services", "photo" ),
		"edit_item" => __( "Edit Service Item", "photo" ),
		"new_item" => __( "New Service", "photo" ),
	];

	$args = [
		"label" => __( "Services", "photo" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "service", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-admin-tools",
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "service", $args );

	/**
	 * Post Type: Gallery's.
	 */

	$labels = [
		"name" => __( "Gallery's", "photo" ),
		"singular_name" => __( "Gallery", "photo" ),
	];

	$args = [
		"label" => __( "Gallery's", "photo" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "gallery", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-format-gallery",
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "gallery", $args );

	/**
	 * Post Type: testimonials .
	 */

	$labels = [
		"name" => __( "testimonials ", "photo" ),
		"singular_name" => __( "testimonial", "photo" ),
	];

	$args = [
		"label" => __( "testimonials ", "photo" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "tetimonial", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-testimonial",
		"supports" => [ "title", "editor", "thumbnail", "custom-fields" ],
	];

	register_post_type( "tetimonial", $args );

	/**
	 * Post achivments .
	 */

	$labels = [
		"name" => __( "achivments ", "photo" ),
		"singular_name" => __( "achivment", "photo" ),
	];

	$args = [
		"label" => __( "achivments ", "photo" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "achivment", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-portfolio",
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "achivment", $args );
}

add_action( 'init', 'photo_register_my_cpts' );
