<?php

function focal_point_type_init() {
    $labels = array(
        'name'                  => _x( 'Focal Point Issues', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Focal Point Issue', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Focal Point Issues', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Focal Point Issue', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New Issue', 'textdomain' ),
        'new_item'              => __( 'New Issue', 'textdomain' ),
        'edit_item'             => __( 'Edit Issue', 'textdomain' ),
        'view_item'             => __( 'View Issue', 'textdomain' ),
        'all_items'             => __( 'All Issues', 'textdomain' ),
        'search_items'          => __( 'Search Issues', 'textdomain' ),
        'not_found'             => __( 'No issues found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No issues found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'Issue Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set issue image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove issue image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as issue image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Issue archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into issue', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this issue', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter issues list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'Issues list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'Issues list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'       => 'dashicons-media-document',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'issue' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
    );
    register_post_type( 'issue', $args );
  }
  add_action( 'init', 'focal_point_type_init' );