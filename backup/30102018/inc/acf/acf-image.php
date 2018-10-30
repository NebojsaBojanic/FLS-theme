<?php 
	$image 		= get_sub_field('image');
	  $url 		= $image['url'];
	  $size 	= $image['sizes']['img_sixteen_nine'];
	  $title 	= $image['title'];
	  $alt 		= $image['alt'];
	$caption	= get_sub_field("caption");
?>
	<div class="acf-block acf-image">
		<figure>
			<img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>">
			<?php if ($caption): ?>
				<figcaption><?php echo $caption; ?></figcaption>
			<?php endif; ?>
		</figure>
	</div>