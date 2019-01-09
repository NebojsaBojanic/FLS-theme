<div class="acf-block acf-ordered-list">
	<?php // check if the nested repeater field has rows of data (If have ordered list)
	if( have_rows('ordered_list') ): ?>
		<ol>

		<?php // loop through the rows of data (while have ordered list - list all items)
		while ( have_rows('ordered_list') ) : the_row();

			$listItem 	= get_sub_field('list_item');
		?>
			<li>
				<?php echo $listItem; ?>
			</li><!-- end: one list item -->

		<?php endwhile; /* end: while have ordered list - list all items */ ?>

		</ol>
	<?php endif; /* end: If have ordered list */?>
</div>