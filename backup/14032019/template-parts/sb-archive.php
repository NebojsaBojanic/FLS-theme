<!-- This is template part for Blog sidebar -->
<?php 
	$titleColor			= get_field('blog_heading_color', 'option');
	$defTitleColor		= get_field('default_headings_color', 'option');
?>

<?php if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
	<div class="sidebar-widget w-archive <?php if ($titleColor) { echo $titleColor; } else { echo $defTitleColor; } ?>">
		<?php dynamic_sidebar( 'blog-sidebar' ); ?>
	</div>
<?php endif; ?>
