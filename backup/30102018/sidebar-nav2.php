<?php
/**
 * The sidebar containing all custom posts Nav2
 */
	// Sidebar
	$sidebarTitle 	= get_field('nav2_sidebar_title', 'option');
?>

<aside class="nav-right-sidebar grid-30 fl clearfix">

	<h3><?php echo $sidebarTitle; ?></h3>
	
	<ul>

<?php
	global $wp_query;
	$current_id = $wp_query->get_queried_object_id();

	$args = array(
		'post_type'			=> 'nav_two',
		'posts_per_page'	=> -1,
		'order'				=> 'ASC',
		'orderby'			=> 'date',
	);
	$nav2 = new WP_Query( $args );
	if( $nav2->have_posts() ) {
		while( $nav2->have_posts() ) {
		$nav2->the_post();

			$title 	= get_the_title();
?>
			<li <?php if( $current_id == get_the_ID() ) { echo ' class="active"'; } ?>>
				<a href="<?php the_permalink(); ?>" title="Read more about <?php echo $title; ?>">
					<?php echo $title; ?>
				</a>
			</li>
<?php
		}
	}
	else {
		echo 'Oh ohm no articles!';
	}
	/* Restore original Post Data */
	wp_reset_postdata();
?>

	</ul>

</aside>

