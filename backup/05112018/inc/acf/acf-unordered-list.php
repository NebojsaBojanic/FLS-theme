<div class="acf-block acf-unordered-list">
	<?php // check if the nested repeater field has rows of data (If have ordered list)
	if( have_rows('unordered_list') ): ?>
		<ul>

		<?php // loop through the rows of data (while have ordered list - list all items)
		while ( have_rows('unordered_list') ) : the_row();

			$listItem 	= get_sub_field('list_item');
		?>
			<li>
				<?php echo $listItem; ?>
			</li><!-- end: one list item -->

		<?php endwhile; /* end: while have unordered list - list all items */ ?>

		</ul>
	<?php endif; /* end: If have unordered list */?>
</div>