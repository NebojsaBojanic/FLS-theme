<?php 

get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php // Default settings
	include("inc/theme-settings/theme-settings-defaults.php");
	// Title
	$titleColor = get_field('blog_heading_color','option');
?>

	<div class="blog-wrap grid-100">

		<div class="blog grid-1440 clearfix">

			<article class="aktuelles grid-55 fl clearfix">
			
				<h1 class="section-title <?php if ($titleColor) { echo $titleColor; } else { echo $defTitleColor; } ?>"><?php the_title(); ?></h1>
					
				<?php while(the_flexible_field("blog")): ?>

					<?php include("inc/acf/acf-all-fields.php"); ?>

				<?php endwhile; ?>

				<?php get_template_part( 'template-parts/sb', 'share' ); ?>

				<div class="content-pagination clearfix <?php if ($titleColor) { echo $titleColor; } else { echo $defTitleColor; } ?>">
					<div class="prev fl">
						<?php 
							$prev_post = get_adjacent_post(false, '', true);
						if(!empty($prev_post)) {
							echo '<a href="' . get_permalink($prev_post->ID) . '" title="' . $prev_post->post_title . '">' . $prev_post->post_title . '</a>';
						} ?>
					</div>
					<div class="next fr">
						<?php 
							$next_post = get_adjacent_post(false, '', false);
						if(!empty($next_post)) {
							echo '<a href="' . get_permalink($next_post->ID) . '" title="' . $next_post->post_title . '">' . $next_post->post_title . '</a>';
						} ?>
					</div>
				</div>

			</article><!--END: Single Post  -->

			<?php get_sidebar();?>

		</div><!-- END: blog -->

	</div><!-- END: blog-wrap -->

	<?php endwhile; ?>
<?php endif; ?>


<?php get_footer();?>