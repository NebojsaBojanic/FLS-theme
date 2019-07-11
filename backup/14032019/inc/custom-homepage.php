<?php while(the_flexible_field("flexible_home_page")):  ?>
	

	<?php if(get_row_layout() == "text_and_image"):
// layout: Text and Image	

		// Title
		$title				= get_sub_field('section_title');
		$titleColor			= get_sub_field('section_title_color');
		// Button
		$buttonBg 			= get_sub_field('section_button_color');
		$buttonLink 		= get_sub_field('section_page_link');
		$buttonText 		= get_sub_field('section_button_text');
		$buttonTextColor	= get_sub_field('section_button_text_color');

		$image 				= get_sub_field('section_image');
		$layout 			= get_sub_field('section_layout');
		$link 				= get_sub_field('section_page_link');
		$paragraph 			= get_sub_field('section_text');
	?>

		<section class="section-one">

			<div class="acf-paragraph-image"><!-- start acf-paragraph-image -->

				<div class="grid-1160">

				<?php if ($layout == 'right') { // If layout with image on right side picked ?>

					<div class="text-image-element grid-50">
						<div class="paragraph">
							<?php if ($title) { ?>
								<h2 class="<?php if ($titleColor) { echo $titleColor; } else { echo $defTitleColor; } ?>"><?php echo $title; ?></h2>
							<?php } ?>
							<p><?php echo $paragraph; ?></p>
							<?php if ($link) { ?>
								<!-- Displaying button only on homepage -->
								<a href="<?php echo $link; ?>" class="fls-button <?php if ($buttonBg) { echo $buttonBg; } else { echo $defButtonBg; } ?> <?php if ($buttonTextColor) { echo $buttonTextColor; } else { echo $defButtonTextColor; } ?>"><?php echo $buttonText; ?></a>
							<?php } ?>
						</div>
					</div>

					<div class="text-image-element grid-50">
						<img src="<?php echo $image['url']; ?>" class="frame">
					</div>

				<?php } else { // If layout with image on left side picked ?>

					<div class="text-image-element grid-50">
						<img src="<?php echo $image['url']; ?>" class="frame">
					</div>

					<div class="text-image-element grid-50">
						<div class="paragraph-2">
							<?php if ($title) { ?>
								<h2 class="<?php if ($titleColor) { echo $titleColor; } else { echo $defTitleColor; } ?>"><?php echo $title; ?></h2>
							<?php } ?>
							<?php echo $paragraph; ?>
							<?php if ($link) { ?>
								<!-- Displaying button only on homepage -->
								<a href="<?php echo $link; ?>" class="fls-button <?php if ($buttonBg) { echo $buttonBg; } else { echo $defButtonBg; } ?> <?php if ($buttonTextColor) { echo $buttonTextColor; } else { echo $defButtonTextColor; } ?>"><?php if ($buttonText) { echo $buttonText; } else { echo $defButtonText; } ?></a>
							<?php } ?>
						</div>
					</div>

				<?php } // End: layout condition ?>

				</div><!-- End: grid-1160 -->

			</div><!-- end acf-paragraph-image -->

		</section>







	<?php elseif(get_row_layout() == "nav1"):
