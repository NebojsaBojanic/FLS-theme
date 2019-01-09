<?php
	// Title
	$title 				= get_sub_field('title');
	$titleColor 		= get_sub_field('title_color');
	// Button
	$buttonBg			= get_sub_field('button_color');
	$buttonText 		= get_sub_field('button_text');
	$buttonTextColor	= get_sub_field('button_text_color');

	$image 				= get_sub_field('image');
	$layout 			= get_sub_field('layout');
	$link 				= get_sub_field('page_link');
	$paragraph 			= get_sub_field('text');
?>

<div class="acf-block acf-paragraph-image"><!-- start acf-paragraph-image -->

	<div class="grid-1160">

	<?php if ($layout == 'right') { // If layout with image on right side picked ?>

		<div class="text-image-element grid-50">
			<div class="paragraph">
				<?php if ($title) { ?>
					<h2 class="<?php if ($titleColor) { echo $titleColor; } else { echo $defTitleColor; } ?>"><?php echo $title; ?></h2>
				<?php } ?>
				<p><?php echo $paragraph; ?></p>
				<?php if ($link) { ?>
					<!-- Displaying button only on homepage -->
					<a href="<?php echo $link; ?>" class="fls-button <?php if ($buttonBg) { echo $buttonBg; } else { echo $defButtonBg; } ?> <?php if ($buttonTextColor) { echo $buttonTextColor; } else { echo $defButtonTextColor; } ?>"><?php echo $buttonText; ?></a>
				<?php } ?>
			</div>
		</div>

		<div class="text-image-element grid-50">
			<img src="<?php echo $image['url']; ?>" class="frame">
		</div>

	<?php } else { // If layout with image on left side picked ?>

		<div class="text-image-element grid-50">
			<img src="<?php echo $image['url']; ?>" class="frame">
		</div>

		<div class="text-image-element grid-50">
			<div class="paragraph-2">
				<?php if ($title) { ?>
					<h2 class="<?php if ($titleColor) { echo $titleColor; } else { echo $defTitleColor; } ?>"><?php echo $title; ?></h2>
				<?php } ?>
				<p><?php echo $paragraph; ?></p>
				<?php if ($link) { ?>
					<!-- Displaying button only on homepage -->
					<a href="<?php echo $link; ?>" class="fls-button <?php if ($buttonBg) { echo $buttonBg; } else { echo $defButtonBg; } ?> <?php if ($buttonTextColor) { echo $buttonTextColor; } else { echo $defButtonTextColor; } ?>"><?php echo $buttonText; ?></a>
				<?php } ?>
			</div>
		</div>

	<?php } // End: layout condition ?>

	</div><!-- End: grid-1160 -->

</div><!-- end acf-paragraph-image -->