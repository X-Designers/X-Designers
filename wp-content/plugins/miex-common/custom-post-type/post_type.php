<?php
// register post type Portfolio
add_action( 'init', 'register_miex_Portfolio' );
function register_miex_Portfolio() {
    
    $labels = array( 
        'name' => __( 'Portfolio', 'miex' ),
        'singular_name' => __( 'Portfolio', 'miex' ),
        'add_new' => __( 'Add New Portfolio', 'miex' ),
        'add_new_item' => __( 'Add New Portfolio', 'miex' ),
        'edit_item' => __( 'Edit Portfolio', 'miex' ),
        'new_item' => __( 'New Portfolio', 'miex' ),
        'view_item' => __( 'View Portfolio', 'miex' ),
        'search_items' => __( 'Search Portfolio', 'miex' ),
        'not_found' => __( 'No Portfolio found', 'miex' ),
        'not_found_in_trash' => __( 'No Portfolio found in Trash', 'miex' ),
        'parent_item_colon' => __( 'Parent Portfolio:', 'miex' ),
        'menu_name' => __( 'Portfolio', 'miex' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'List Portfolio',
        'supports' => array( 'title', 'editor', 'thumbnail', 'comments'),
        'taxonomies' => array( 'Portfolio', 'type' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => get_stylesheet_directory_uri(). '/img/admin_ico.png', 
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'Portfolio', $args );
}
add_action( 'init', 'create_Type_hierarchical_taxonomy', 0 );

//create a custom taxonomy name it Skillss for your posts

function create_Type_hierarchical_taxonomy() {

// Add new taxonomy, make it hierarchical like Skills
//first do the translations part for GUI

  $labels = array(
    'name' => __( 'Type', 'miex' ),
    'singular_name' => __( 'Type', 'miex' ),
    'search_items' =>  __( 'Search Type','miex' ),
    'all_items' => __( 'All Type','miex' ),
    'parent_item' => __( 'Parent Type','miex' ),
    'parent_item_colon' => __( 'Parent Type:','miex' ),
    'edit_item' => __( 'Edit Type','miex' ), 
    'update_item' => __( 'Update Type','miex' ),
    'add_new_item' => __( 'Add New Type','miex' ),
    'new_item_name' => __( 'New Type Name','miex' ),
    'menu_name' => __( 'Type','miex' ),
  );     

// Now register the taxonomy

  register_taxonomy('type',array('Portfolio',), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'type' ),
  ));

}

add_action( 'init', 'register_miex_Portfolio2' );
function register_miex_Portfolio2() {
    
    $labels = array( 
        'name' => __( 'Portfolio2', 'miex' ),
        'singular_name' => __( 'Portfolio2', 'miex' ),
        'add_new' => __( 'Add New Portfolio2', 'miex' ),
        'add_new_item' => __( 'Add New Portfolio2', 'miex' ),
        'edit_item' => __( 'Edit Portfolio2', 'miex' ),
        'new_item' => __( 'New Portfolio2', 'miex' ),
        'view_item' => __( 'View Portfolio2', 'miex' ),
        'search_items' => __( 'Search Portfolio2', 'miex' ),
        'not_found' => __( 'No Portfolio2 found', 'miex' ),
        'not_found_in_trash' => __( 'No Portfolio2 found in Trash', 'miex' ),
        'parent_item_colon' => __( 'Parent Portfolio2:', 'miex' ),
        'menu_name' => __( 'Portfolio2', 'miex' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical1' => true,
        'description' => 'List Portfolio2',
        'supports' => array( 'title', 'editor', 'thumbnail', 'comments'),
        'taxonomies' => array( 'Portfolio2', 'type1' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => get_stylesheet_directory_uri(). '/img/admin_ico.png', 
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'Portfolio2', $args );
}
add_action( 'init', 'create_Type1_hierarchical1_taxonomy', 0 );

//create a custom taxonomy name it Skillss for your posts

function create_Type1_hierarchical1_taxonomy() {

// Add new taxonomy, make it hierarchical like Skills
//first do the translations part for GUI

  $labels = array(
    'name' => __( 'Type1', 'miex' ),
    'singular_name' => __( 'Type1', 'miex' ),
    'search_items' =>  __( 'Search Type1','miex' ),
    'all_items' => __( 'All Type1','miex' ),
    'parent_item' => __( 'Parent Type1','miex' ),
    'parent_item_colon' => __( 'Parent Type1:','miex' ),
    'edit_item' => __( 'Edit Type1','miex' ), 
    'update_item' => __( 'Update Type1','miex' ),
    'add_new_item' => __( 'Add New Type1','miex' ),
    'new_item_name' => __( 'New Type1 Name','miex' ),
    'menu_name' => __( 'Type1','miex' ),
  );     

// Now register the taxonomy

  register_taxonomy('type1',array('Portfolio2',), array(
    'hierarchical1' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'type1' ),
  ));

}

?>