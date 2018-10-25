<?php /* Template Name: About School Template */

get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php 
	/*
	*  Loop through a Flexible Content field and display it's content with different views for different layouts
	*/
// Default settings
	include("inc/theme-settings/theme-settings-defaults.php");
	// Title
	$titleColor = get_field('schule_heading_color','option');
?>

	<article class="unsere grid-100">

		<h1 class="section-title <?php if ($titleColor) { echo $titleColor; } else { echo $defTitleColor; } ?>"><?php the_title(); ?></h1>
		
		<?php while(the_flexible_field("schule")):  ?>

			<?php include("inc/acf/acf-all-fields.php"); ?>

		<?php endwhile; // end: While schule flexible field ?>

	</article><!-- END: unsere -->

	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();?>