<?php 

/* ========================================================================
	Ubacivanje widget sidebar
=========================================================================*/

function theme_slug_blog_widgets_init() {
	register_sidebar( array(
		'name'			=> esc_html__( 'Blog Sidebar', 'theme_slug_blog' ),
		'id'			=> 'blog-sidebar',
		'description'	=> esc_html__( 'Add widgets here.', 'theme_slug_blog' ),
		'before_widget'	=> '<div class="archiveMonthly widget">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3 class="sidebar-subtitle">',
		'after_title'	=> '</h3>',
	));
	register_sidebar( array(
		'name'			=> esc_html__( 'Social Media Sharing Sidebar', 'theme_slug_blog' ),
		'id'			=> 'social-media',
		'description'   => esc_html__( 'Add widgets here.', 'theme_slug_blog' ),
		'before_widget' => '<div class="socialMediaSharing widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="sidebar-subtitle">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'			=> esc_html__( 'Tags Colud Sidebar', 'theme_slug_blog' ),
		'id'			=> 'tags-sidebar',
		'description'	=> esc_html__( 'Add widgets here.', 'theme_slug_blog' ),
		'before_widget'	=> '<div class="tagsCloud widget">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3 class="sidebar-subtitle">',
		'after_title'	=> '</h3>',
	) );
	register_sidebar( array(
		'name' 			=> 'Search',
		'id' 			=> 'search',
		'before_widget' => '<div id="%1$s" class="%2$s widget">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h3 class="sidebar-subtitle">',
		'after_title' 	=> '</h3>'
	) );
	register_sidebar( array(
		'name' 			=> 'Recent Posts',
		'id' 			=> 'recent_posts',
		'before_widget' => '<div id="%1$s" class="%2$s widget">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h3 class="sidebar-subtitle">',
		'after_title' 	=> '</h3>'
	) );
	register_sidebar( array(
		'name' 			=> 'The Most Popular Posts',
		'id' 			=> 'popular_posts',
		'before_widget' => '<div id="%1$s" class="%2$s widget">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h3 class="sidebar-subtitle">',
		'after_title' 	=> '</h3>'
	) );
	register_sidebar( array(
		'name' 			=> 'Calendar',
		'id' 			=> 'calendar',
		'before_widget' => '<div id="%1$s" class="%2$s widget">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h3 class="sidebar-subtitle">',
		'after_title' 	=> '</h3>'
	) );
}
add_action( 'widgets_init', 'theme_slug_blog_widgets_init' );

/* ========================================================================
	END: Ubacivanje widget sidebar
=========================================================================*/
