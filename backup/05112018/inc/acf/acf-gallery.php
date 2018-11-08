<div class="acf-block acf-gallery gallery"><!-- start gallery -->

	<?php
		$gallery 		= get_sub_field('gallery');
		$titleOfGallery = get_sub_field('title_of_gallery');
		$titleColor		= get_sub_field('gallery_title_color');
		
	?>
	<?php if ($titleOfGallery): ?>
		<h2 class="section-title <?php if ($titleColor) { echo $titleColor; } else { echo $defTitleColor; } ?>"><?php echo $titleOfGallery; ?></h2>
	<?php endif; ?>

	<?php if( $gallery ): ?>

		<ul class="grid-gallery clearfix">
			<?php
			$i = 0; 
			foreach( $gallery as $image ):
				if ($i++ < 7) : ?>
					<li>
						<a data-fancybox="gallery" href="<?php echo $image['url']; ?>">
							<img src="<?php echo $image['sizes']['img_sixteen_nine']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php $image['title'] ?>">
						</a>
					</li><!-- END: one image in of gallery -->

				<?php elseif ($i == 8) : ?>
					<li class="not-displayed-images">
						<a data-fancybox="gallery" href="<?php echo $image['url']; ?>">
							<figure>
								<img src="<?php echo bloginfo('template_url'); ?>/images/Placeholder_1.png">
								<figcaption><?php echo '+'.(count($gallery)+1-$i); ?></figcaption>
							</figure>
						</a>
					</li><!-- END: one image in of gallery -->

				<?php else : ?>
					<li class="display-none">
						<a data-fancybox="gallery" href="<?php echo $image['url']; ?>">
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php $image['title'] ?>">
						</a>
					</li>

				<?php endif;
			endforeach; ?>
		</ul>
		<ul class="gallery-slide owl-carousel owl-theme">
			<?php
			foreach( $gallery as $image ): ?>

					<li>
						<img src="<?php echo $image['sizes']['img_sixteen_nine']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php $image['title'] ?>">
					</li>

			<?php endforeach; ?>
		</ul><!-- END: gallery-slide -->
	<?php endif; ?>

</div><!-- end gallery -->