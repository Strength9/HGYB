<?php

define( 'xray_VERSION', 1.0 ); // Define the version so we can easily replace it throughout the theme

$SiteName = 'HGYB';
$settingslink = 'site-settings';


require_once(dirname(__FILE__) . '/assets/acf_functions.php');
require_once(dirname(__FILE__) . '/assets/custom_wordpressfunctions.php');
/*-----------------------------------------------------------------------------------*/
/* Remove the auto p tag removal
/*-----------------------------------------------------------------------------------*/

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );


/*-----------------------------------------------------------------------------------*/
/* Set Theme Supports
/*-----------------------------------------------------------------------------------*/
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'menus' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'editor-styles' ); 
	add_editor_style( 'style-editor.css' );

	// Woocomerce Support For the image gallerys and sliders
	add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

	function xray_add_woocommerce_support() {
		add_theme_support( 'woocommerce' );
	}
	add_action( 'after_setup_theme', 'xray_add_woocommerce_support' );  

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
}

//* Add new image size
add_image_size( 'category-thumb', 313, 380, true );

function post_image_sizes($sizes){
	$custom_sizes = array(
		'category-thumb' => 'Category Thumb'
	);
	return array_merge( $sizes, $custom_sizes );
}
add_filter('image_size_names_choose', 'post_image_sizes');


/*-----------------------------------------------------------------------------------*/
/* WordPress Clean Ups
/*-----------------------------------------------------------------------------------*/
		function website_remove_version() { return ''; }

		remove_action('wp_head', 'rest_output_link_wp_head', 10);
		remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
		remove_action('template_redirect', 'rest_output_link_header', 11, 0);
		remove_action ('wp_head', 'rsd_link');
		remove_action( 'wp_head', 'wlwmanifest_link');
		remove_action( 'wp_head', 'wp_shortlink_wp_head');

		add_filter('the_generator', 'website_remove_version');
		add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
		add_filter( 'rank_math/frontend/remove_credit_notice', '__return_true' );
		add_filter( 'script_loader_src', 'website_cleanup_query_string', 15, 1 ); 
		add_filter( 'style_loader_src', 'website_cleanup_query_string', 15, 1 );

		function website_cleanup_query_string( $src ){ 
			$parts = explode( '?', $src ); 
			return $parts[0]; 
		}  
		function remove_jquery_migrate($scripts)
		{
			if (!is_admin() && isset($scripts->registered['jquery'])) {
				$script = $scripts->registered['jquery'];
				
				if ($script->deps) { // Check whether the script has any dependencies
					$script->deps = array_diff($script->deps, array(
						'jquery-migrate'
					));
				}
			}
		}
		add_action('wp_default_scripts', 'remove_jquery_migrate');

		function disable_emojis() {
			remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
			remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
			remove_action( 'wp_print_styles', 'print_emoji_styles' );
			remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
			remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
			remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
			remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
			add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
			add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
		}
		add_action( 'init', 'disable_emojis' );
		
		function disable_emojis_tinymce( $plugins ) {
			if ( is_array( $plugins ) ) {
			return array_diff( $plugins, array( 'wpemoji' ) );
			} else {
			return array();
			}
		}
		
		function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
			if ( 'dns-prefetch' == $relation_type ) {
			$emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );
		
		$urls = array_diff( $urls, array( $emoji_svg_url ) );
			}
		
		return $urls;
		}
		
		
		remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
		remove_action( 'wp_footer', 'wp_enqueue_global_styles', 1 );
		

		
/*-----------------------------------------------------------------------------------*/
/* Menu Registration and Tidy Up
/*-----------------------------------------------------------------------------------*/
	register_nav_menus( array( 'primary'	=>	__( 'Primary Menu', 'xray' ), ));


	function wp_nav_menu_remove($var) {
		return is_array($var) ? array_intersect($var, array('current-menu-item','menu-item-has-children','current-menu-parent')) : '';
	}
	add_filter('page_css_class', 'wp_nav_menu_remove', 100, 1);
	add_filter('nav_menu_item_id', 'wp_nav_menu_remove', 100, 1);
	add_filter('nav_menu_css_class', 'wp_nav_menu_remove', 100, 1);

