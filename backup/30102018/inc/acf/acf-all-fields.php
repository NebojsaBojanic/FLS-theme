	<?php if(get_row_layout() == "file"):
// layout: File ?>

		<?php include("acf-file.php"); ?>





	<?php elseif(get_row_layout() == "text"): 
// layout: Text ?>

		<?php include("acf-text.php"); ?>





	<?php elseif(get_row_layout() == "filecta"):
// layout: File ?>

		<?php include("acf-filecta.php"); ?>





	<?php elseif(get_row_layout() == "gallery"):
// layout: Gallery ?>

		<?php include("acf-gallery.php"); ?>





	<?php elseif(get_row_layout() == "image"):
// layout: Image ?>
		
		<?php include("acf-image.php"); ?>





	<?php elseif( get_row_layout() == "ordered_list" ): 
// layout: Ordered_list ?>

		<?php include("acf-ordered-list.php"); ?>





	<?php elseif(get_row_layout() == "quote"):
// layout: Quote ?>
		
		<?php include("acf-quote.php"); ?>





	<?php elseif(get_row_layout() == "schiiler"):
// layout: Schiiler ?>

		<?php include("acf-schiiler.php"); ?>





	<?php elseif(get_row_layout() == "staff"):
// layout: Staff ?>

		<?php include("acf-staff.php"); ?>
		




	<?php elseif(get_row_layout() == "subtitle"):
// layout: Subtitle ?>

		<h3 class="acf-block section-subtitle <?php if ($titleColor) { echo $titleColor; } else { echo $defTitleColor; } ?>"><?php the_sub_field("subtitle"); ?></h3>





	<?php elseif(get_row_layout() == "table"):
// layout: Table ?>

		<?php include("acf-table.php"); ?>





	<?php elseif(get_row_layout() == "text_and_image"):
// layout: Text and Image ?>

		<?php include("acf-text-image.php"); ?>





	<?php elseif(get_row_layout() == "text_two_column"): 
// layout: Text in two columns ?>

		<?php include("acf-texttwocolumn.php"); ?>





	<?php elseif( get_row_layout() == "unordered_list" ): 
// layout: Unordered_list ?>

		<?php include("acf-unordered-list.php"); ?>





	<?php elseif(get_row_layout() == "video"):
// layout: Video ?>

		<?php include("acf-video.php"); ?>





	<?php endif;