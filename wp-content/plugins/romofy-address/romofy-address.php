<?php
//Plugin Name: Romofy Other Addresess
function create_other_addresses_cpt() {

    $labels = array(
        'name' => _x( 'Other Address', 'Post Type General Name', 'textdomain' ),
        'singular_name' => _x( 'Other Address', 'Post Type Singular Name', 'textdomain' ),
        'menu_name' => _x( 'Other Address', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar' => _x( 'Other Address', 'Add New on Toolbar', 'textdomain' ),
        'archives' => __( 'Other Address Archives', 'textdomain' ),
        'attributes' => __( 'Other Address Attributes', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Other Address:', 'textdomain' ),
        'all_items' => __( 'All Other Address', 'textdomain' ),
        'add_new_item' => __( 'Add New Other Address', 'textdomain' ),
        'add_new' => __( 'Add New', 'textdomain' ),
        'new_item' => __( 'New Other Address', 'textdomain' ),
        'edit_item' => __( 'Edit Other Address', 'textdomain' ),
        'update_item' => __( 'Update Other Address', 'textdomain' ),
        'view_item' => __( 'View Other Address', 'textdomain' ),
        'view_items' => __( 'View Other Address', 'textdomain' ),
        'search_items' => __( 'Search Other Address', 'textdomain' ),
        'not_found' => __( 'Not found', 'textdomain' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
        'featured_image' => __( 'Featured Image', 'textdomain' ),
        'set_featured_image' => __( 'Set featured image', 'textdomain' ),
        'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
        'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
        'insert_into_item' => __( 'Insert into Other Address', 'textdomain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Other Address', 'textdomain' ),
        'items_list' => __( 'Other Address list', 'textdomain' ),
        'items_list_navigation' => __( 'Other Address list navigation', 'textdomain' ),
        'filter_items_list' => __( 'Filter Other Address list', 'textdomain' ),
    );
    $args = array(
        'label' => __( 'Other Address', 'textdomain' ),
        'description' => __( 'This is the of Other Addresses', 'textdomain' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-post-status',
        'supports' => array('title','custom-fields'),
        'taxonomies' => array(),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type( 'Other Address', $args );

}
add_action( 'init', 'create_other_addresses_cpt', 0 );


?>