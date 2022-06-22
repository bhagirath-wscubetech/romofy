<?php
//Plugin Name: Custom Awards
function create_awards_cpt() {

    $labels = array(
        'name' => _x( 'Award', 'Post Type General Name', 'textdomain' ),
        'singular_name' => _x( 'Award', 'Post Type Singular Name', 'textdomain' ),
        'menu_name' => _x( 'Award', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar' => _x( 'Award', 'Add New on Toolbar', 'textdomain' ),
        'archives' => __( 'Award Archives', 'textdomain' ),
        'attributes' => __( 'Award Attributes', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Award:', 'textdomain' ),
        'all_items' => __( 'All Award', 'textdomain' ),
        'add_new_item' => __( 'Add New Award', 'textdomain' ),
        'add_new' => __( 'Add New', 'textdomain' ),
        'new_item' => __( 'New Award', 'textdomain' ),
        'edit_item' => __( 'Edit Award', 'textdomain' ),
        'update_item' => __( 'Update Award', 'textdomain' ),
        'view_item' => __( 'View Award', 'textdomain' ),
        'view_items' => __( 'View Award', 'textdomain' ),
        'search_items' => __( 'Search Award', 'textdomain' ),
        'not_found' => __( 'Not found', 'textdomain' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
        'featured_image' => __( 'Featured Image', 'textdomain' ),
        'set_featured_image' => __( 'Set featured image', 'textdomain' ),
        'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
        'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
        'insert_into_item' => __( 'Insert into award', 'textdomain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Award', 'textdomain' ),
        'items_list' => __( 'Award list', 'textdomain' ),
        'items_list_navigation' => __( 'Award list navigation', 'textdomain' ),
        'filter_items_list' => __( 'Filter award list', 'textdomain' ),
    );
    $args = array(
        'label' => __( 'Award', 'textdomain' ),
        'description' => __( 'This is the of awards', 'textdomain' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-awards',
        'supports' => array('title', 'thumbnail', 'custom-fields'),
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
    register_post_type( 'award', $args );

}
add_action( 'init', 'create_awards_cpt', 0 );


?>