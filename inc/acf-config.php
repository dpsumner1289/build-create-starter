<?php
/* ====================================================
** Including Advanced Custom Fields
====================================================== */

	// 1. customize ACF path
	add_filter('acf/settings/path', 'my_acf_settings_path'); 
	function my_acf_settings_path( $path ) { 
		// update path
		$path = get_stylesheet_directory() . '/acf/';    
		// return
		return $path;    
	} 

	// 2. customize ACF dir
	add_filter('acf/settings/dir', 'my_acf_settings_dir'); 
	function my_acf_settings_dir( $dir ) { 
		// update path
		$dir = get_stylesheet_directory_uri() . '/acf/';    
		// return
		return $dir;    
	} 

	// 3. Include ACF
	include_once( get_stylesheet_directory() . '/acf/acf.php' );
	
/* ====================================================
** Create Options Page
====================================================== */

	if( function_exists('acf_add_options_page') ) {			
		
		//Adds Theme Options
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Options',
			'menu_title'	=> 'Theme Options',
			'parent_slug'	=> 'themes.php',
		));		
		
		
	}