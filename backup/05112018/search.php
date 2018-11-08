<?php
/**
* The template shows Search Results
*/

if ( is_front_page() ) :
	get_header('home');
else:
	get_header();
endif; ?>

<?php
// Default values
	include("inc/theme-settings/theme-settings-defaults.php");
	// Title
	$titleColor			= get_field('blog_heading_color', 'option');
	// Buttons
	$buttonText 		= get_field('blog_text_on_button', 'option');
	$buttonTextColor 	= get_field('blog_text_color_on_button', 'option');
	$buttonBg 			= get_field('blog_button_color', 'option');
?>
	
<div class="blog-wrap grid-100">

	<div class="search-title">
		<?php 
			_e("<h1 class='section-title'>Search results: " . get_query_var('s') . "</h1>");
		?>
	</div>

	<div class="blog grid-1440 clearfix">

		<section class="aktuelles grid-55 fl clearfix">

			<div class="search-results">

				<?php
					$paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

					$s = get_search_query();
					
					$args = array(
						'post_type' 	=> 'post',
						's'				=> $s,
						'post_per_page'	=> 5,
						'paged'			=> $paged
					);
					$results = new WP_Query($args);
					if ($results->have_posts()) {
						while ($results->have_posts()) {
							$results->the_post();

						$image		= get_field('image');
							$url 	= $image['url'];
							$title 	= $image['title'];
							$alt 	= $image['alt'];
						$date 		= get_the_date('l, F j, Y');

						// Full name of author
						$fname 		= get_the_author_meta('first_name');
						$lname 		= get_the_author_meta('last_name');
						$full_name 	= '';

						if( empty($fname)){
							$full_name = $lname;
						} elseif( empty( $lname )){
							$full_name = $fname;
						} else {
							//both first name and last name are present
							$full_name = "{$fname} {$lname}";
						}
				?>
					<article class="recent-post single-article">
						<a href="<?php the_permalink(); ?>" title="Read more about <?php the_title(); ?>">
							<header class="article-header">
								<h3 class="text-grey"><?php the_title(); ?></h3>
								<span class="article-info"><?php echo $date; ?><b><span class="pipe text-red"> | </span><i><?php echo $full_name; ?></i></b></span>
							</header>
							<?php if ($image): ?>
								<figure class="grid-100">
									<img src="<?php echo $image['sizes']['img_four_three']; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>">
								</figure>
							<?php endif ?>
							<p><?php the_field("excerpt"); ?></p>
						</a>

						<div class="permalink">
							<a href="<?php the_permalink(); ?>" title="Read more about <?php the_title(); ?>" class="fls-button <?php if ($buttonBg) { echo $buttonBg; } else { echo $defButtonBg; } ?> <?php if ($buttonTextColor) { echo $buttonTextColor; } else { echo $defButtonTextColor; } ?>">
								<?php if ($buttonText) { echo $buttonText; } else { echo $defButtonText; } ?>
							</a>
						</div><!-- end: permalink -->

					</article><!-- END: Aktuelles article -->

				<?php
						}
					} else {
					echo '<ul class="searchNo"><li>'. 'No results were found. Please check the search criteria and try again.'.'<br>'.'</li>'; // ### ADD NO RESULTS TEXT HERE
					echo '<li>'.'<a title="Back to home page" href="' . get_home_url() .'">Back to home page</a>'.'</li>'.'</ul>';
					}
				?>

			</div><!-- END: search-results -->

			<div class="clearfix"></div>

			<div class="pagination textCenter grid-100 <?php if ($titleColor) { echo $titleColor; } else { echo $defTitleColor; } ?>">
				<?php 
					$big = 999999999; // need an unlikely integer
					echo paginate_links(array(
						'base'	  => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
						'format'	=> '?paged=%#%',
						'current'=> max(1, get_query_var('paged')),
						'total'	 => $results->max_num_pages,
						'mid_size'  => 1,
						'prev_text' => "<",
						'next_text' => ">"
					));
				?>
			</div><!-- END: pagination-->

		</section>

		<?php get_sidebar(); ?>

	</div><!-- END: blog -->

</div><!-- END: blog-wrap -->
<?php get_footer(); ?>