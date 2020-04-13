<?php
/*
	===============================
		ENQUEUE FUNCTIONS
	===============================
*/

	/*
	** function to add frontend files
	** Add By @Talal
	** wp_enqueue_style, wp_enqueue_script
	*/
	function yes_soft_load_frontend_scripts() {
		// Check IF The Theme Is Rtl Or Not
		if ( is_rtl() ) {   // Enqueue Style Files For rtl Direction
			wp_enqueue_style( 'bootstrap-rtl-css', get_template_directory_uri() . '/css/bootstrap-rtl.css' );
			wp_enqueue_style( 'all-rtl-css', get_template_directory_uri() . '/css/all.min.css' );
			wp_enqueue_style( 'slick-rtl-css', get_template_directory_uri() . '/css/slick.min.css' );
			wp_enqueue_style( 'slick-rtl-theme', get_template_directory_uri() . '/css/slick-theme.min.css' );
			// wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/css/custom.min.css' );
			wp_enqueue_style( 'new-rtl-css', get_template_directory_uri() . '/css/custom-rtl.css' );
		} else {  // Enqueue Style Files For ltr Direction
			wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
			wp_enqueue_style( 'all-css', get_template_directory_uri() . '/css/all.min.css' );
			wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/css/slick.min.css' );
			wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/css/slick-theme.min.css' );
//			wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/css/custom.min.css' );
			wp_enqueue_style( 'new-css', get_template_directory_uri() . '/css/custom.css' );
		}
		// Enqueue Font Family
		wp_enqueue_style( 'font-family', get_template_directory_uri() . '/css/font-family.min.css' );

		// Popper Library For Bootstrap
		wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', array(), false, true );
		wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/js/slick.min.js', array(), false, true );
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
	add_action( 'wp_enqueue_scripts', 'yes_soft_load_frontend_scripts' );