// layout: Angebote

		// vars from homepage settings
		$sectionBgColor 		= get_sub_field('nav1_section_bg_color');
		$pattern				= get_sub_field('nav1_section_bg_pattern');
		$patternColor			= get_sub_field('nav1_section_bg_pattern_color');

		$buttonLink 			= get_sub_field('nav1_see_all_link');
		$buttonBg 				= get_sub_field('nav1_see_all_button_color');
		$buttonText 			= get_sub_field('nav1_see_all_button_text');
		$buttonTextColor		= get_sub_field('nav1_see_all_button_text_color');
		
		$sectionTitle			= get_sub_field('nav1_title');
		$titleColor				= get_sub_field('nav1_title_color');
		$description 			= get_sub_field('nav1_section_description');
		$descriptionColor		= get_sub_field('nav1_description_color');
		$sliderTextColor		= get_sub_field('nav1_slider_item_text_color');

		$spaceBottom 			= get_sub_field('nav1_space_bottom');

		if(get_sub_field('nav1_choose_layout') === 'slider') { ?>
<!-- ==================================================
 PAGE STRUCTURE: Besondere Angebote Slider
================================================== -->

		<section class="offer <?php if($pattern){echo $patternColor;} echo " ".$sectionBgColor; ?> <?php if($spaceBottom){echo 'acf-block';} ?>"><!-- start offer -->

			<div class="grid-1440">

				<h2 class="section-title <?php if ($titleColor) { echo $titleColor; } else { echo $defTitleColor; } ?>"><?php echo $sectionTitle; ?></h2>
				<?php if ($description): ?>
					<p class="section-description <?php echo $descriptionColor; ?>"><?php echo $description; ?></p>
				<?php endif; ?>

				<ul class="homepage-slider owl-carousel owl-theme">

				<?php 
					$args = array(
						'post_type'			=> 'nav_one',
						'posts_per_page' 	=> -1
					);

					$nav1 = new WP_Query( $args );
					if( $nav1->have_posts() ) {
						while( $nav1->have_posts() ) {
						$nav1->the_post();

						// vars from custom post settings
						$itemBgColor		= get_field('background_color');
						$excerpt			= get_field('excerpt');
						$image 				= get_field('image');
							// $url 		= $image['url'];
							$title 			= $image['title'];
							$alt 			= $image['alt'];
						$articleTitle 		= get_the_title();
				?>
						<li class="slider-item">
							<a href="<?php the_permalink(); ?>" title="Lesen Sie mehr über <?php the_title(); ?>">
								<div class="<?php echo $itemBgColor ?>"><!-- cross browser padding -->
									<div class="offerThumb">
										<img src="<?php echo $image['sizes']['img_sixteen_nine']; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>">
									</div>
									<div class="offerDescription">
										<h3><?php echo mb_strimwidth($articleTitle, 0, 45, '...'); ?></h3>
										<p class="<?php echo $sliderTextColor; ?>"><?php echo $excerpt; ?></p>
									</div>
								</div><!-- end cross browser padding -->
							</a>
						</li><!-- END: One Item of Slider -->
					<?php } // END of while 
					}
					else {
						echo 'No nav1 to display!';
					} 
					/* Restore original Post Data */
					wp_reset_postdata(); ?>

				</ul><!-- END: owl-slider -->

				<div class="permalink">
					<a href="<?php echo $buttonLink; ?>" class="fls-button <?php if ($buttonBg) { echo $buttonBg; } else { echo $defButtonBg; } ?> <?php if ($buttonTextColor) { echo $buttonTextColor; } else { echo $defButtonTextColor; } ?>"><?php if ($buttonText) { echo $buttonText; } else { echo $defButtonText; } ?></a>
				</div><!-- end: see all -->

			</div><!-- End: grid-1440 -->

		</section>

		<?php } // END of if 'choose_layout'










		elseif (get_sub_field('nav1_choose_layout') === 'list') { ?>
<!-- ==================================================
PAGE STRUCTURE: List nav1 posts
================================================== -->

		<section class="news <?php if($pattern){echo $patternColor; } echo " ".$sectionBgColor; ?> <?php if($spaceBottom){echo 'acf-block';} ?>"><!-- start list -->
			<div class="grid-1160">
				<h2 class="section-title <?php if ($titleColor) { echo $titleColor; } else { echo $defTitleColor; } ?>"><?php the_sub_field('title'); ?></h2>
				<?php if ($description): ?>
					<p class="section-description <?php echo $descriptionColor; ?>"><?php echo $description; ?></p>
				<?php endif; ?>

				<ul>
				<?php
					$args = array(
						'post_type'			=> 'nav_one',
						'posts_per_page'	=> 4
					);

					$nav1 = new WP_Query( $args );
					if( $nav1->have_posts() ) {
						while( $nav1->have_posts() ) {
						$nav1->the_post();

						$excerpt			= get_field('excerpt');
						$image 				= get_field('image');
							// $url 		= $image['url'];
							$title 		= $image['title'];
							$alt 		= $image['alt'];
				?>
					<li>

						<a href="<?php the_permalink(); ?>" title="Lesen Sie mehr über <?php the_title(); ?>">

							<div><!-- cross browser padding -->

								<div class="newsThumb grid-45 fl">
									<img src="<?php echo $image['sizes']['img_350x350']; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>">
								</div><!-- end newsThumb -->

								<div class="newsDescription grid-55 fl"><!-- start newsDescription -->

									<div><!-- start cross browser padding -->

										<h3><?php the_title(); ?></h3>
										<span class="newsCategory text-fossil-grey">Autor: <?php echo $full_name; ?></span>

										<p><?php the_field("excerpt"); ?></p>

										<div class="newsDate"><!-- start newsDate -->
											<span><img src="<?php echo get_template_directory_uri(); ?>/images/kalendar.png"></span>
											<span><?php echo get_the_date(); ?></span>
										</div> <!-- end newsDate -->   

									</div><!-- end cross browser padding -->

								</div><!-- end newsDescription -->
							
							</div><!-- end cross browser padding -->

						</a>

					</li>
				<?php
						}
					}
					else {
						echo 'No posts to display!';
					}
					/* Restore original Post Data */
					wp_reset_postdata();
				?>
				</ul>

				<div class="permalink">
					<a href="<?php echo $buttonLink; ?>" class="fls-button <?php if ($buttonBg) { echo $buttonBg; } else { echo $defButtonBg; } ?> <?php if ($buttonTextColor) { echo $buttonTextColor; } else { echo $defButtonTextColor; } ?>"><?php if ($buttonText) { echo $buttonText; } else { echo $defButtonText; } ?></a>
				</div><!-- end: see all -->

			</div> <!-- END: grid-1160 -->

		</section><!-- END: news -->

		<?php } // END of elseif 'choose_layout' === 'list' ?>










	<?php elseif(get_row_layout() == "blog_posts"):
