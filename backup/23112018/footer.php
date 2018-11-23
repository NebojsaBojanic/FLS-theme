<!-- =============================================================================
	PAGE STRUCTURE:= start footer
=============================================================================- -->
	<?php 
		$bgcolor 			= get_field('footer_bg_color', 'option');
		$pattern			= get_field('footer_pattern', 'option');
		$patternColor		= get_field('footer_bg_pattern', 'option');
		// Footer content
		$footerContent 		= get_field('footer_content', 'option');

		$contactTitle 		= get_field('contact_info_title', 'option');
		$calendarTitle 		= get_field('calendar_title', 'option');
		$socialTitle 		= get_field('social_media_title', 'option');
		// Impressum
		$impressum 			= get_field('impressum', 'option');
	?>

		<footer class="<?php if($pattern){echo $patternColor; } echo " ".$bgcolor; ?>">

			<?php if($footerContent && in_array('contact_info', $footerContent) ): ?>

				<div class="footer-column"><!-- start footer-column -->

					<h5><?php echo $contactTitle; ?></h5>

					<div class="footer-column-content">

						<address>

							<div class="address-content display-table">

							<?php while(the_flexible_field("contact_information", "option")): 
								if(get_row_layout() == "street"):
					// layout: Street ?>
									<div class="table-row">
										<div class="table-cell table-cell-h">Street</div>
										<div class="table-cell"><?php the_sub_field('street', 'option'); ?></div>
									</div>

								<?php elseif(get_row_layout() == "city"): 
					// layout: City ?>
									<div class="table-row">
										<div class="table-cell table-cell-h">City</div>
										<div class="table-cell"><?php the_sub_field('city', 'option'); ?></div>
									</div>

								<?php elseif(get_row_layout() == "state"):
					// layout: State ?>
									<div class="table-row">
										<div class="table-cell table-cell-h">State</div>
										<div class="table-cell"><?php the_sub_field('state', 'option'); ?></div>
									</div>

								<?php elseif(get_row_layout() == "phone"):
					// layout: Phone ?>
									<div class="table-row">
										<div class="table-cell table-cell-h">Phone</div>
										<div class="table-cell">
											<a href="tel:<?php the_sub_field('only_numbers', 'option'); ?>">
												<?php the_sub_field('phone', 'option'); ?>
											</a>
										</div>
									</div>

								<?php elseif(get_row_layout() == "mobile"):
					// layout: Mobile ?>
									<div class="table-row">
										<div class="table-cell table-cell-h">Mobile</div>
										<div class="table-cell">
											<a href="tel:<?php the_sub_field('only_numbers', 'option'); ?>">
												<?php the_sub_field('mobile', 'option'); ?>
											</a>
										</div>
									</div>

								<?php elseif(get_row_layout() == "email"):
					// layout: Email ?>
									<div class="table-row">
										<div class="table-cell table-cell-h">Email</div>
										<div class="table-cell">
											<a href="mailto:<?php the_sub_field('email', 'option'); ?>">
												<?php the_sub_field('email', 'option'); ?>
											</a>
										</div>
									</div>

								<?php endif; ?>
							<?php endwhile; ?>

							</div><!-- end: address-content -->

						</address>

					</div><!-- end: footer-column-content -->

				</div><!-- end footer-column -->

			<?php endif; // Check selected content ?>




			<?php if($footerContent && in_array('social_media', $footerContent) ): ?>

				<div class="footer-column"><!-- start footer-column -->

					<div class="footerSocial"><!-- start footerSocialMedia -->

						<div class="footerSocialIcons"><!-- start footerSocialIcons -->
							<h5><?php echo $socialTitle; ?></h5>
							
							<?php $socialMedias = get_field('check_social_medias', 'option'); ?>

							<ul>
								<?php foreach( $socialMedias as $socialMedia ): ?>
								<li>
									<?php if ($socialMedia == 'facebook') : ?>
										<a href="<?php the_sub_field('facebook_link', 'option'); ?>" title="Visit our Facebook" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/images/Facebook_icon.png">
										</a>

									<?php elseif ($socialMedia == 'twitter') : ?>
										<a href="<?php the_sub_field('twitter_link', 'option'); ?>" title="Visit our Twitter" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/images/Twitter_icon.png">
										</a>

									<?php elseif ($socialMedia == 'linkedin') : ?>
										<a href="<?php the_sub_field('linkedin_link', 'option'); ?>" title="Visit our LinkedIn" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/images/Linkedin_icon.png">
										</a>

									<?php elseif ($socialMedia == 'instagram') : ?>
										<a href="<?php the_sub_field('instagram_link', 'option'); ?>" title="Visit our Instagram" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/images/Instagram_icon.png">
										</a>

									<?php endif; ?>
								</li>
								<?php endforeach; ?>
							</ul>

						</div><!-- end footerSocialIcons -->

					</div><!-- end footerSocialMedia -->

				</div><!-- end footer-column -->

			<?php endif; // Social Media ?>




			<?php if($footerContent && in_array('calendar', $footerContent) ): ?>

				<div class="footer-column"><!-- start footer-column -->

					<div class="footer-calendar">
						<h5><?php echo $calendarTitle; ?></h5>

						<?php include('template-parts/calendar.php'); ?>
					</div>

				</div><!-- end footer-column -->

			<?php endif; // Calendar ?>


			<div class="copy">
				<small>2009 - <?php echo date("Y"); ?> (&copy;) <?php bloginfo( 'name' ); ?> <?php if($impressum){ ?><a href="<?php echo $impressum; ?>">(Impressum)</a><?php } ?> - All rights reserved</small>
			</div>

		</footer><!-- PAGE STRUCTURE:= end footer -->

	</div><!-- END: page body -->

<?php 
	$analytic 		= get_field('google_analytics', 'option');
	$verification	= get_field('enable_verification', 'option');
	$verifyCode		= get_field('google_verification', 'option');
?>

<?php if ($analytic): ?>
	<!-- Global Site Tag (gtag.js) - Google Analytics -->
	<?php echo $analytic; ?>
<?php endif ?>

<?php if ($verification): ?>
	<!-- Verification code -->
	<?php echo $verifyCode; ?>
<?php endif ?>


<!-- =================================================================
	PAGE STRUCTURE:  Scripts
================================================================== -->

<!-- jQuery Library
================================================== -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	
<!-- Theme JS file
================================================== -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/menu.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>


<?php wp_footer(); ?>
</body>
</html>