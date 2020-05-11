<?php
/*
	===============================
		THEME SUPPORT FUNCTIONS
	===============================
*/

// Register Theme Support For A given Feature
add_theme_support( 'post-thumbnails' );


	/*
	** Function To Add Custom Navigation Bar
	** Add By @Talal
	** register_nav_menu()
	*/
	function yes_soft_add_custom_nav()
	{
		register_nav_menus( array(
			'bootstrap-menu' => 'Navigation Bar',
			'footer-menu' => 'Footer Bar'
		) );
	}
	add_action( 'init', 'yes_soft_add_custom_nav' );

	/*
	** Function To Display The Navigation Bar
	** Add By @Talal
	** wp_nav_menu()
	*/
	function yes_soft_position_custom_nav()
	{
		wp_nav_menu( array(
			'theme_location' => 'bootstrap-menu',
			'menu_class' => 'navbar-nav ml-auto',
			'container' => false,
			'depth' => 2,
			'walker' => new wp_bootstrap_navwalker() // we change to underscore[ _ ] to accept it in object
		) );
	}


	/*
	** Function To Make Excerpt From Our Post Content
	** Add By @Talal
	** filter -> excerpt_length
	*/
	function yes_soft_post_content_excerpt_filter()
	{
		return 15;
	}
	add_filter( 'excerpt_length', 'yes_soft_post_content_excerpt_filter' );

	/*
	** Function To Edit The Extend Dot Filter
	** Add By @Talal
	** filter -> excerpt_more
	*/
	function yes_soft_post_content_extend_dot_filter()
	{
		return '...';
	}
	add_filter( 'excerpt_more', 'yes_soft_post_content_extend_dot_filter' );


	/*
	** Function To Create Pagination Number
	** Add By @Talal
	**
	*/
	function yes_soft_pagination_number()
	{
		global $wp_query; // Make WP_Query Global
		$all_page_number = $wp_query->max_num_pages; // Get All Posts
		$current_page_number = max(1, get_query_var('paged')); // Get Current Page
		// Check If There Is One Page Or More
		if ( $all_page_number > 1 ) {
			return paginate_links( array(
				'base'               => get_pagenum_link() . '%_%',
				'format'             => '?paged=%#%',
				'current'            => $current_page_number,
				'total'              => $all_page_number,
				'prev_text'          => '« '.pll_('Prev'),
				'next_text'          => pll_('Next').' »'
			) );
		}
	}



	/*
** Function To Create Pagination Number
** Add By @Talal
**
*/
	function yes_soft_media_post_pagination_number()
	{
	  $args = array( 'post_type'=>'media_post' );
		$wp_query = new WP_Query( $args );
		$all_page_number = $wp_query->max_num_pages; // Get All Posts
		$current_page_number = max(1, get_query_var('paged')); // Get Current Page

		// Check If There Is One Page Or More
		if ( $all_page_number > 1 ) {
			return paginate_links( array(
				'base'               => get_pagenum_link() . '%_%',
				'format'             => '?paged=%#%',
				'current'            => $current_page_number,
				'total'              => $all_page_number,
				'prev_text'          => '« '.pll_('Prev'),
				'next_text'          => pll_('Next').' »'
			) );
		}
		wp_reset_postdata();
	}


	/*
	 * Function To Add Knowledge Graph To Our Website
	 * Add By @Talal
	 */
	function yes_soft_add_knowledge_graph()
	{
		echo "\n<!-- KNOWLEDGE GRAPH -->";
		if (is_front_page( )) {
			echo '
        <script type="application/ld+json">
        {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "' . get_bloginfo('name') . '",
        "url": "' . get_site_url() . '",
        "logo": "' . get_template_directory_uri() . '/img/logo.svg",
        "description": "Yes-Soft is a software company that makes Commercial and Open-Source Software. We endeavor on highly proficient, timely delivered and cost effective software, web and mobile development services",
        "employees": [
            {
                "@type": "Person",
                "name": "Talal Danoun"
            },
            {
                "@type": "Person",
                "name": "Hammam Zarefa"
            },
            {
                "@type": "Person",
                "name": "Kenan Hussein"
            },
            {
                "@type": "Person",
                "name": "Qusai Ali"
            },
            {
                "@type": "Person",
                "name": "Osama Alhamoud"
            },
            {
                "@type": "Person",
                "name": "Mohammad Al Kalaleeb"
            },
            {
                "@type": "Person",
                "name": "Mahmoud Aldiek"
            },
            {
                "@type": "Person",
                "name": "Mujeeba Haj Najeeb"
            },
            {
                "@type": "Person",
                "name": "Hanan Al-Jarmakani"
            },
            {
                "@type": "Person",
                "name": "Nisreen Abu Zidan"
            },
            {
                "@type": "Person",
                "name": "Ahmad Mustafa"
            }
        ], 
        "sameAs" : [
            "https://www.facebook.com/Yes-soft-328738448051690",
            "https://www.linkedin.com/company/yes-soft",
            "https://www.twitter.com/yessoft0",
            "https://github.com/yes-soft-de/"
               
        ]}
        </script>';
		}
		echo "\n\n";
	}
	add_action('wp_head', 'yes_soft_add_knowledge_graph');


	/**
	 ** Function To Register New Sidebar
	 ** Add By @Talal
	 */
	function yes_soft_side_bar() {
		register_sidebar(array(
			'name'          => 'Main Sidebar',      // Your Optional Name Sidebar
			'id'            => 'main-sidebar',      // ID should be LOWERCASE  ! ! !
			'description'   => 'Main Sidebar Appear Every Where', // any description from your mine
			'class'         => 'main-sidebar',
			'before_widget' => '<div class="widget-content">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>'
		));
	}
// Add Our Action
	add_action('widgets_init', 'yes_soft_side_bar');


	/**
	 ** Function To Remove Tag p from the_content function
	 ** Add By @Talal
	 */
	function yes_soft_remove_paragraph( $content ) {
	    remove_filter('the_content', 'wpautop'); // remove the filter wpautop
	    return $content;
	}
	add_filter('the_content', 'yes_soft_remove_paragraph', 0);


/*
 * Function To Get The Custom Taxonomies For Our Custom Post Type
 * Add By @Talal
 */
function yes_soft_get_terms( $postID, $term ){

	$terms_list = wp_get_post_terms( $postID, $term );
	$output = '';

	$i = 0;
	foreach ( $terms_list as $item ) {
		$i++;
		if ( $i > 1 ) { $output .= ', '; }
		$output .= '<a href="' . get_term_link( $item ) . '">'. $item->name .'</a>';
	}
	return $output;
}


/*
 * Function to fetch our attachment image
 * Add By @Talal
 */
function yes_soft_get_attachments( $attachmentNumber = 1 ) {
	$output = '';
	if ( has_post_thumbnail() && $attachmentNumber == 1 ):
		$output = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
	else:
		$attachments = get_posts( array(
			'post_type'   => 'attachment',
			'posts_per_page' => $attachmentNumber,
			'post_parent'   => get_the_ID()
		) );
		if ( $attachments && $attachmentNumber == 1 ):
			foreach ( $attachments as $attachment):
				$output = wp_get_attachment_url( $attachment->ID );
			endforeach;
		elseif ( $attachments && $attachmentNumber > 1 ):
			$output = $attachments;
		endif;
		wp_reset_postdata();
	endif;
	return $output;
}



// Initialize global Mobile Detect
function mobileDetectGlobal() {
	global $detect;
	$detect = new Mobile_Detect;
}
add_action('after_setup_theme', 'mobileDetectGlobal');
