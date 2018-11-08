<?php /* Template Name: Blog Template */

if ( is_front_page() ) :
	get_header('home');
else:
	get_header();
endif; ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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

		<h1 class="section-title <?php if ($titleColor) { echo $titleColor; } else { echo $defTitleColor; } ?>"><?php the_title(); ?></h1>

		<div class="blog grid-1440 clearfix">

			<section class="aktuelles grid-55 fl clearfix">
		
				<?php
					$paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

					$args = array(
						'post_type'			=> 'post',
						'posts_per_page'	=> 5,
						'paged'				=> $paged
					);

					$aktuelles = new WP_Query( $args );
					if( $aktuelles->have_posts() ) {
						while( $aktuelles->have_posts() ) {
						$aktuelles->the_post();

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
					}
					else {
						echo '<p">No posts to display!</p>';
					}

					wp_reset_query();
				?>

				<div class="clearfix"></div>

				<div class="pagination textCenter grid-100 <?php if ($titleColor) { echo $titleColor; } else { echo $defTitleColor; } ?>">
					<?php 
						$big = 999999999; // need an unlikely integer
						echo paginate_links(array(
							'base'		=> str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
							'format'	=> '?paged=%#%',
							'current'	=> max(1, get_query_var('paged')),
							'total'		=> $aktuelles->max_num_pages,
							'mid_size' 	=> 1,
							'prev_text' => "<",
							'next_text' => ">"
						));
					?>
				</div><!-- END: pagination-->

			</section>

			<?php get_sidebar(); ?>

		</div> <!-- END: blog -->

	</div><!-- END: blog-wrap -->

	<?php endwhile; ?>
<?php endif; ?>
<?php get_footer();?>