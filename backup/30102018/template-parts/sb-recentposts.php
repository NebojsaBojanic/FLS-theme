<!-- This is template part for Recent posts -->
<?php 
	$titleColor			= get_field('blog_heading_color', 'option');
	$defTitleColor		= get_field('default_headings_color', 'option');
?>

<?php if ( is_active_sidebar( 'recent_posts' ) ) : ?>
	<div class="sidebar-widget w-recent-posts <?php if ($titleColor) { echo $titleColor; } else { echo $defTitleColor; } ?>">
		<?php dynamic_sidebar( 'recent_posts' ); ?>
	</div>
<?php endif; ?>