<?php 
	$file 			= get_sub_field('file');
	  $url 			= $file["url"];
	$fileName 		= get_sub_field("name");
	$description	= get_sub_field('description');
?>
<div class="acf-block acf-file">
	<a href="<?php echo $url; ?>" target="_blank" title="Download document">
		<div class="file-data text-fossil-grey">
			<?php include('correctfile.php'); ?>
		</div>
		<div class="file-info text-fossil-grey">
			<h4><?php echo $fileName; ?></h4>
		</div>
		<?php if ($description): ?>
			<?php echo $description; ?>
		<?php endif ?>
	</a>
</div><!-- END: acf-file -->