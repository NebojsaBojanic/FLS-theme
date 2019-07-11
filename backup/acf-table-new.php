<?php 
$table = get_sub_field( 'table' );

if ( $table ) { ?>
	<?php if ( $table['header'] ) { ?>

		<div class="acf-block acf-table acf-table-desktop">

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

								<td class="table-data">
									<?php echo $td['c']; ?>
								</td>

							<?php } ?>
						</tr>
					<?php } // End: $table['body'] as $tr ?>
				</tbody>

			</table>

		</div><!-- End: acf-table -->

		<div class="acf-block acf-table-mobile">

			<?php foreach ( $table['body'] as $tr ) { ?>

				<div class="acf-table-mobile-row">

					<div class="fls-table-mobile-head grid-50">
						<?php foreach ( $table['header'] as $th ) { ?>
							<div class="fls-table-mobile-head-td">
								<?php echo $th['c']; ?>
							</div>
						<?php } ?>
					</div>

					<div class="fls-table-mobile-body grid-50">
						<?php foreach ( $tr as $td ) { ?>
							<div class="fls-table-mobile-body-td">
								<?php echo $td['c']; ?>
							</div>
						<?php } ?>
					</div>

				</div><!-- End: acf-table-mobile-row -->

			<?php } // End: $table['body'] as $tr ?>

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