/*-----------------------------------------------------------------------------------*/
/* Enqueue Styles and Scripts
/*-----------------------------------------------------------------------------------*/
	function xray_scripts()  { 
		// get the theme directory style.css and link to it in the header
		//wp_enqueue_style('custom_font', '//use.typekit.net/rir5arn.css');
		wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/style.css?v='.rand(111,999));
		
		wp_enqueue_script( 'jquery-core' );
		
		wp_enqueue_script( 'xray-modern', get_template_directory_uri() . '/assets/js/modern.js','','',true);
		wp_enqueue_script( 'jquery-core' );
		wp_enqueue_script( 'xray-custom', get_template_directory_uri() . '/assets/js/script.js','','',true);
		


		wp_dequeue_style( 'wp-block-library' );
		wp_dequeue_style('hoverIntent');
	}
	add_action( 'wp_enqueue_scripts', 'xray_scripts' ); 

	
	remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
	remove_action( 'wp_footer', 'wp_enqueue_global_styles', 1 );


/*-----------------------------------------------------------------------------------*/
/* Add Custom Theme Section (For Use With ACF)
/*-----------------------------------------------------------------------------------*/
if( function_exists('acf_add_options_page') ) {
		acf_add_options_page(array(
			'page_title' 	=> $SiteName.' General Settings',
			'menu_title'	=> $SiteName.' Settings',
			'menu_slug' 	=> $settingslink,
			'capability'	=> 'edit_posts',
			'position'      => 1,
			'redirect'		=> false
		));	
};

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_sub_page(array(
		'page_title'     => 'Courses Page Content',
		'menu_title'    => 'Page Content',
		'parent_slug'    => 'edit.php?post_type=courses',
	));

}

// Register Custom Post Type
function custom_post_type_testimonial() {

	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'xray_testimonial' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'xray_testimonial' ),
		'menu_name'             => __( 'Testimonials', 'xray_testimonial' ),
		'name_admin_bar'        => __( 'Testimonials', 'xray_testimonial' ),
		'archives'              => __( 'Item Archives', 'xray_testimonial' ),
		'attributes'            => __( 'Item Attributes', 'xray_testimonial' ),
		'parent_item_colon'     => __( 'Parent Item:', 'xray_testimonial' ),
		'all_items'             => __( 'All Testimonials', 'xray_testimonial' ),
		'add_new_item'          => __( 'Add New Testimonial', 'xray_testimonial' ),
		'add_new'               => __( 'Add New', 'xray_testimonial' ),
		'new_item'              => __( 'New Testimonial', 'xray_testimonial' ),
		'edit_item'             => __( 'Edit Testimonial', 'xray_testimonial' ),
		'update_item'           => __( 'Update Testimonial', 'xray_testimonial' ),
		'view_item'             => __( 'View Testimonial', 'xray_testimonial' ),
		'view_items'            => __( 'View Testimonials', 'xray_testimonial' ),
		'search_items'          => __( 'Search Testimonials', 'xray_testimonial' ),
		'not_found'             => __( 'Not found', 'xray_testimonial' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'xray_testimonial' ),
		'featured_image'        => __( 'Featured Image', 'xray_testimonial' ),
		'set_featured_image'    => __( 'Set featured image', 'xray_testimonial' ),
		'remove_featured_image' => __( 'Remove featured image', 'xray_testimonial' ),
		'use_featured_image'    => __( 'Use as featured image', 'xray_testimonial' ),
		'insert_into_item'      => __( 'Insert into item', 'xray_testimonial' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'xray_testimonial' ),
		'items_list'            => __( 'Items list', 'xray_testimonial' ),
		'items_list_navigation' => __( 'Items list navigation', 'xray_testimonial' ),
		'filter_items_list'     => __( 'Filter items list', 'xray_testimonial' ),
	);
	$args = array(
		'label'                 => __( 'Testimonial', 'xray_testimonial' ),
		'description'           => __( 'Testimonial Entries', 'xray_testimonial' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'post_testimonial', $args );

}
add_action( 'init', 'custom_post_type_testimonial', 0 );


