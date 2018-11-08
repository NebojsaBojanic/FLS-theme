<?php /* Template Name: Home Template */

if ( is_front_page() ) :
	get_header('home');
else:
	get_header();
endif; ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- ==================================================
 PAGE STRUCTURE: Unsere Schule
================================================== -->

<?php 
// Default settings
	include("inc/theme-settings/theme-settings-defaults.php");
?>

	<?php include('inc/custom-homepage.php'); ?>

<?php endwhile; ?>

<?php endif; ?>

<?php get_footer();?>