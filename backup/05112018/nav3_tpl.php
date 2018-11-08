<?php /* Template Name: Nav3 Template */

if ( is_front_page() ) :
	get_header('home');
else:
	get_header();
endif; ?>

<?php
// Default settings
	include("inc/theme-settings/theme-settings-defaults.php");
	// Title
	$titleColor 	= get_field('nav3_title_color', 'option');
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="nav-wrap grid-100">

		<div class="nav grid-1440 page-center clearfix">

			<article class="nav-article grid-55 fl clearfix">

				<h1 class="section-title <?php if ($titleColor) { echo $titleColor; } else { echo $defTitleColor; } ?>"><?php the_title(); ?></h1>

				<?php while(the_flexible_field("nav_custom_post")): ?>

					<?php include("inc/acf/acf-all-fields.php"); ?>

				<?php endwhile; ?>

			</article>

			<?php get_sidebar('nav3'); ?>

		</div><!-- END: Nav -->

	</div><!-- END: Nav Wrap -->

	<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>