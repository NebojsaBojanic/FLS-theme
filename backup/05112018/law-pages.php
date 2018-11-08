<?php /* Template Name: Privacy Policy Template */

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
	$titleColor 	= get_field('schule_heading_color','option');
	$privacy 		= get_field('privacy_policy');
?>

	<article class="law-page grid-1160">

		<h1 class="section-title <?php if ($titleColor) { echo $titleColor; } else { echo $defTitleColor; } ?>"><?php the_title(); ?></h1>
		
		<?php echo $privacy; ?>

	</article><!-- END: law-page -->

	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();?>