// layout: Post

		// vars from homepage settings
		$sectionBgColor 		= get_sub_field('blog_section_bg_color');
		$pattern				= get_sub_field('blog_section_bg_pattern');
		$patternColor			= get_sub_field('blog_section_bg_pattern_color');

		$buttonLink 			= get_sub_field('blog_see_all_link');
		$buttonBg 				= get_sub_field('blog_see_all_button_color');
		$buttonText 			= get_sub_field('blog_see_all_button_text');
		$buttonTextColor		= get_sub_field('blog_see_all_button_text_color');
		
		$sectionTitle			= get_sub_field('blog_title');
		$titleColor				= get_sub_field('blog_title_color');
		$description 			= get_sub_field('blog_section_description');
		$descriptionColor		= get_sub_field('blog_description_color');
		$sliderTextColor		= get_sub_field('blog_slider_item_text_color');

		$spaceBottom 			= get_sub_field('blog_space_bottom');

		// Full name of author
		$fname = get_the_author_meta('first_name');
		$lname = get_the_author_meta('last_name');
		$full_name = '';

		if( empty($fname)){
			$full_name = $lname;
		} elseif( empty( $lname )){
			$full_name = $fname;
		} else {
			//both first name and last name are present
			$full_name = "{$fname} {$lname}";
		}

		if(get_sub_field('blog_choose_layout') === 'slider') { ?>
<!-- ==================================================
 PAGE STRUCTURE: Slider Posts
================================================== -->

		<section class="offer <?php if($pattern){echo $patternColor; } echo " ".$sectionBgColor; ?> <?php if($spaceBottom){echo 'acf-block';} ?>"><!-- start list -->

			<div class="grid-1440">

				<h2 class="section-title <?php if ($titleColor) { echo $titleColor; } else { echo $defTitleColor; } ?>"><?php echo $sectionTitle; ?></h2>
				<?php if ($description): ?>
					<p class="section-description <?php echo $descriptionColor; ?>"><?php echo $description; ?></p>
				<?php endif; ?>

				<ul class="owl-carousel owl-theme">

				<?php 
					$args = array(
						'post_type'			=> 'post'
					);

					$aktuelles = new WP_Query( $args );
					if( $aktuelles->have_posts() ) {
						while( $aktuelles->have_posts() ) {
						$aktuelles->the_post();

						// vars from custom post settings
						$itemBgColor		= get_field('background_color');
						$excerpt			= get_field('excerpt');
						$image 				= get_field('image');
							// $url 		= $image['url'];
							$title 			= $image['title'];
							$alt 			= $image['alt'];
						$articleTitle 		= get_the_title();
				?>
					<li class="slider-item">
						<a href="<?php the_permalink(); ?>" title="Lesen Sie mehr über <?php the_title(); ?>">
							<div class="<?php echo $itemBgColor ?>" style="background: #de8e2b;"><!-- cross browser padding -->
								<div class="offerThumb">
									<img src="<?php echo $image['sizes']['img_sixteen_nine']; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>">
								</div>
								<div class="offerDescription">
									<h3><?php echo mb_strimwidth($articleTitle, 0, 45, '...'); ?></h3>
									<p class="<?php echo $sliderTextColor; ?>"><?php echo $excerpt; ?></p>
								</div>
							</div><!-- end cross browser padding -->
						</a>
					</li><!-- END: One Item of Slider -->
					<?php } // END of while 
					}
					else {
						echo 'No post to display!';
					} 
					/* Restore original Post Data */
					wp_reset_postdata(); ?>

				</ul><!-- END: Angebote Slick-slider -->

				<div class="permalink">
					<a href="<?php echo $buttonLink; ?>" class="fls-button <?php if ($buttonBg) { echo $buttonBg; } else { echo $defButtonBg; } ?> <?php if ($buttonTextColor) { echo $buttonTextColor; } else { echo $defButtonTextColor; } ?>"><?php if ($buttonText) { echo $buttonText; } else { echo $defButtonText; } ?></a>
				</div><!-- end: see all -->

			</div>

		</section>

		<?php } // END of if 'choose_layout'
		









		elseif (get_sub_field('blog_choose_layout') === 'list') { ?>
<!-- ==================================================
PAGE STRUCTURE: List posts 
================================================== -->

		<section class="news <?php if($pattern){echo $patternColor; } echo " ".$sectionBgColor; ?> <?php if($spaceBottom){echo 'acf-block';} ?>"><!-- start list -->

			<div class="grid-1160">

				<h2 class="section-title <?php if ($titleColor) { echo $titleColor; } else { echo $defTitleColor; } ?>"><?php echo $sectionTitle; ?></h2>
				<?php if ($description): ?>
					<p class="section-description <?php echo $descriptionColor; ?>"><?php echo $description; ?></p>
				<?php endif; ?>

				<ul>

				<?php
					$args = array(
						'post_type'			=> 'post',
						'posts_per_page'	=> 4
					);

					$aktuelles = new WP_Query( $args );
					if( $aktuelles->have_posts() ) {
						while( $aktuelles->have_posts() ) {
						$aktuelles->the_post();

						$image				= get_field('image');
							//$url 			= $image['url'];
							$title 			= $image['title'];
							$alt 			= $image['alt'];
				?>
					<li>

						<a href="<?php the_permalink(); ?>" title="Lesen Sie mehr über <?php the_title(); ?>">

							<div><!-- cross browser padding -->

								<div class="newsThumb grid-45 fl">
									<img src="<?php echo $image['sizes']['img_350x350']; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>">
								</div><!-- end newsThumb -->

								<div class="newsDescription grid-55 fl"><!-- start newsDescription -->

									<div><!-- start cross browser padding -->

										<h3><?php the_title(); ?></h3>
										<span class="newsCategory text-fossil-grey">Autor: <?php echo $full_name; ?></span>

										<p><?php the_field("excerpt"); ?></p>

										<div class="newsDate"><!-- start newsDate -->
											<span><img src="<?php echo get_template_directory_uri(); ?>/images/kalendar.png"></span>
											<span><?php echo get_the_date(); ?></span>
										</div> <!-- end newsDate -->   

									</div><!-- end cross browser padding -->

								</div><!-- end newsDescription -->
							
							</div><!-- end cross browser padding -->

						</a>

					</li>
				<?php	}
					}
					else {
						echo 'No posts to display!';
					}
					/* Restore original Post Data */
					wp_reset_postdata();
				?>
				</ul>

				<div class="permalink">
					<a href="<?php echo $buttonLink; ?>" class="fls-button <?php if ($buttonBg) { echo $buttonBg; } else { echo $defButtonBg; } ?> <?php if ($buttonTextColor) { echo $buttonTextColor; } else { echo $defButtonTextColor; } ?>"><?php if ($buttonText) { echo $buttonText; } else { echo $defButtonText; } ?></a>
				</div><!-- end: see all -->

			</div> <!-- END: grid-1160 -->

		</section><!-- END: Latest Posts -->

		<?php } // END of elseif 'choose_layout' === 'list' ?>

	<?php endif;

endwhile; ?>