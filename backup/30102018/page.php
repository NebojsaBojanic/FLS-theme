<?php
/**
 * The template for displaying front page
 *
 */

get_header('home'); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- ==================================================
 PAGE STRUCTURE: Unsere Schule
================================================== -->

<?php 
// Default settings
	include("inc/theme-settings/theme-settings-defaults.php");
?>

	<div class="section-one">

		<?php if( have_rows('section_one') ): 

			while( have_rows('section_one') ): the_row(); 

				include("inc/acf/acf-text-image.php");

			endwhile;

		endif; // End: If section_one group ?>

	</div><!-- end: section-one -->

	<?php include('inc/custom-homepage.php'); ?>

<?php endwhile; ?>

<?php endif; ?>

<?php get_footer();?>