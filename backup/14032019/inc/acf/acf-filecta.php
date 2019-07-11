<?php 
	// vars
	$file 				= get_sub_field('file');
		$url 			= $file["url"];
		$title 			= $file['title'];
	$bgcolor 			= get_sub_field('background_color');
	$pattern			= get_sub_field('pattern');
	$patternColor		= get_sub_field('pattern_color');

	$spaceBottom 		= get_sub_field('file_space_bottom');
?>	
	<section class="<?php if($spaceBottom){echo 'acf-block';} ?> acf-file-section <?php if($pattern){echo $patternColor; } echo " ".$bgcolor; ?>">
		<div class="acf-file-cta grid-70 page-center clearfix">
			<div class="file-data grid-30">
				<!-- This is place for file icon -->
				<a href="<?php echo $url; ?>" target="_blank" title="Download document">
					<?php include('correctfile.php'); ?>
				</a>
			</div>
			<div class="file-info grid-70">
				<h3><?php the_sub_field("name"); ?></h3>
				<p><?php the_sub_field("description"); ?></p>
			</div>
		</div>
	</section><!-- END: acf-file -->