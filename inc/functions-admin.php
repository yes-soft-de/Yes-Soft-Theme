<?php
/*
	===============================
		ADMIN FUNCTIONS
	===============================
*/

/*
 * Function To Add Custom Post Type Inside Our Dashboard
 * Add By @Talal
 */
function yes_soft_custom_post_type() {
	// All Post Labels
	$label = array(
		'name'                => 'Media Posts',
		'singular_name'       => 'Media Post',
		'add_new'             => 'Add New',
		'all_items'           => 'All Media Posts',
		'add_new_item'        => 'Add New',
		'new_item'            => 'New Media Post',
		'view_item'           => 'View Media Post',
		'search_items'         => 'Search Media Post',
		'not_found'           => 'No Media Post Found',
		'not_found_in_trash'  => 'Not Media Post Found In Trash',
		'parent_item_colon'   => 'Parent Media Post'
	);
	$args = array(
		'labels'              => $label,
		'public'              => true,
		'has_archive'         => true,
		'publicly_queryable'  => true,
		'query_var'           => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'menu_icon'           => 'dashicons-video-alt3',
		'hierarchical'        => false,
//		'taxonomies'          => array( 'category', 'post_tag' ),
		'menu_position'       => 5,
		'exclude_from_search' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
			'comments'
		)
	);
	register_post_type( 'media_post', $args );
}
add_action( 'init', 'yes_soft_custom_post_type' );


/*
 * Function To Add New Taxonomy Hierarchical And NOT Hierarchical
 * Add By @Talal
 */
function yes_soft_custom_taxonomies() {

	//add new taxonomy hierarchical
	$labels = array(
		'name' => 'Media Category',
		'singular_name' => 'Media Category',
		'search_items' => 'Search Media Categories',
		'all_items' => 'All Media Categories',
		'parent_item' => 'Parent Media Category',
		'parent_item_colon' => 'Parent Media Category:',
		'edit_item' => 'Edit Media Category',
		'update_item' => 'Update Media Category',
		'add_new_item' => 'Add New Media Category',
		'new_item_name' => 'New Media Category Name',
		'menu_name' => 'Media Categories'
	);

	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'media_category' )
	);

	register_taxonomy('media_category', array('media_post'), $args);

	//add new taxonomy NOT hierarchical

	register_taxonomy('media_tag', 'media_post', array(
		'label' => 'Media Tag',
		'rewrite' => array( 'slug' => 'media_tag' ),
		'hierarchical' => false
	) );
}
add_action( 'init' , 'yes_soft_custom_taxonomies' );
