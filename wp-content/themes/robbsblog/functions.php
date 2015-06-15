<?php
	function register_my_menu() {
	  register_nav_menu('header-menu',__( 'Header Menu' ));
	}

	add_action( 'init', 'register_my_menu' );
	
	function special_nav_class($classes, $item){
		if( in_array('current-menu-item', $classes) ){
			$classes[] = 'active ';
		}
		return $classes;
	}

	add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

	function custom_theme_setup() {
		add_theme_support( 'post-thumbnails' ); 
	}

	set_post_thumbnail_size( 640, 360);

	add_action( 'after_setup_theme', 'custom_theme_setup' );