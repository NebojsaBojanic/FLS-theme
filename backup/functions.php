<?php 

require_once("inc/func-customposts.php");
require_once("inc/func-taxonomy.php");
require_once("inc/func-widgets.php");

/* ========================================================================
	Register menus
=========================================================================*/
register_nav_menus( array(
	'main-nav'		=> 'Main WP navigation',
	'big-nav'		=> 'Meta navigation',
	'fixed-nav'		=> 'Fixed navigation',
	'footer-nav'	=> 'Footer navigation'
) );

/* ========================================================================
	END: Register menus
=========================================================================*/



/* ========================================================================
	Menu acf pozivanje polja 
=========================================================================*/

add_filter('wp_nav_menu_items', 'my_wp_nav_menu_items', 10, 2);

function my_wp_nav_menu_items( $items, $args ) {
	
	// get menu
	$menu = wp_get_nav_menu_object($args->menu);
	
	// modify primary only
	if( $args->theme_location == 'top' ) {
		
		// vars
		$logo = get_field('logo', $menu);
		$color = get_field('color', $menu);
		
		// prepend logo
		$html_logo = '<li class="menu-item-logo"><a href="'.home_url().'"><img src="'.$logo['url'].'" alt="'.$logo['alt'].'" /></a></li>';
		
		// append style
		$html_color = '<style type="text/css">.navigation-top{ background: '.$color.';}</style>';
		
		// append html
		$items = $html_logo . $items . $html_color;
		
	}
	// return
	return $items;
}

/* ========================================================================
	END: Menu acf pozivanje polja 
=========================================================================*/



/* ========================================================================
	Podešavanje teme (Theme Settings)
=========================================================================*/

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Header Settings',
			'menu_title'	=> 'Header',
			'parent_slug'	=> 'theme-general-settings',
		));
		
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Footer Settings',
			'menu_title'	=> 'Footer',
			'parent_slug'	=> 'theme-general-settings',
		));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Analytics Settings',
			'menu_title'	=> 'Google Analytics',
			'parent_slug'	=> 'theme-general-settings',
		));	
}

/* ========================================================================
	END: Podešavanje teme (Theme Settings)
=========================================================================*/



/* ========================================================================
	ADD CUSTOM Thumbnail SIZES
=========================================================================*/

function add_image_sizes()
{
	 if ( function_exists( 'add_image_size' ) ) { 
		   add_theme_support( 'post-thumbnails' ); // This feature enables post-thumbnail support for a theme
		   add_image_size( 'img_four_three', 480, 360, true);
		   add_image_size( 'img_four_three_min', 120, 90, true);
		   add_image_size( 'img_sixteen_nine', 480, 270, true); 
		   add_image_size( 'img_150x150', 150, 150, true);
		   add_image_size( 'img_200x200', 200, 200, true);
		   add_image_size( 'img_300x320', 300, 320, true);
		   add_image_size( 'img_350x350', 350, 350, true);
		   // Favicon sizes
		   add_image_size( 'favicon384', 384, 384, true); 
		   add_image_size( 'favicon192', 192, 192, true);
		   add_image_size( 'favicon180', 180, 180, true);
		   add_image_size( 'favicon32', 32, 32, true);
		   add_image_size( 'favicon16', 16, 16, true);
	 }
}
add_action('after_setup_theme', 'add_image_sizes');

/* ========================================================================
	END: ADD CUSTOM Thumbnail SIZES
=========================================================================*/



/* ========================================================================
	Google Maps
=========================================================================*/

function my_acf_init() {
	acf_update_setting('google_api_key', 'AIzaSyDF6WxpvlVuX0mvTdTnB0L_5T3hU8gzFnM');
}

add_action('acf/init', 'my_acf_init');

/* ========================================================================
	END: Google Maps
=========================================================================*/


