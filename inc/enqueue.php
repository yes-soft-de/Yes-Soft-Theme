<?php
/*
	===============================
		ENQUEUE FUNCTIONS
	===============================
*/

	/*
	** function to add styles files
	** Add By @Talal
	** wp_enqueue_style
	*/
	function my_theme_enqueue_styles() {
		wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
		// wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css?family=Fredoka+One' );
		// font awesome library
		wp_enqueue_style( 'all-css', get_template_directory_uri() . '/css/all.min.css' );
		// Slick Jquery Plugin
		wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/css/slick.min.css' );
		wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/css/slick-theme.min.css' );
//    wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/css/custom.min.css' );
		wp_enqueue_style( 'new-css', get_template_directory_uri() . '/css/custom.css' );
		wp_enqueue_style( 'font-family', get_template_directory_uri() . '/css/font-family.min.css' );
	}

	/*
	** function to add scripts files
	** Add By @Talal
	** wp_enqueue_script
	*/
	function my_theme_enqueue_scripts() {
		wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', array(), false, true );
		wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/js/slick.min.js', array(), false, true );
		// Popper Library For Bootstrap
		wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/js/popper.min.js', array(), false, true );
		wp_enqueue_script( 'bootstrap-js', get_Template_directory_uri() . '/js/bootstrap.min.js', array(), false, true );
		wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array(), false, true );
		// add condition for internet explorer 9 and less
		wp_enqueue_script( 'html5shiv-js', get_template_directory_uri() . '/js/html5shiv.min.js' );
		wp_script_add_data( 'html5shiv-js', 'conditional', 'lt it 9' );
		// add condition for internet explorer 9 and less
		wp_enqueue_script( 'respond-js', get_template_directory() . '/js/respond.min.js' );
		wp_script_add_data( 'respond-js', 'conditional', 'lt it 9' );
	}

	/*
	** Hook Section For Enqueue Our Style And Script FIle
	** Add By @Talal
	*/
	add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );    // hook for add css style file
	add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_scripts' );
