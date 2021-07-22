<?php

// hook into the init action and call custom_post_product when it fires to register sutom post type products

	add_action( 'init', 'custom_post_product' );
   
	function custom_post_product() {
		$labels = array(
		  'name'               => _x( 'Products', 'post type general name' ),
		  'singular_name'      => _x( 'Product', 'post type singular name' ),
		  'add_new'            => _x( 'Add New', 'book' ),
		  'add_new_item'       => __( 'Add New Product' ),
		  'edit_item'          => __( 'Edit Product' ),
		  'new_item'           => __( 'New Product' ),
		  'all_items'          => __( 'All Products' ),
		  'view_item'          => __( 'View Product' ),
		  'search_items'       => __( 'Search Products' ),
		  'not_found'          => __( 'No products found' ),
		  'not_found_in_trash' => __( 'No products found in the Trash' ), 
		  'parent_item_colon'  => ’,
		  'menu_name'          => 'Products'
		);
		$args = array(
		  'labels'        => $labels,
		  'description'   => 'Product Listing Page',
		  'public'        => true,
		  'menu_position' => 5,
		  'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		  'has_archive'   => true,
		);
		register_post_type( 'product', $args ); 
	}
