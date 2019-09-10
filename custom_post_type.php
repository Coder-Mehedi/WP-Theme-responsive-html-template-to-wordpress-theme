<?php 

function cptui_register_my_cpts() {

	/**
	 * Post Type: Banners.
	 */

	$labels = array(
		"name" => __( "Banners", "esoftdorothy" ),
		"singular_name" => __( "Banners", "esoftdorothy" ),
	);

	$args = array(
		"label" => __( "Banners", "esoftdorothy" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "banner", "with_front" => true ),
		"query_var" => true,
		"supports" => false,
	);

	register_post_type( "banner", $args );

	/**
	 * Post Type: Fictions.
	 */

	$labels = array(
		"name" => __( "Fictions", "esoftdorothy" ),
		"singular_name" => __( "Fiction", "esoftdorothy" ),
	);

	$args = array(
		"label" => __( "Fictions", "esoftdorothy" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "fictions", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title" ),
		"taxonomies" => array( "category", "post_tag" ),
	);

	register_post_type( "fictions", $args );

	/**
	 * Post Type: Testimonials.
	 */

	$labels = array(
		"name" => __( "Testimonials", "esoftdorothy" ),
		"singular_name" => __( "Testimonial", "esoftdorothy" ),
	);

	$args = array(
		"label" => __( "Testimonials", "esoftdorothy" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "testimonials", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title" ),
	);

	register_post_type( "testimonials", $args );

	/**
	 * Post Type: About Author.
	 */

	$labels = array(
		"name" => __( "About Author", "esoftdorothy" ),
		"singular_name" => __( "About Author", "esoftdorothy" ),
	);

	$args = array(
		"label" => __( "About Author", "esoftdorothy" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "about_author", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title" ),
	);

	register_post_type( "about_author", $args );

	/**
	 * Post Type: Footer Settings.
	 */

	$labels = array(
		"name" => __( "Footer Settings", "esoftdorothy" ),
		"singular_name" => __( "Footer Setting", "esoftdorothy" ),
	);

	$args = array(
		"label" => __( "Footer Settings", "esoftdorothy" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "footer_settings", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title" ),
		"taxonomies" => array( "category" ),
	);

	register_post_type( "footer_settings", $args );

	/**
	 * Post Type: Fiction Actions.
	 */

	$labels = array(
		"name" => __( "Fiction Actions", "esoftdorothy" ),
		"singular_name" => __( "Fiction Action", "esoftdorothy" ),
	);

	$args = array(
		"label" => __( "Fiction Actions", "esoftdorothy" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "fiction_action", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title" ),
	);

	register_post_type( "fiction_action", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
