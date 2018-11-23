<?php /* Template Name: Nav1 Template */

if ( is_front_page() ) :
	get_header('home');
else:
	get_header();
endif; ?>

<?php
// Default settings
	include("inc/theme-settings/theme-settings-defaults.php");
	// Title
	$titleColor			= get_field('nav1_heading_color', 'option');
	// Button
	$buttonText			= get_sub_field('nav1_text_on_button', 'option');
	$buttonTextColor 	= get_sub_field('nav1_text_color_on_button', 'option');
	$buttonBg 			= get_sub_field('nav1_button_color', 'option');
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="all-posts-wrap page-content-wrap">

		<h1 class="section-title <?php if ($titleColor) { echo $titleColor; } else { echo $defTitleColor; } ?>"><?php the_title(); ?></h1>

		<div class="all-posts grid-1440 clearfix">

			<section class="grid-70 page-center">

		<?php
			$paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

			$args = array(
				'post_type'			=> 'nav_one',
				'posts_per_page'	=> 5,
				'paged'		 		=> $paged
			);

			$nav1 = new WP_Query( $args );
			if( $nav1->have_posts() ) {
				while( $nav1->have_posts() ) {
				$nav1->the_post();

				$image 		= get_field('image');
					// $url 	= $image['url'];
					// $title 	= $image['title'];
					// $alt 	= $image['alt'];
				$excerpt	= get_field('excerpt');
				$text		= get_field('text');
				$bgColor	= get_field('background_color');
				$date 		= get_the_date('l, F j, Y');
		?>
				<article class="single-article clearfix">
					<figure class="post-image grid-40 fl">
						<img src="<?php echo $image['sizes']['img_four_three']; ?>" alt="<?php echo $alt ?>" title="<?php echo $title ?>">
					</figure>
					<div class="post-content grid-50 fl">
						<header class="article-header">
							<h3><?php the_title(); ?></h3>
							<span class="article-info"><?php echo $date; ?><b><span class="pipe text-red"> | </span>author name</b></span>
						</header>
						<p><?php the_field("excerpt"); ?></p>
						<div class="permalink">
							<a href="<?php the_permalink(); ?>" title="Read more about <?php the_title(); ?>" class="fls-button <?php if ($buttonBg) { echo $buttonBg; } else { echo $defButtonBg; } ?> <?php if ($buttonTextColor) { echo $buttonTextColor; } else { echo $defButtonTextColor; } ?>">
								<?php if ($buttonText) { echo $buttonText; } else { echo $defButtonText; } ?>
							</a>
						</div><!-- end: permalink -->
					</div>
				</article><!-- END: single-post -->

				<?php
					/* Restore original Post Data */
					wp_reset_postdata();
				?>


		<?php
				}
			}
			else {
				echo '<p class="centered">No posts to display!</p>';
			}
		?>

			</section><!-- END: grid-70 -->

			<div class="pagination textCenter grid-100 <?php if ($titleColor) { echo $titleColor; } else { echo $defTitleColor; } ?>">
			<?php $big = 999999999; // need an unlikely integer
				echo paginate_links(array(
					'base'	  => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
					'format'	=> '?paged=%#%',
					'current'=> max(1, get_query_var('paged')),
					'total'	 => $nav1->max_num_pages,
					'mid_size'  => 1,
					'prev_text' => "<",
					'next_text' => ">"
				)); ?>
			</div><!-- END: pagination-->

		</div><!-- END: all-posts -->

	</div><!-- END: all-posts-wrap -->
		
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();?>