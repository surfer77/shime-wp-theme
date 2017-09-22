<?php 

	function register_my_menu() {
		add_theme_support('post-thumbnails');

	  register_nav_menu('primary-menu',__( 'Primary Menu' ));
	}
	

	add_action( 'init', 'register_my_menu' );
	// add_action('after_setup_theme', 'register_my_menu' );