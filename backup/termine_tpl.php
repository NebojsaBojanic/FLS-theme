<?php /* Template Name: Calendar Template */

get_header(); 

// Default settings
	include("inc/theme-settings/theme-settings-defaults.php");
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="termine-calendar grid-1440">

		<h1 class="section-title <?php if ($titleColor) { echo $titleColor; } else { echo $defTitleColor; } ?>"><?php the_title(); ?></h1>

		<?php the_content(); ?>

		<?php 
			function stripAttributes($html,$attribs) {
				$dom = new simple_html_dom();
				$dom->load($html);
				foreach($attribs as $attrib)
					foreach($dom->find("*[$attrib]") as $e)
						$e->$attrib = null; 
				$dom->load($dom->save());
				return $dom->save();
			}
		 ?>

	</div>

	<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>