<?php

function location_post_type_init() {
    $labels = array(
        'name'                  => _x( 'Our Locations', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Location', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Our Locations', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Location', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New Location', 'textdomain' ),
        'new_item'              => __( 'New Location', 'textdomain' ),
        'edit_item'             => __( 'Edit Location', 'textdomain' ),
        'view_item'             => __( 'View Location', 'textdomain' ),
        'all_items'             => __( 'All Locations', 'textdomain' ),
        'search_items'          => __( 'Search Locations', 'textdomain' ),
        'not_found'             => __( 'No locations found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No locations found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'Location Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set location image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove location image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as location image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Location archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into location', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this location', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter locations list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'Locations list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'Locations list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'       => 'dashicons-location',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'location' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
    );
    register_post_type( 'location', $args );
  }
  add_action( 'init', 'location_post_type_init' );