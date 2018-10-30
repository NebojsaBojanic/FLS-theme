<!-- This is template part for most popular posts -->
<?php
	$titleColor			= get_field('blog_heading_color', 'option');
	$defTitleColor		= get_field('default_headings_color', 'option');
?>

<?php if ( is_active_sidebar( 'popular_posts' ) ) : ?>
	<div class="sidebar-widget w-most-popular-posts <?php if ($titleColor) { echo $titleColor; } else { echo $defTitleColor; } ?>">
		<?php dynamic_sidebar( 'popular_posts' ); ?>
	</div>
<?php endif; ?>