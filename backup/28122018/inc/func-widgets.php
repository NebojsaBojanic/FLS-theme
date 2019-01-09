<?php 

/* ========================================================================
	Ubacivanje widget sidebar
=========================================================================*/

function theme_slug_blog_widgets_init() {
	register_sidebar( array(
		'name'			=> esc_html__( 'Blog sidebar', 'theme_slug_blog' ),
		'id'			=> 'blog-sidebar',
		'description'	=> esc_html__( 'Add widgets here.', 'theme_slug_blog' ),
		'before_widget'	=> '<div class="blog-sidebar-widgets">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3 class="sidebar-subtitle">',
		'after_title'	=> '</h3>',
	));
	register_sidebar( array(
		'name' 			=> 'Footer widget',
		'id' 			=> 'footer-widget',
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
