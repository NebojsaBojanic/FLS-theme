<?php /* Template for custom posts Team Member */

get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php 
	/*
	*  Loop through a Flexible Content field and display it's content with different views for different layouts
	*/
// Default settings
	include("inc/theme-settings/theme-settings-defaults.php");
	// Title
	$titleColor		= get_field('team_title_color', 'option');
?>

	<div class="nav-wrap grid-100">

		<div class="nav team grid-1440 page-center clearfix">

			<article class="nav-article grid-50 fl clearfix">

				<h1 class="section-title <?php if ($titleColor) { echo $titleColor; } else { echo $defTitleColor; } ?>"><?php the_title(); ?></h1>

				<?php
					$fullName 			= get_field('full_name');
					$image				= get_field('picture');
					  $imgTitle 		= $image['title'];
					  $imgAlt 			= $image['alt'];
					$class 				= get_field('class');
					$description 		= get_field('description');
					// Social media
					$facebook 			= get_field('facebook');
					$twitter 			= get_field('twitter');
					$googlePlus 		= get_field('google_plus');
					$instagram 			= get_field('instagram');
					$linkedin 			= get_field('linkedin');
				?>

					<figure>
						<img src="<?php echo $image['sizes']['img_300x320']; ?>" alt="<?php echo $imgAlt; ?>" title="<?php echo $imgTitle; ?>">
					</figure>

					<div class="team-member-info">

						<h3><?php echo $fullName; ?></h3>
						<span><?php echo $class; ?></span>
						<?php echo $description; ?>
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
						</ul>

					</div>

			</article>

			<?php get_sidebar('our_team'); ?>

		</div><!-- END: nav -->

	</div><!-- END: nav-wrap -->

	<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>