<?php /* Template Name: Forms Template */

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
	$titleColor 	= get_field('formulare_title_color', 'option');
?>
	<article class="formulare grid-1440">

		<h1 class="section-title <?php if ($titleColor) { echo $titleColor; } else { echo $defTitleColor; } ?>"><?php the_title(); ?></h1>

		<div class="grid-60 page-center">

		<?php while(the_flexible_field("download_formulare")):  ?>

			<?php include("inc/acf/acf-all-fields.php"); ?>

		<?php endwhile; ?>

		</div>

	</article><!-- END: Download Formulare -->

	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();?>