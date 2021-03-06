<?php 

if ( is_front_page() ) :
	get_header('home');
else:
	get_header();
endif; ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php
	/*
	*  Loop through a Flexible Content field and display it's content with different views for different layouts
	*/
// Default settings
	include("inc/theme-settings/theme-settings-defaults.php");
	// Title
	$titleColor		= get_field('nav1_heading_color', 'option');
?>

	<article class="nav-wrap page-content-wrap">

		<div class="nav grid-1440 page-center clearfix">

			<h1 class="section-title <?php if ($titleColor) { echo $titleColor; } else { echo $defTitleColor; } ?>"><?php the_title(); ?></h1>
			
			<?php
				// vars
				$image		= get_field('image');
					$url 	= $image['url'];
					$title 	= $image['title'];
					$alt 	= $image['alt'];
				$icon		= get_field('icon');
				$excerpt	= get_field('excerpt');
				$text		= get_field('text');
				$termine	= get_field('termine');
				$date		= get_field('date');
				$link		= get_field('link');
			?>
			<div class="nav1-image">
				<figure>
					<img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>">
				</figure>
			</div>

			<div class="nav1-text">
				<?php echo $text; ?>
			</div>		

		</div><!--END: Nav1 Content -->

	</article><!--END: Nav1 -->

	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();?>