<?php 

	// Button
	$buttonBg 			= get_sub_field('posts_button_color');
	$buttonText 		= get_sub_field('posts_text_on_buttons');
	$buttonTextColor	= get_sub_field('posts_text_color_on_buttons');

	$description 		= get_sub_field('posts_description');

	$category			= get_sub_field('posts_category_listed');
	$schiilerTitle 		= get_sub_field('posts_title');
	$titleColor			= get_sub_field('posts_title_color');
?>
<section class="acf-schiiler-section">
	
	<div class="grid-1160">

		<h2 class="section-title <?php echo $titleColor; ?>"><?php echo $schiilerTitle; ?></h2>

		<?php if ($description): ?>
			<p class="section-description"><?php echo $description; ?></p>
		<?php endif; ?>

		<ul class="acf-schiiler owl-carousel owl-theme">

		<?php 
			$args = array(
				'post_type'			=> 'post',
				'category_name'		=> $category->name
			);

			$news = new WP_Query( $args );
			if( $news->have_posts() ) {
				while( $news->have_posts() ) {
				$news->the_post();

				$image		= get_field('image');
				  $imgUrl 	= $image['url'];
				  $imgTitle = $image['title'];
				  $imgAlt 	= $image['alt'];
				$bgcolor	= get_sub_field('background_color');
				$date		= get_the_date('d.m.Y');
				$excerpt	= get_field('excerpt');
		?>
			<li>
				<img src="<?php echo $image['sizes']['img_sixteen_nine']; ?>" alt="<?php echo $imgAlt; ?>" title="<?php echo $imgTitle; ?>">
				<div class="description">
					<h2 class="text-grey"><?php the_title(); ?></h2>
					<p><?php echo $excerpt; ?></p>
					<div class="permalink">
						<a class="fls-button <?php if ($buttonBg) { echo $buttonBg; } else { echo $defButtonBg; } ?> <?php if ($buttonTextColor) { echo $buttonTextColor; } else { echo $defButtonTextColor; } ?>" href="<?php the_permalink(); ?>"  title="More about <?php the_title(); ?>">
							<?php if ($buttonText) { echo $buttonText; } else { echo $defButtonText; } ?>
						</a>
					</div>
				</div><!-- end: description -->
			</li><!-- END: One Item of Slider -->

		<?php 	} // END of while loop have_posts
			} // END of if have_posts
			else {
				echo 'No Schiiler news to display!';
			}
			/* Restore original Post Data */
			wp_reset_postdata();
		?>

		</ul>

	</div><!-- End: grid-1160 -->

</section><!-- END: acf-schiiler -->