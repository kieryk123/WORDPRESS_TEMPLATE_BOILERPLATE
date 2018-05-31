<?php

//function that load CSS nad JS
function load_styles_and_scripts(){

	//load styles
	wp_enqueue_style('main-style', get_stylesheet_directory_uri() . '/css/main.css');

	//load scripts
	// wp_enqueue_script('jquery');
	wp_enqueue_script('website-scripts', get_template_directory_uri() . '/js/compiled/main.min.js', array(), '0.1.0', true );

}
add_action('wp_enqueue_scripts', 'load_styles_and_scripts');


// add google map API to ACF map field
// function my_acf_google_map_api( $api ){
// 	$api['key'] = 'AIzaSyCez8Hnd1XAktdMeFgSOxgOec6xD0xCrA0';
// 	return $api;
// }
// add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


//function that set theme setup
function theme_setup() {
	//add post thumbnails
	add_theme_support('post-thumbnails');
}
add_action('init', 'theme_setup');


// Register Custom Post Type Koszulki
// Post Type Key: koszulki
// function create_koszulki_cpt() {
//
// 	$labels = array(
// 		'name' => __( 'Koszulki', 'Post Type General Name', 'textdomain' ),
// 		'singular_name' => __( 'Koszulka', 'Post Type Singular Name', 'textdomain' ),
// 		'menu_name' => __( 'Koszulki', 'textdomain' ),
// 		'name_admin_bar' => __( 'Koszulka', 'textdomain' ),
// 		'archives' => __( 'Koszulka Archives', 'textdomain' ),
// 		'attributes' => __( 'Koszulka Attributes', 'textdomain' ),
// 		'parent_item_colon' => __( 'Parent Koszulka:', 'textdomain' ),
// 		'all_items' => __( 'All Koszulki', 'textdomain' ),
// 		'add_new_item' => __( 'Add New Koszulka', 'textdomain' ),
// 		'add_new' => __( 'Add New', 'textdomain' ),
// 		'new_item' => __( 'New Koszulka', 'textdomain' ),
// 		'edit_item' => __( 'Edit Koszulka', 'textdomain' ),
// 		'update_item' => __( 'Update Koszulka', 'textdomain' ),
// 		'view_item' => __( 'View Koszulka', 'textdomain' ),
// 		'view_items' => __( 'View Koszulki', 'textdomain' ),
// 		'search_items' => __( 'Search Koszulka', 'textdomain' ),
// 		'not_found' => __( 'Not found', 'textdomain' ),
// 		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
// 		'featured_image' => __( 'Featured Image', 'textdomain' ),
// 		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
// 		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
// 		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
// 		'insert_into_item' => __( 'Insert into Koszulka', 'textdomain' ),
// 		'uploaded_to_this_item' => __( 'Uploaded to this Koszulka', 'textdomain' ),
// 		'items_list' => __( 'Koszulki list', 'textdomain' ),
// 		'items_list_navigation' => __( 'Koszulki list navigation', 'textdomain' ),
// 		'filter_items_list' => __( 'Filter Koszulki list', 'textdomain' ),
// 	);
// 	$args = array(
// 		'label' => __( 'Koszulki', 'textdomain' ),
// 		'description' => __( 'Koszulki EDM', 'textdomain' ),
// 		'labels' => $labels,
// 		'menu_icon' => 'dashicons-tag',
// 		'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', ),
// 		'taxonomies' => array(),
// 		'public' => true,
// 		'show_ui' => true,
// 		'show_in_menu' => true,
// 		'menu_position' => 5,
// 		'show_in_admin_bar' => true,
// 		'show_in_nav_menus' => true,
// 		'can_export' => true,
// 		'has_archive' => true,
// 		'hierarchical' => false,
// 		'exclude_from_search' => false,
// 		'show_in_rest' => true,
// 		'publicly_queryable' => true,
// 		'capability_type' => 'post',
// 	);
// 	register_post_type( 'koszulki', $args );
//
// }
// add_action( 'init', 'create_koszulki_cpt', 0 );

?>
