<?php 
	$titleColor			= get_field('blog_heading_color', 'option');
	$defTitleColor		= get_field('default_headings_color', 'option');
?>

<div class="sidebar-widget w-search <?php if ($titleColor) { echo $titleColor; } else { echo $defTitleColor; } ?>">
	<div class="widget">
		<form method="get" id="searchform" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<input type="text" class="field" name="s" id="s" placeholder="Suchbegriff" />
			<button type="submit" class="submit <?php echo $titleColor; ?>" name="submit" id="searchsubmit" value="">
				<span class="icon-Search_icon"></span>
			</button>
		</form>
	</div>
</div>