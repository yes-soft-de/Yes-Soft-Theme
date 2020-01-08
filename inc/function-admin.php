<?php
/*
	============================
		ADMIN FUNCTIONS PAGE
	============================
*/

function yes_soft_add_admin_page() {
	// Hook To Activate The Administrator Page
	add_menu_page(
		'Yes Soft Theme Option',
		'Yes Soft',
		'manage_options',
		'yes_soft_admin',
		'yes_soft_create_admin_page_callback',
		'',
		110
	);

	// Generate Admin Members Sub Pages
	add_submenu_page(
		'yes_soft_admin',
		'Yes Soft Members Options',
		'All Members',
		'manage_options',
		'yes_soft_admin',
		'yes_soft_create_admin_page_callback'
	);

	// Generate Admin Add Member Sub Pages
	add_submenu_page(
		'yes_soft_admin',
		'Yes Soft Add Member',
		'Add New',
		'manage_options',
		'yes_soft_add_member',
		'yes_soft_add_member_callback');

	// Activate Custom Settings
	add_action( 'admin_init', 'yes_soft_custom_settings' );
}
add_action( 'admin_menu', 'yes_soft_add_admin_page' );

// function to generate our admin html page
function yes_soft_create_admin_page_callback() {
//	require_once get_template_directory() . '/inc/template/yes-soft-admin-members.php';
	$labels = array(
		'name'              => 'Messages',
		'singular_name'     => 'Message',
		'menu_name'         => 'Messages',
		'name_admin_bar'    => 'Message'
	);
	$args = array(
		'labels'            => $labels,
		'show_ui'           => true,
		'show_in_menu'      => true,
		'capability_type'   => 'post',
		'hierarchical'      => false,
		'menu_position'     => 26,
		'menu_icon'         => 'dashicons-email-alt',
		'supports'          => array( 'title', 'editor', 'author' )
	);
	// Register Our Post Type
	register_post_type( 'sunset-contact', $args );
}

// function to generate add member page
function yes_soft_add_member_callback() {
	return;
}

// function related with the above admin_init hook
function yes_soft_custom_settings() {
}
