<?php
	function myTheme_theme_support() {
		add_theme_support( 'title-tag' );
		add_theme_support('custom-logo');
		add_theme_support('post-thumbnails');
	}
	
	add_action( 'after_setup_theme', 'myTheme_theme_support' );
	
	function myTheme_register_styles() {
		$version = wp_get_theme()->get( 'Version' );
		wp_enqueue_style( 'my_theme-style', get_template_directory_uri() . '/style.css', array( 'my_theme-bootstrap' ), $version, 'all' );
		wp_enqueue_style( 'my_theme-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all' );
		wp_enqueue_style( 'my_theme-animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css', array(), '3.7.2', 'all' );
	}
	
	add_action( 'wp_enqueue_scripts', 'myTheme_register_styles' );
	
	function myTheme_register_scripts() {
		wp_enqueue_script( 'my_theme-jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', array(), '3.2.1', true );
		wp_enqueue_script( 'my_theme-ajax', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), '1.12.9', true );
		wp_enqueue_script( 'my_theme-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array(), '4.0.0', true );
		wp_enqueue_script( 'my_theme-scroll-out', 'https://unpkg.com/scroll-out/dist/scroll-out.min.js', array(), '1', true );
		wp_enqueue_script( 'my_theme-fontawesome', 'https://kit.fontawesome.com/c776f8e511.js', array(), '1', true );
		wp_enqueue_script( 'my_theme-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
	}
	
	add_action( 'wp_enqueue_scripts', 'myTheme_register_scripts' );
	
	
	function myTheme_menus() {
		$location = array(
			'primary' => 'Desktop Primary Left Sidebar',
			'footer'  => 'Footer Menu Items'
		);

		register_nav_menus( $location );
	}

	add_action( 'init', 'myTheme_menus' );