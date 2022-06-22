<?php
function p($data, $flag = 0){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    if($flag) die;
}

if(!function_exists('getProductCategories')){
    function getProductCategories(){
        $data = get_terms( array(
            'taxonomy' => 'products_category',
            'hide_empty' => false,
            'orderby' => 'name',
            'order' => 'ASC',
        ) );
        return $data;
    }
}

register_nav_menus( 
    [
        'primary-menu' => 'Top Menu'
    ]
    );

add_theme_support('post-thumbnails');
		// Register Custom Post Type Product Category
	// Register Custom Post Type Product Category
	

if(!function_exists('get_other_address')){
    function get_other_address(){
        $args = array(  
            'post_type' => 'otheraddress',
            'post_status' => 'publish',
            'orderby' => 'title', 
            'order' => 'ASC', 
        );
    
        $data = new WP_Query( $args ); 
        return($data);
    }
}