// Register Custom Post Type
function custom_courses() {

	$labels = array(
		'name'                  => _x( 'Courses', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Course', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Courses', 'text_domain' ),
		'name_admin_bar'        => __( 'Courses', 'text_domain' ),
		'archives'              => __( 'Course Archives', 'text_domain' ),
		'attributes'            => __( 'Course Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Course:', 'text_domain' ),
		'all_items'             => __( 'All Courses', 'text_domain' ),
		'add_new_item'          => __( 'Add New Course', 'text_domain' ),
		'add_new'               => __( 'Add Course', 'text_domain' ),
		'new_item'              => __( 'New Course', 'text_domain' ),
		'edit_item'             => __( 'Edit Course', 'text_domain' ),
		'update_item'           => __( 'Update Course', 'text_domain' ),
		'view_item'             => __( 'View Course', 'text_domain' ),
		'view_items'            => __( 'View Course', 'text_domain' ),
		'search_items'          => __( 'Search Course', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Course', 'text_domain' ),
		'items_list'            => __( 'Items Course', 'text_domain' ),
		'items_list_navigation' => __( 'Items Course', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Course list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Courses', 'text_domain' ),
		'description'           => __( 'Course Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'courses', $args );

}
add_action( 'init', 'custom_courses', 0 );

/*-----------------------------------------------------------------------------------*/
/* Woocom Extra Categories
/*-----------------------------------------------------------------------------------*/




/*-----------------------------------------------------------------------------------*/
/* Add Custom Blocks
/*-----------------------------------------------------------------------------------*/

/* Custom block category's */
add_action('acf/init', 'xray_customblocks');
function xray_customblocks() {
	  // Get an array of theme PHP templates
	  $theme = wp_get_theme();
	  $files = $theme->get_files('php', 2, false);
	
	  // Iterate over and ignore non-block templates
	  foreach ($files as $filename => $filepath) {
		if (preg_match('#^template-parts/(block|container)s?/#', $filename, $matches) !== 1) {
		  continue;
		}
		// Read the PHP comment meta data for the block
		$meta = get_file_data($filepath, array(
		  'name'        => 'Block Name',
		  'description' => 'Block Description',
		  'post_types'  => 'Post Types',
		  'mode'        => 'Block Mode',
		  'svg' 		=> 'Block SVG',
		  'category' 	=> 'Block Category'
		));
		// Skip template if a name is not provided
		if (empty($meta['name'])) {
		  continue;
		}
		// Convert the post types to an array (or use defaults)
		$post_types = array_filter(
		  array_map('trim', explode(',', $meta['post_types']))
		);
		if (empty($post_types)) {
		  $post_types = array('page', 'post');
		}
		// Register the ACF block using the meta data
		acf_register_block_type(array(
		  'name'              => "{$matches[1]}_" . sanitize_title($meta['name']),
		  'title'             => $meta['name'],
		  'description'       => $meta['description'],
		  'post_types'        => $post_types,
		  'render_template'   => $filepath,
		  'category'          => $meta['category'], 
		  'icon'            => file_get_contents(get_template_directory().'/template-parts/svg-icons/'.$meta['svg'] ),
		  'supports'		=> [
			  		'mode'				=> true,
			  		'align'				=> false,
			  		'anchor'			=> true,
			  		'customClassName'	=> true,
					'jsx' => true,
		  ],
		  'example'  => array(
			  'attributes' => array(
				  'mode' => 'preview',
				  'data' => ['_is_preview' => true],
			  )
		  ),
		));
	  }
}

add_action('acf/init', 'xray_customCreateblocks');
function xray_customCreateblocks() {
	  // Get an array of theme PHP templates
	  $theme = wp_get_theme();
	  $files = $theme->get_files('php', 2, false);
	
	  // Iterate over and ignore non-block templates
	  foreach ($files as $filename => $filepath) {
		if (preg_match('#^template-parts/(createparts|container)s?/#', $filename, $matches) !== 1) {
		  continue;
		}
		// Read the PHP comment meta data for the block
		$meta = get_file_data($filepath, array(
		  'name'        => 'Block Name',
		  'description' => 'Block Description',
		  'post_types'  => 'Post Types',
		  'mode'        => 'Block Mode',
		  'svg' 		=> 'Block SVG',
		  'category' 	=> 'Block Category'
		));
		// Skip template if a name is not provided
		if (empty($meta['name'])) {
		  continue;
		}
		// Convert the post types to an array (or use defaults)
		$post_types = array_filter(
		  array_map('trim', explode(',', $meta['post_types']))
		);
		if (empty($post_types)) {
		  $post_types = array('page', 'post');
		}
		// Register the ACF block using the meta data
		acf_register_block_type(array(
		  'name'              => "{$matches[1]}_" . sanitize_title($meta['name']),
		  'title'             => $meta['name'],
		  'description'       => $meta['description'],
		  'post_types'        => $post_types,
		  'render_template'   => $filepath,
		  'category'          => $meta['category'], 
		  'icon'            => file_get_contents(get_template_directory().'/template-parts/svg-icons/'.$meta['svg'] ),
		  'supports'		=> [
					  'mode'				=> true,
					  'align'				=> false,
					  'anchor'			=> true,
					  'customClassName'	=> true,
					'jsx' => true,
		  ],
		  'example'  => array(
			  'attributes' => array(
				  'mode' => 'preview',
				  'data' => ['_is_preview' => true],
			  )
		  ),
		));
	  }
}



function example_block_category( $categories, $post ) {
		return array_merge(
			$categories,
			array(
				array(
					'slug' => 'HGYB',
					'title' => 'Help Grow Your Business',
				),
				array(
					'slug' => 'HGYB_BYO',
					'title' => 'Help Grow Your Business Build a section',
				), 
			)
		);
	}
	add_filter( 'block_categories_all', 'example_block_category', 10, 2);


function xray_block_scripts()  { 
	// get the theme directory style.css and link to it in the header
	wp_enqueue_script( 'xray-2', get_template_directory_uri() . '/assets/js/slider.js');
}
add_action( 'wp_enqueue_scripts', 'xray_block_scripts' ); 




function random_str(
	int $length = 64,
	string $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'): string {
	if ($length < 1) {
		throw new \RangeException("Length must be a positive integer");
	}
	$pieces = [];
	$max = mb_strlen($keyspace, '8bit') - 1;
	for ($i = 0; $i < $length; ++$i) {
		$pieces []= $keyspace[random_int(0, $max)];
	}
	return implode('', $pieces);
};


add_action('admin_menu', 'remove_posts_menu');
function remove_posts_menu() 
{
	remove_menu_page('edit.php');
}

function blockedit_message($bemessage){
	if (strpos($_SERVER['PHP_SELF'],'wp-admin')) {
		echo '<div class="displaymarkdown">'.$bemessage.'</div>';
	};
}


/*=============================================
=            BREADCRUMBS			            =
=============================================*/

//  to include in functions.php
function the_breadcrumb() {

	global $post;

	$trail = '<li><a href="'.get_home_url().'">Home ?? </a></li>';
	$page_title = get_the_title($post->ID);

	if($post->post_parent) {
		$parent_id = $post->post_parent;

		while ($parent_id) {
			$page = get_page($parent_id);
			$breadcrumbs[] = '<li><a href="'.get_the_permalink($page->ID).'" title="'.get_the_title($page->ID).'">' . get_the_title($page->ID) . ' ?? </a></li>';
			$parent_id = $page->post_parent;
		}

		$breadcrumbs = array_reverse($breadcrumbs);
		foreach($breadcrumbs as $crumb) $trail .= $crumb;
	}

	$trail .= '<li>'.$page_title.'</li>';
	

	return '<ul class="breadcrumb">'.$trail.'</ul>';

}

function add_categories_to_pages() {
register_taxonomy_for_object_type( 'category', 'page' );
}
add_action( 'init', 'add_categories_to_pages' );

function add_tags_to_pages() {
register_taxonomy_for_object_type( 'post_tag', 'page' );
}
add_action( 'init', 'add_tags_to_pages');

/**
	 * Font Awesome Kit Setup
	 * 
	 * This will add your Font Awesome Kit to the front-end, the admin back-end,
	 * and the login screen area.
	 */
	if (! function_exists('fa_custom_setup_kit') ) {
	  function fa_custom_setup_kit($kit_url = '') {
		foreach ( [ 'wp_enqueue_scripts', 'admin_enqueue_scripts', 'login_enqueue_scripts' ] as $action ) {
		  add_action(
			$action,
			function () use ( $kit_url ) {
			  wp_enqueue_script( 'font-awesome-kit', $kit_url, [], null );
			}
		  );
		}
	  }
	}
fa_custom_setup_kit('https://kit.fontawesome.com/ab8c19481b.js');		


/**
	 * Google Fonts
	 
function wpb_add_google_fonts() {
	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;600', false ); 
}
 
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
*/



	 
add_action( 'wp_head', 'ilc_favicon');
function ilc_favicon(){
	echo '<link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/HGYB/assets/img/fav/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/wp-content/themes/HGYB/assets/img/fav/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/wp-content/themes/HGYB/assets/img/fav/favicon-16x16.png">
	<link rel="manifest" href="/wp-content/themes/HGYB/assets/img/fav/site.webmanifest">
	<link rel="mask-icon" href="/wp-content/themes/HGYB/assets/img/fav/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">';
}

