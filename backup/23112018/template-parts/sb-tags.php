<!-- This is template part for Archive -->
<?php 
	$titleColor			= get_field('blog_heading_color', 'option');
	$defTitleColor		= get_field('default_headings_color', 'option');
?>

<?php if ( is_active_sidebar( 'tags-sidebar' ) ) : ?>
	<div class="sidebar-widget w-tags <?php if ($titleColor) { echo $titleColor; } else { echo $defTitleColor; } ?>">
		<?php dynamic_sidebar( 'tags-sidebar' ); ?>
	</div>
<?php endif; ?>