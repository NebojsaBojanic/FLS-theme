<?php
/**
* The template shows Archive Page
*
*/
get_header(); ?>

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

	<div class="archive-title">
		<?php
			the_archive_title( '<h1 class="section-title">', '</h1>' );
			the_archive_description( '<div class="taxonomy-description">', '</div>' );
		?>
	</div>

	<div class="blog grid-1440 clearfix">

		<section class="aktuelles grid-50 fl clearfix">

			<div class="archive-results">

				<?php if (have_posts()) :

					while (have_posts()) : the_post();
						$image		= get_field('image');
							$url 	= $image['url'];
							$title 	= $image['title'];
							$alt 	= $image['alt'];
						$date 		= get_the_date('l, F j, Y');

						// Full name of author
						$fname 		= get_the_author_meta('first_name');
						$lname 		= get_the_author_meta('last_name');
						$full_name 	= '';

						if ( empty($fname) ) {
							$full_name = $lname;
						} elseif( empty( $lname )) {
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

					<?php endwhile;

				endif; ?>

				<h2>Archives by Month:</h2>
				<ul>
					<?php wp_get_archives('type=monthly'); ?>
				</ul>

			</div><!-- END: archive-results -->

		</section>

		<?php get_sidebar(); ?>

		<div class="clearfix"></div>

		<div class="pagination textCenter grid-100 <?php if ($titleColor) { echo $titleColor; } else { echo $defTitleColor; } ?>">

			<?php the_posts_pagination( array(
				'mid_size'  => 2,
				'prev_text' => "<",
				'next_text' => ">"
			) ); ?>

		</div><!-- END: pagination-->

	</div><!-- END: blog -->

</div><!-- END: blog-wrap -->
<?php get_footer(); ?>