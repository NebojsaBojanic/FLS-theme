<?php /* Template Name: Our Team Template */

if ( is_front_page() ) :
	get_header('home');
else:
	get_header();
endif; ?>

<?php
// Default settings
	include("inc/theme-settings/theme-settings-defaults.php");
	// Title
	$titleColor 	= get_field('team_title_color', 'option');
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="team-wrap page-content-wrap">

	<div class="team grid-1440 page-center clearfix">

		<article class="team-article clearfix">

			<h1 class="section-title <?php if ($titleColor) { echo $titleColor; } else { echo $defTitleColor; } ?>"><?php the_title(); ?></h1>

			<!-- start acf-team -->
			<section class="acf-team">

				<ul id="content" class="team-members clearfix">

				<?php 
				$paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

				$args = array(
					'post_type'			=> 'our_team',
					'posts_per_page' 	=> 12,
					'paged'				=> $paged
				);

				$team = new WP_Query( $args );
				if( $team->have_posts() ) {
					while( $team->have_posts() ) {
					$team->the_post();

						// Single unit settings in custom post
						$name 				= get_field('full_name');
						$class 				= get_field('class');
						$postDescription 	= get_field('short_description');
						// social media
						$facebook 			= get_field('facebook');
						$twitter 			= get_field('twitter');
						$googlePlus 		= get_field('google_plus');
						$instagram 			= get_field('instagram');
						$linkedin 			= get_field('linkedin');

						$image				= get_field('picture');
						  $imgTitle 		= $image['title'];
						  $imgAlt 			= $image['alt'];
					?>

					<li class="acf-member">
						<figure>
							<img src="<?php echo $image['sizes']['img_300x320']; ?>" alt="<?php echo $imgAlt; ?>" title="<?php echo $imgTitle; ?>">
						</figure>
						<div class="team-member-info">
							<h3 class="<?php if ($nameColor) { echo $nameColor; } else { echo 'text-grey'; } ?>"><?php echo $name; ?></h3>
							<span><?php echo $class; ?></span>
							<p><?php echo $postDescription; ?></p>
							<ul class="social-media">
								<?php // Facebook
								if( $facebook ):
									if ($facebook['display_facebook']) { ?>
										<li><a href="<?php echo $facebook['facebook_url']; ?>" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/images/Facebook_icon_color.png">
										</a></li>
									<?php }
								endif; ?>
								<?php // Twitter
								if( $twitter ):
									if ($twitter['display_twitter']) { ?>
										<li><a href="<?php echo $twitter['twitter_url']; ?>" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/images/Twitter_icon_color.png">
										</a></li>
									<?php }
								endif; ?>
								<?php // Google Plus
								if( $googlePlus ):
									if ($googlePlus['display_google_plus']) { ?>
										<li><a href="<?php echo $googlePlus['google_plus_url']; ?>" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/images/Google-plus_icon_color.png">
										</a></li>
									<?php }
								endif; ?>
								<?php // Instagram
								if( $instagram ):
									if ($instagram['display_instagram']) { ?>
										<li><a href="<?php echo $instagram['instagram_url']; ?>" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/images/Instagram_icon_color.png">
										</a></li>
									<?php }
								endif; ?>
								<?php // LinkedIn
								if( $linkedin ):
									if ($linkedin['display_linkedin']) { ?>
										<li><a href="<?php echo $linkedin['linkedin_url']; ?>" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/images/Linkedin_icon_color.png">
										</a></li>
									<?php }
								endif; ?>
							</ul><!-- end: social-media -->
							<div class="permalink">
								<a href="<?php the_permalink(); ?>" title="Read more about <?php the_title(); ?>">Read more</a>
							</div><!-- end: permalink -->
						</div><!-- End: team-member-info -->
					</li><!-- End: acf-member -->

					<?php }
				}
				else {
					echo '<p>No posts to display!</p>';
				} 
				wp_reset_query();
				?>

				</ul>

				<div class="pagination textCenter grid-100 <?php if ($titleColor) { echo $titleColor; } else { echo $defTitleColor; } ?>">
					<?php 
						$big = 999999999; // need an unlikely integer
						echo paginate_links(array(
							'base'		=> str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
							'format'	=> '?paged=%#%',
							'current'	=> max(1, get_query_var('paged')),
							'total'		=> $team->max_num_pages,
							'mid_size' 	=> 1,
							'prev_text' => "<",
							'next_text' => ">"
						));
					?>
				</div><!-- END: pagination-->

			</section><!-- END: acf-team -->

		</article>

	</div><!-- END: Team -->

</div><!-- END: Team Wrap -->

	<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>