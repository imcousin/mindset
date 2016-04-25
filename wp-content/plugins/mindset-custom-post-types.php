<?php

/* 
 * Plugin Name: Mindset Custom Post Types
 * Description: Mindset CPTs for Work and other specific content types
 * Version: 1.0
 * Author: Beata Kozma
 * Licence: GPL2
 */



//CPT for Mindset Theme
    function mindset_register_custom_post_types() {
        
        //Work CPT starts
	$labels = array(
		'name'               => _x( 'Works', 'post type general name' ),
		'singular_name'      => _x( 'Work', 'post type singular name'),
		'menu_name'          => _x( 'Works', 'admin menu' ),
		'name_admin_bar'     => _x( 'Work', 'add new on admin bar' ),
		'add_new'            => _x( 'Add New', 'work' ),
		'add_new_item'       => __( 'Add New Work' ),
		'new_item'           => __( 'New Work' ),
		'edit_item'          => __( 'Edit Work' ),
		'view_item'          => __( 'View Work' ),
		'all_items'          => __( 'All Works' ),
		'search_items'       => __( 'Search Works' ),
		'parent_item_colon'  => __( 'Parent Works:' ),
		'not_found'          => __( 'No works found.' ),
		'not_found_in_trash' => __( 'No works found in Trash.' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'works' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
                'menu_icon'          => 'dashicons-archive',
		'supports'           => array( 'title', 'thumbnail', 'editor' )
	);
	register_post_type( 'work', $args );
        //Work CPT ends
        
        
        //Service CPT starts
	$labels = array(
		'name'               => _x( 'Services', 'post type general name' ),
		'singular_name'      => _x( 'Service', 'post type singular name'),
		'menu_name'          => _x( 'Services', 'admin menu' ),
		'name_admin_bar'     => _x( 'Service', 'add new on admin bar' ),
		'add_new'            => _x( 'Add New', 'service' ),
		'add_new_item'       => __( 'Add New Service' ),
		'new_item'           => __( 'New Service' ),
		'edit_item'          => __( 'Edit Service' ),
		'view_item'          => __( 'View Service' ),
		'all_items'          => __( 'All Services' ),
		'search_items'       => __( 'Search Services' ),
		'parent_item_colon'  => __( 'Parent Services:' ),
		'not_found'          => __( 'No services found.' ),
		'not_found_in_trash' => __( 'No services found in Trash.' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'services' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
                'menu_icon'          => 'dashicons-align-none',
		'supports'           => array( 'title', 'editor' )
	);
	register_post_type( 'service', $args );
        //Service CPT ends
       
        //Compliment CPT starts
	$labels = array(
		'name'               => _x( 'Compliments', 'post type general name' ),
		'singular_name'      => _x( 'Compliment', 'post type singular name'),
		'menu_name'          => _x( 'Compliments', 'admin menu' ),
		'name_admin_bar'     => _x( 'Compliment', 'add new on admin bar' ),
		'add_new'            => _x( 'Add New', 'compliment' ),
		'add_new_item'       => __( 'Add New Compliment' ),
		'new_item'           => __( 'New Compliment' ),
		'edit_item'          => __( 'Edit Compliment' ),
		'view_item'          => __( 'View Compliment' ),
		'all_items'          => __( 'All Compliments' ),
		'search_items'       => __( 'Search Compliments' ),
		'parent_item_colon'  => __( 'Parent Compliments:' ),
		'not_found'          => __( 'No compliments found.' ),
		'not_found_in_trash' => __( 'No compliments found in Trash.' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'compliments' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
                'menu_icon'          => 'dashicons-heart',
		'supports'           => array( 'title' )
	);
	register_post_type( 'compliment', $args );
        //Compliment CPT ends
        //
        //Partner starts
      $labels = array(
		'name'               => _x( 'Partner Links', 'post type general name'  ),
		'singular_name'      => _x( 'Partner Link', 'post type singular name'  ),
		'menu_name'          => _x( 'Partner Links', 'admin menu'  ),
		'name_admin_bar'     => _x( 'Partner Link', 'add new on admin bar' ),
		'add_new'            => _x( 'Add New', 'link' ),
		'add_new_item'       => __( 'Add New Link' ),
		'new_item'           => __( 'New Link' ),
		'edit_item'          => __( 'Edit Link' ),
		'view_item'          => __( 'View Link'  ),
		'all_items'          => __( 'All Links' ),
		'search_items'       => __( 'Search Links' ),
		'parent_item_colon'  => __( 'Parent Links:' ),
		'not_found'          => __( 'No Links found.' ),
		'not_found_in_trash' => __( 'No Links found in Trash.' ),
	);

    $args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'partner-links' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
                'menu_icon'          => 'dashicons-smiley',
		'supports'           => array( 'title' )
	);
    register_post_type( 'partner-link', $args );   
        //Partner ends
        
    }
    add_action( 'init', 'mindset_register_custom_post_types' );
    
    
    //Rewite flush for CPTs
    function mindset_rewrite_flush() {
        mindset_register_custom_post_types();
        flush_rewrite_rules();
    }
    register_activation_hook( __FILE__, 'mindset_rewrite_flush' );




function mindset_register_taxonomies() {
        // Add Work Type taxonomy - hierarchical (like categories)
        $labels = array(
         'name'              => _x( 'Work Types', 'taxonomy general name' ),
         'singular_name'     => _x( 'Work Type', 'taxonomy singular name' ),
         'search_items'      => __( 'Search Work Types' ),
         'all_items'         => __( 'All Work Types' ),
         'parent_item'       => __( 'Parent Work Type' ),
         'parent_item_colon' => __( 'Parent Work Type:' ),
         'edit_item'         => __( 'Edit Work Type' ),
         'update_item'       => __( 'Update Work Type' ),
         'add_new_item'      => __( 'Add New Work Type' ),
         'new_item_name'     => __( 'New Work Type Name' ),
         'menu_name'         => __( 'Work Type' ),
        );
        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'work-types' ),
        );
        register_taxonomy( 'work-type', array( 'work' ), $args );  
        // (name, which custom post type, $arg)  

   // Add Featured taxonomy
        $labels = array(
         'name'              => _x( 'Featured', 'taxonomy general name' ),
         'singular_name'     => _x( 'Featured', 'taxonomy singular name' ),
         'search_items'      => __( 'Search Featured' ),
         'all_items'         => __( 'All Featured' ),
         'parent_item'       => __( 'Parent Featured' ),
         'parent_item_colon' => __( 'Parent Featured:' ),
         'edit_item'         => __( 'Edit Featured' ),
         'update_item'       => __( 'Update Featured' ),
         'add_new_item'      => __( 'Add New Featured' ),
         'new_item_name'     => __( 'New Work Featured' ),
         'menu_name'         => __( 'Featured' ),
        );
        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'featured' ),
        );
        register_taxonomy( 'featured', array( 'work' ), $args );  

   // Add partnerlink taxonomy
        $labels = array(
         'name'              => _x( 'Partner Types', 'taxonomy general name' ),
         'singular_name'     => _x( 'Partner Types', 'taxonomy singular name' ),
         'search_items'      => __( 'Search Partner Types' ),
         'all_items'         => __( 'All Partner Types' ),
         'parent_item'       => __( 'Parent Partner Types' ),
         'parent_item_colon' => __( 'Parent Partner Types:' ),
         'edit_item'         => __( 'Edit Partner Types' ),
         'update_item'       => __( 'Update Partner Types' ),
         'add_new_item'      => __( 'Add New Partner Types' ),
         'new_item_name'     => __( 'New Work Partner Types' ),
         'menu_name'         => __( 'Partner Types' ),
        );
        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'Partner Types' ),
        );
        register_taxonomy( 'partner-type', array( 'partner-link' ), $args ); 



    }
    add_action( 'init', 'mindset_register_taxonomies', 0 );
	

	// http://wordpress.stackexchange.com/questions/9968/how-do-i-create-a-featured-post-within-a-custom-post-type