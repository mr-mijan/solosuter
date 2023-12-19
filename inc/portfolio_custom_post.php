<?php
/**
 * Register a custom post type called "Portfolio".
 *
 * @see get_post_type_labels() for label keys.
 */
function solouster_custom_post_portfolio() {
	$labels = array(
		'name'                  => __( 'Portfolio', 'Post type general name', 'istaqane' ),
		'singular_name'         => __( 'Portfolio', 'Post type singular name', 'istaqane' ),
		'menu_name'             => __( 'Portfolio', 'Admin Menu text', 'istaqane' ),
		'name_admin_bar'        => __( 'Portfolio', 'Add New on Toolbar', 'istaqane' ),
		'add_new'               => __( 'Add New Portfolio', 'istaqane' ),
		'add_new_item'          => __( 'Add New Portfolio', 'istaqane' ),
		'new_item'              => __( 'New Portfolio', 'istaqane' ),
		'edit_item'             => __( 'Edit Portfolio', 'istaqane' ),
		'view_item'             => __( 'View Portfolio', 'istaqane' ),
		'all_items'             => __( 'All Portfolio', 'istaqane' ),
		'search_items'          => __( 'Search Portfolio', 'istaqane' ),
		'parent_item_colon'     => __( 'Parent Portfolios:', 'istaqane' ),
		'not_found'             => __( 'No Portfolios found.', 'istaqane' ),
		'not_found_in_trash'    => __( 'No Portfolios found in Trash.', 'istaqane' ),
		'featured_image'        => __( 'Portfolio Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'istaqane' ),
		'set_featured_image'    => __( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'istaqane' ),
		'remove_featured_image' => __( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'istaqane' ),
		'use_featured_image'    => __( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'istaqane' ),
		'archives'              => __( 'Portfolio archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'istaqane' ),
		'insert_into_item'      => __( 'Insert into Portfolio', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'istaqane' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Portfolio', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'istaqane' ),
		'filter_items_list'     => __( 'Filter Portfolios list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'istaqane' ),
		'items_list_navigation' => __( 'Portfolios list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'istaqane' ),
		'items_list'            => __( 'Portfolios list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'istaqane' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'portfolio' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'menu_icon'          => 'dashicons-slides',
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'),
	);

	register_post_type( 'Portfolio', $args );

	// register_taxonomy('Portfolio_cat', 'Portfolio', 
	// 	array(
	// 		'hierarchical'	=> true,
	// 		'label' 		=> 'Portfolio Category',
	// 		'query_var'		=> true,
	// 		'rewrite'		=> true
	// 	));
	// register_taxonomy('Portfolio_tags', 'Portfolio', 
	// array(
	// 	'hierarchical'	=> false,
	// 	'label' 		=> 'Portfolio Tags',
	// 	'query_var'		=> true,
	// 	'rewrite'		=> true
	// ));
	
}

add_action( 'init', 'solouster_custom_post_portfolio' );

