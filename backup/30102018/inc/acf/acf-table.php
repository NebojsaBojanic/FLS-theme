<div class="acf-block acf-table">
	<?php 
	$table = get_sub_field( 'table' );

	if ( $table ) { ?>
		<table>
			<?php if ( $table['header'] ) { ?>
				<thead>
					<tr>
						<?php foreach ( $table['header'] as $th ) { ?>
							<th>
								<?php echo $th['c']; ?>
							</th>
						<?php } ?>
					</tr>
				</thead>
			<?php } ?>

			<tbody>
				<?php foreach ( $table['body'] as $tr ) { ?>
					<tr>
						<?php foreach ( $tr as $td ) { ?>
							<td>
								<?php echo $td['c']; ?>
							</td>
						<?php } ?>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	<?php } ?>
</div>