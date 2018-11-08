<?php /* Template for custom posts Nav2 */

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
	$titleColor		= get_field('nav2_title_color', 'option');
?>

	<div class="nav-wrap grid-100">

		<div class="nav grid-1440 page-center clearfix">

			<article class="nav-article grid-55 fl clearfix">

				<h1 class="section-title <?php if ($titleColor) { echo $titleColor; } else { echo $defTitleColor; } ?>"><?php the_title(); ?></h1>

				<?php while(the_flexible_field("nav_custom_post")): ?>

					<?php include("inc/acf/acf-all-fields.php"); ?>

				<?php endwhile; ?>

			</article>

			<?php get_sidebar('nav2'); ?>

		</div><!-- END: nav -->

	</div><!-- END: nav-wrap -->

	<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>