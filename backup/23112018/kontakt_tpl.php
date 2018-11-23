<?php /* Template Name: Contact Page Template */

if ( is_front_page() ) :
	get_header('home');
else:
	get_header();
endif; ?>

<?php if (have_posts()) : while (have_posts()) : the_post();

	/*
	*  Loop through a Flexible Content field and display it's content with different views for different layouts
	*/
// Default settings
	include("inc/theme-settings/theme-settings-defaults.php");

	$titleColor 	= get_field('contact_title_color','option');

	$paragraph 		= get_field('paragraph');
?>

	<article class="kontakt page-content-wrap">

		<h1 class="section-title <?php if ($titleColor) { echo $titleColor; } else { echo $defTitleColor; } ?>"><?php the_title(); ?></h1>

		<div class="kontakt-info grid-1160">

			<h2 class="section-subtitle">Schulname</h2>

			<?php echo $paragraph; ?>

			<div class="table">

			<?php while(the_flexible_field("contact_informations")):  ?>

				<?php if(get_row_layout() == "addresses"): 
		// layout: addresses
				$label 		= get_sub_field('label');
				?>
					<div class="table-cell">
						<p class="contact-info-title text-light-grey"><?php echo $label; ?></p>
						<?php if( have_rows('addresses') ): ?>

							<?php while( have_rows('addresses') ): the_row();
							$street 	= get_sub_field('street');
							$number 	= get_sub_field('number');
							$postCode 	= get_sub_field('post_code');
							$city 		= get_sub_field('city'); ?>

								<p class="contant-info">
									<?php echo $street; ?><span class="pipe <?php if ($titleColor) { echo $titleColor; } else { echo $defTitleColor; } ?>"> | </span><?php echo $number; ?>
									<br>
									<?php echo $postCode; ?><span class="pipe <?php if ($titleColor) { echo $titleColor; } else { echo $defTitleColor; } ?>"> | </span><?php echo $city; ?>
								</p>

							<?php endwhile; ?>

						<?php endif; ?>
					</div>

				<?php elseif(get_row_layout() == "emails"):
		// layout: emails
				$label 		= get_sub_field('label');
				?>
					<div class="table-cell">
						<p class="contact-info-title text-light-grey"><?php echo $label; ?></p>
						<?php if( have_rows('emails') ): ?>

							<?php while( have_rows('emails') ): the_row();
							$email 	= get_sub_field('email'); ?>

								<p class="contant-info"><a href="mailto:<?php echo $email; ?>" title="Send mail to <?php echo $email; ?>"><?php echo $email; ?></a></p>

							<?php endwhile; ?>

						<?php endif; ?>
					</div>

				<?php elseif(get_row_layout() == "fax_numbers"):
		// layout: fax_numbers
				$label 		= get_sub_field('label');
				?>
					<div class="table-cell">
						<p class="contact-info-title text-light-grey"><?php echo $label; ?></p>
						<?php if( have_rows('fax_numbers') ): ?>

							<?php while( have_rows('fax_numbers') ): the_row();
							$onlyNumber 	= get_sub_field('only_numbers');
							$faxNumber 		= get_sub_field('fax_number'); ?>

								<p class="contant-info"><a href="tel:<?php echo $onlyNumber; ?>" title="Call this number"><?php echo $faxNumber; ?></a></p>

							<?php endwhile; ?>

						<?php endif; ?>
					</div>

				<?php elseif(get_row_layout() == "phone_numbers"):
		// layout: phone_numbers
				$label 		= get_sub_field('label');
				?>
					<div class="table-cell">
						<p class="contact-info-title text-light-grey"><?php echo $label; ?></p>
						<?php if( have_rows('phone_numbers') ): ?>

							<?php while( have_rows('phone_numbers') ): the_row();
							$onlyNumber 	= get_sub_field('only_numbers');
							$phoneNumber 	= get_sub_field('phone_number'); ?>

								<p class="contant-info"><a href="tel:<?php echo $onlyNumber; ?>" title="Call this number"><?php echo $phoneNumber; ?></a></p>

							<?php endwhile; ?>

						<?php endif; ?>
					</div>

				<?php endif; ?>

			<?php endwhile; ?>

			</div><!-- END: table -->

		</div><!-- END: kontakt-info -->

	
		<?php 

		$map 			= get_field('show_map');
		$mapCode 		= get_field('map_code');

		if( $map ): ?>
			<div class="acf-map">
				<?php echo $mapCode; ?>
			</div>
		<?php endif; ?>

	</article><!-- END: Kontakt -->

	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();?>