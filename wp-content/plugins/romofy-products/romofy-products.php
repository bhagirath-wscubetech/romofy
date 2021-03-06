<?php
//Plugin Name: Romofy Product
function create_product_cpt() {

    $labels = array(
        'name' => _x( 'Product', 'Post Type General Name', 'textdomain' ),
        'singular_name' => _x( 'Product', 'Post Type Singular Name', 'textdomain' ),
        'menu_name' => _x( 'Product', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar' => _x( 'Product', 'Add New on Toolbar', 'textdomain' ),
        'archives' => __( 'Product Archives', 'textdomain' ),
        'attributes' => __( 'Product Attributes', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Product:', 'textdomain' ),
        'all_items' => __( 'All Product', 'textdomain' ),
        'add_new_item' => __( 'Add New Product', 'textdomain' ),
        'add_new' => __( 'Add New', 'textdomain' ),
        'new_item' => __( 'New Product', 'textdomain' ),
        'edit_item' => __( 'Edit Product', 'textdomain' ),
        'update_item' => __( 'Update Product', 'textdomain' ),
        'view_item' => __( 'View Product', 'textdomain' ),
        'view_items' => __( 'View Product', 'textdomain' ),
        'search_items' => __( 'Search Product', 'textdomain' ),
        'not_found' => __( 'Not found', 'textdomain' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
        'featured_image' => __( 'Featured Image', 'textdomain' ),
        'set_featured_image' => __( 'Set featured image', 'textdomain' ),
        'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
        'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
        'insert_into_item' => __( 'Insert into Product', 'textdomain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Product', 'textdomain' ),
        'items_list' => __( 'Product list', 'textdomain' ),
        'items_list_navigation' => __( 'Product list navigation', 'textdomain' ),
        'filter_items_list' => __( 'Filter Product list', 'textdomain' ),
    );
    $args = array(
        'label' => __( 'Product', 'textdomain' ),
        'description' => __( 'This is the of products', 'textdomain' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-products',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'taxonomies' => array(),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'hierarchical' => true,
        'exclude_from_search' => false,
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type( 'product', $args );

}
add_action( 'init', 'create_product_cpt', 0 );



//hook into the init action and call create_book_taxonomies when it fires
 
add_action( 'init', 'create_subjects_hierarchical_taxonomy', 0 );
 
//create a custom taxonomy name it subjects for your posts
 
function create_subjects_hierarchical_taxonomy() {
  // taxanomy-products_category
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
 
  $labels = array(
    'name' => _x( 'Products Category', 'taxonomy general name' ),
    'singular_name' => _x( 'Product Category', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Products Category' ),
    'all_items' => __( 'All Product Categories' ),
    'parent_item' => __( 'Parent Product Category' ),
    'parent_item_colon' => __( 'Parent Product Category:' ),
    'edit_item' => __( 'Edit Product Category' ), 
    'update_item' => __( 'Update Product Category' ),
    'add_new_item' => __( 'Add New Product Category' ),
    'new_item_name' => __( 'New Product Category Name' ),
    'menu_name' => __( 'Product Category' ),
  );    
 
// Now register the taxonomy
  register_taxonomy('products_category',array('product'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'product-category' ),
  ));
 
}
?>