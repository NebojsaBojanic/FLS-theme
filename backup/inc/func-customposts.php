<?php 
/* ========================================================================
	Custom post for Nav1
=========================================================================*/
function nav_one() {
  $labels = array(
	'name'				=> _x( 'Nav1', 'post type general name' ),
	'singular_name'		=> _x( 'Nav1', 'post type singular name' ),
	'add_new'			=> _x( 'Add Nav1', 'book' ),
	'add_new_item'		=> __( 'Add new Nav1 post' ),
	'edit_item'			=> __( 'Edit Nav1' ),
	'new_item'			=> __( 'New Nav1' ),
	'all_items'			=> __( 'All Nav1 posts' ),
	'view_item'			=> __( 'View Nav1' ),
	'search_items'		=> __( 'Search Nav1' ),
	'not_found'			=> __( 'No Nav1 found' ),
	'not_found_in_trash' => __( 'No Nav1 found in the Trash' ), 
	'parent_item_colon'	=> '',
	'menu_name'			=> 'Nav1'
  );
  $args = array(
	'labels'		=> $labels,
	'description'	=> 'Here create Nav1',
	'public'		=> true,
	'menu_position'	=> 11,
	'supports'		=> array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
	'has_archive'	=> true,
  );
  register_post_type( 'nav_one', $args ); 
}
add_action( 'init', 'nav_one' );
/* ========================================================================
	END: Custom post for Nav1
=========================================================================*/



/* ========================================================================
	Custom post for Nav2
=========================================================================*/
function nav_two() {
  $labels = array(
	'name'				=> _x( 'Nav2', 'post type general name' ),
	'singular_name'		=> _x( 'Nav2', 'post type singular name' ),
	'add_new'			=> _x( 'Add Nav2', 'book' ),
	'add_new_item'		=> __( 'Add new Nav2 post' ),
	'edit_item'			=> __( 'Edit Nav2' ),
	'new_item'			=> __( 'New Nav2' ),
	'all_items'			=> __( 'All Nav2 posts' ),
	'view_item'			=> __( 'View Nav2' ),
	'search_items'		=> __( 'Search Nav2' ),
	'not_found'			=> __( 'No Nav2 found' ),
	'not_found_in_trash' => __( 'No Nav2 found in the Trash' ), 
	'parent_item_colon'	=> '',
	'menu_name'			=> 'Nav2'
  );
  $args = array(
	'labels'		=> $labels,
	'description'	=> 'Here create Nav2',
	'public'		=> true,
	'menu_position'	=> 12,
	'supports'		=> array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
	'has_archive'	=> true,
	// 'rewrite' => array('slug' => 'nav'),
  );
  register_post_type( 'nav_two', $args ); 
}
add_action( 'init', 'nav_two' );
/* ========================================================================
	END: Custom post for Nav2
=========================================================================*/



/* ========================================================================
	Custom post for Nav3
=========================================================================*/
function nav_three() {
  $labels = array(
	'name'				=> _x( 'Nav3', 'post type general name' ),
	'singular_name'		=> _x( 'Nav3', 'post type singular name' ),
	'add_new'			=> _x( 'Add Nav3', 'book' ),
	'add_new_item'		=> __( 'Add new Nav3 post' ),
	'edit_item'			=> __( 'Edit Nav3' ),
	'new_item'			=> __( 'New Nav3' ),
	'all_items'			=> __( 'All Nav3 posts' ),
	'view_item'			=> __( 'View Nav3' ),
	'search_items'		=> __( 'Search Nav3' ),
	'not_found'			=> __( 'No Nav3 found' ),
	'not_found_in_trash' => __( 'No Nav3 found in the Trash' ), 
	'parent_item_colon'	=> '',
	'menu_name'			=> 'Nav3'
  );
  $args = array(
	'labels'		=> $labels,
	'description'   => 'Here create Nav3',
	'public'		=> true,
	'menu_position' => 13,
	'supports'	  	=> array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
	'has_archive'   => true,
	// 'rewrite' => array('slug' => 'nav'),
  );
  register_post_type( 'nav_three', $args ); 
}
add_action( 'init', 'nav_three' );
/* ========================================================================
	END: Custom post for Nav3
=========================================================================*/



/* ========================================================================
	Custom post for Nav4
=========================================================================*/
function nav_four() {
  $labels = array(
	'name'				=> _x( 'Nav4', 'post type general name' ),
	'singular_name'		=> _x( 'Nav4', 'post type singular name' ),
	'add_new'			=> _x( 'Add Nav4', 'book' ),
	'add_new_item'		=> __( 'Add new Nav4 post' ),
	'edit_item'			=> __( 'Edit Nav4' ),
	'new_item'			=> __( 'New Nav4' ),
	'all_items'			=> __( 'All Nav4 posts' ),
	'view_item'			=> __( 'View Nav4' ),
	'search_items'		=> __( 'Search Nav4' ),
	'not_found'			=> __( 'No Nav4 found' ),
	'not_found_in_trash' => __( 'No Nav4 found in the Trash' ), 
	'parent_item_colon'	=> '',
	'menu_name'		  	=> 'Nav4'
  );
  $args = array(
	'labels'		=> $labels,
	'description'	=> 'Here create Nav4',
	'public'		=> true,
	'menu_position'	=> 14,
	'supports'		=> array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
	'has_archive'	=> true,
	// 'rewrite' => array( 'slug' => 'nav' ),
  );
  register_post_type( 'nav_four', $args ); 
}
add_action( 'init', 'nav_four' );
/* ========================================================================
	END: Custom post for Nav4
=========================================================================*/



/* ========================================================================
	Custom post for 
=========================================================================*/
function our_team() {
  $labels = array(
	'name'				=> _x( 'Team', 'post type general name' ),
	'singular_name'		=> _x( 'Team', 'post type singular name' ),
	'add_new'			=> _x( 'Add Team Member', 'book' ),
	'add_new_item'		=> __( 'Add new Team Member' ),
	'edit_item'			=> __( 'Edit Team Member' ),
	'new_item'			=> __( 'New Team Member' ),
	'all_items'			=> __( 'Our Team' ),
	'view_item'			=> __( 'View Team' ),
	'search_items'		=> __( 'Search Team' ),
	'not_found'			=> __( 'No Team Member found' ),
	'not_found_in_trash' => __( 'No Team Member found in the Trash' ), 
	'parent_item_colon'	=> '',
	'menu_name'			=> 'Team'
  );
  $args = array(
	'labels'		=> $labels,
	'description'	=> 'Here add Team member',
	'public'		=> true,
	'menu_position'	=> 10,
	'supports'		=> array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
	'has_archive'	=> true,
  );
  register_post_type( 'our_team', $args ); 
}
add_action( 'init', 'our_team' );
/* ========================================================================
	END: Custom post for 
=========================================================================*/