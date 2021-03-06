<?php
/**
 * The sidebar containing all custom posts Our Team
 */
	// Sidebar
	$sidebarTitle 	= get_field('team_sidebar_title', 'option');
?>

<aside class="nav-right-sidebar grid-30 fl clearfix">

	<h3><?php echo $sidebarTitle; ?></h3>
	
	<ul>

<?php
	global $wp_query;
	$current_id = $wp_query->get_queried_object_id();

	$args = array(
		'post_type'			=> 'our_team',
		'posts_per_page'	=> -1,
		'order'				=> 'ASC',
		'orderby'			=> 'title',
	);
	$team = new WP_Query( $args );
	if( $team->have_posts() ) {
		while( $team->have_posts() ) {
		$team->the_post();

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

