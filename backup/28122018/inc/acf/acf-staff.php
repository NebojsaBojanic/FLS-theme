<?php 
	// Title and description
	$title 				= get_sub_field('team_title');
	$description 		= get_sub_field('team_description');
	$titleColor			= get_sub_field('team_title_color');
	$descriptionColor	= get_sub_field('team_description_color');
	// Button
	$buttonBg 			= get_sub_field('team_button_color');
	$buttonText 		= get_sub_field('team_button_text');
	$buttonTextColor	= get_sub_field('team_button_text_color');
	// Background
	$bgcolor 			= get_sub_field('background_color');
	$pattern			= get_sub_field('pattern');
	$patternColor		= get_sub_field('pattern_color');
	// Single block
	$nameColor			= get_sub_field('team_member_name_color');
	$ourTeamLink 		= get_sub_field('our_team_page_link');

	$spaceBottom 		= get_sub_field('team_space_bottom');
?>

<!-- start acf-team -->
<section class="<?php if($spaceBottom){echo 'acf-block';} ?> acf-team <?php if($pattern){echo $patternColor; } echo " ".$bgcolor; ?>">

	<div class="grid-1160">

		<h2 class="section-title <?php if ($titleColor) { echo $titleColor; } else { echo $defTitleColor; } ?>"><?php echo $title; ?></h2>
		<?php if ($description): ?>
			<p class="section-description <?php echo $descriptionColor; ?>"><?php echo $description; ?></p>
		<?php endif; ?>

		<ul id="content" class="team-members clearfix">

		<?php 
 
		$args = array(
			'order' 			=> 'ASC',
			'orderby' 			=> 'menu_order',
			'post_type'			=> 'our_team',
			'posts_per_page' 	=> 4
		);

		$team = new WP_Query( $args );
		if( $team->have_posts() ) {
			while( $team->have_posts() ) {
			$team->the_post();

					// Single unit settings in custom post
					$name 				= get_the_title();
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

					// Get order number of post
					global $post;
					$menu_order = $post->menu_order;
				?>
				<?php if ($menu_order == 0):
					continue;
				else : ?>
					<li class="acf-member">
						<a href="<?php the_permalink(); ?>" title="Read more about <?php echo $name; ?>">
							<figure>
								<img src="<?php echo $image['sizes']['img_300x320']; ?>" alt="<?php echo $imgAlt; ?>" title="<?php echo $imgTitle; ?>">
							</figure>
						</a>
						<div class="team-member-info">
							<a href="<?php the_permalink(); ?>" title="Read more about <?php echo $name; ?>">
								<h3 class="<?php if ($nameColor) { echo $nameColor; } else { echo 'text-grey'; } ?>"><?php echo $name; ?></h3>
								<span><?php echo $class; ?></span>
								<p><?php echo $postDescription; ?></p>
							</a>
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
						</div><!-- End: team-member-info -->
					</li><!-- End: acf-member -->

				<?php endif; // If order is 0 ?>

			<?php }
		}
		else {
			echo '<p>No posts to display!</p>';
		} 
		wp_reset_query();
		?>

		</ul>

		<div class="clearfix"></div>

		<?php if ($ourTeamLink) { ?>
			<div class="permalink">
				<a href="<?php echo $ourTeamLink; ?>" class="fls-button <?php if ($buttonBg) { echo $buttonBg; } else { echo $defButtonBg; } ?> <?php if ($buttonTextColor) { echo $buttonTextColor; } else { echo $defButtonTextColor; } ?>" title="Load more employees">
					<?php if ($buttonText) { echo $buttonText; } else { echo $defButtonText; } ?>
				</a>
			</div><!-- end: see all -->
		<?php } ?>

	</div><!-- End: grid-1160 -->

</section><!-- END: acf-team -->
