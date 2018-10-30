<?php 
/* ========================================================================
	Add custom taxonomies
 ========================================================================= */

function add_custom_taxonomies() {
  // Add new "My taxonomies" taxonomy to Posts
  register_taxonomy('schiiler', 'news', array(
	// Hierarchical taxonomy (like categories)
	'hierarchical' => true,
	// This array of options controls the labels displayed in the WordPress Admin UI
	'labels' => array(
	  'name' => _x( 'Schiiler', 'taxonomy general name' ),
	  'singular_name' => _x( 'Schiiler', 'taxonomy singular name' ),
	  'search_items' =>  __( 'Search Schiiler' ),
	  'all_items' => __( 'All Schiiler' ),
	  'parent_item' => __( 'Parent Schiiler' ),
	  'parent_item_colon' => __( 'Parent Schiiler colon:' ),
	  'edit_item' => __( 'Edit Schiiler' ),
	  'update_item' => __( 'Update Schiiler' ),
	  'add_new_item' => __( 'Add New Schiiler' ),
	  'new_item_name' => __( 'New Schiiler Name' ),
	  'menu_name' => __( 'Schiiler' ),
	),
	// Control the slugs used for this taxonomy
	'rewrite' => array(
	  'slug' => 'schiiler', // This controls the base slug that will display before each term
	  'with_front' => false, // Don't display the category base before "/schiile/"
	  'hierarchical' => true // This will allow URL's like "/schiile/boston/cambridge/"
	),
  ));
}
add_action( 'init', 'add_custom_taxonomies', 0 );

/* ========================================================================
	END: Add custom taxonomies
 ========================================================================= */

