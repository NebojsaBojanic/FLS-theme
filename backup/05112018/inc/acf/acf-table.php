<?php 
$table = get_sub_field( 'table' );

if ( $table ) { ?>
	<?php if ( $table['header'] ) { ?>

		<div class="acf-block acf-table">

			<table>

				<thead id="fls-table-head" class="fls-table-head">
					<tr>
						<?php foreach ( $table['header'] as $th ) { ?>
							<th>
								<?php echo $th['c']; ?>
							</th>
						<?php } ?>
					</tr>
				</thead>

				<tbody id="fls-table-body" class="fls-table-body">
					<?php foreach ( $table['body'] as $tr ) { ?>
						<tr>
							<?php foreach ( $tr as $td ) { ?>

								<?php if ( $table['header'] ) { ?>
									<td class="mobile-table-head">
										<?php echo $th['c']; ?>
									</td>
								<?php } ?>

								<td class="table-data">
									<?php echo $td['c']; ?>
								</td>

							<?php } ?>
						</tr>
					<?php } ?>
				</tbody>

			</table>

		</div><!-- End: acf-table -->

	<?php } else { // If don't have table header ?>

		<div class="acf-block acf-table">

			<table>

				<tbody class="fls-table-body">
					<?php foreach ( $table['body'] as $tr ) { ?>
						<tr>
							<?php foreach ( $tr as $td ) { ?>

								<td class="table-data-only">
									<?php echo $td['c']; ?>
								</td>

							<?php } ?>
						</tr>
					<?php } ?>
				</tbody>

			</table>

		</div><!-- End: acf-table -->

	<?php } // End: if have table header ?>
<?php } ?>