<?php
// hook into the init action and call product_category when it fires to register taxonomy

add_action( 'init', 'product_category', 0 );
function product_category() {
$labels = array(
    'name'              => _x( 'Categories', 'taxonomy general name' ),
    'singular_name'     => _x( 'category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Categories' ),
    'all_items'         => __( 'All Categories' ),
    'parent_item'       => __( 'Parent Categories' ),
    'parent_item_colon' => __( 'Parent Categories:' ),
    'edit_item'         => __( 'Edit Categories' ),
    'update_item'       => __( 'Update Categories' ),
    'add_new_item'      => __( 'Add New Category' ),
    'new_item_name'     => __( 'New Category Name' ),
    'menu_name'         => __( 'Categories' ),
  );

   $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'product_category' ),
);
register_taxonomy( 'product_category', array( 'product' ), $args );
}
?>