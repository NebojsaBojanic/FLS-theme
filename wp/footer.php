<!-- =============================================================================
	PAGE STRUCTURE:= start footer
=============================================================================- -->

		<footer style="background-image: url('images/Pattern_footer_1.png');">

			<div class="footer-column"><!-- start footer-column -->

				<h5><?php the_field('title_above_contact_information', 'option'); ?></h5>

				<div class="footer-column-content">

					<?php
					// vars	
					$footerContent = get_field('footer_content', 'option');

					// check selected content
					if($footerContent && in_array('contact_info', $footerContent) ): ?>

					<address>
					
						<div class="address-content">

						<?php while(the_flexible_field("contact_info", "option")): 
							if(get_row_layout() == "street"):
				// layout: Street ?>
								<li>
									<div>Street</div>
									<div><?php the_sub_field('street'); ?></div>
								</li>

							<?php elseif(get_row_layout() == "city"): 
				// layout: City ?>
								<li>
									<div>City</div>
									<div><?php the_sub_field('city'); ?></div>
								</li>

							<?php elseif(get_row_layout() == "state"):
				// layout: State ?>
								<li>
									<div>State</div>
									<div><?php the_sub_field('state', 'option'); ?></div>
								</li>

							<?php elseif(get_row_layout() == "phone"):
				// layout: Phone ?>
								<li>
									<div>Phone</div>
									<div>
										<a href="tel:<?php the_sub_field('phone', 'option'); ?>">
											<?php the_sub_field('phone', 'option'); ?>
										</a>
									</div>
								</li>

							<?php elseif(get_row_layout() == "mobile"):
				// layout: Mobile ?>
								<li>
									<div>Mobile</div>
									<div>
										<a href="tel:<?php the_sub_field('mobile', 'option'); ?>">
											<?php the_sub_field('mobile', 'option'); ?>
										</a>
									</div>
								</li>

							<?php elseif(get_row_layout() == "email"):
				// layout: Email ?>
								<li>
									<div>Email</div>
									<div>
										<a href="mailto:<?php the_sub_field('email', 'option'); ?>">
											<?php the_sub_field('email', 'option'); ?>
										</a>
									</div>
								</li>

							<?php endif; ?>
						<?php endwhile; ?>

						</div><!-- end: address-content -->

					</address>

				<?php endif; // Check selected content ?>

				</div><!-- end: footer-column-content -->

			</div><!-- end footer-column -->


			<div class="footer-column"><!-- start footer-column -->
				
			<?php if($footerContent && in_array('social_media', $footerContent) ): ?>
				<div class="footerSocial"><!-- start footerSocialMedia -->
				
					<div class="footerSocialSearch"><!-- start footerSocialSearch -->
					  <input type="text" name="">
					</div><!-- end footerSocialSearch -->
					<div class="footerSocialIcons"><!-- start footerSocialIcons -->
						<h5><?php the_field('title_above_social_media', 'option'); ?></h5>
						<h5>Social Media</h5>
						
						<?php $socialMedias = get_field('check_social_medias', 'option'); ?>

						<ul>
							<?php foreach( $socialMedias as $socialMedia ): ?>
							<li>
								<?php if ($socialMedia == 'facebook') : ?>
									<a href="<?php the_sub_field('facebook_link', 'option'); ?>" title="Visit our Facebook page" target="_blank">
										<div class="icon">
											<span class="icon-facebook"></span>
										</div>
									</a>

								<?php elseif ($socialMedia == 'twitter') : ?>
									<a href="<?php the_sub_field('twitter_link', 'option'); ?>" title="Visit our Twitter profile" target="_blank">
										<div class="icon">
											<span class="icon-twitter"></span>
										</div>
									</a>

								<?php elseif ($socialMedia == 'youtube') : ?>
									<a href="<?php the_sub_field('youtube_link', 'option'); ?>" title="Visit our YouTube channel" target="_blank">
										<div class="icon">
											<span class="icon-youtube"></span>
										</div>
									</a>

								<?php elseif ($socialMedia == 'linkedin') : ?>
									<a href="<?php the_sub_field('linkedin_link', 'option'); ?>" title="Visit our LinkedIn page" target="_blank">
										<div class="icon">
											<span class="icon-linkedin"></span>
										</div>
									</a>

								<?php elseif ($socialMedia == 'instagram') : ?>
									<a href="<?php the_sub_field('instagram_link', 'option'); ?>" title="Visit our Instagram profile" target="_blank">
										<div class="icon">
											<span class="icon-instagram"></span>
										</div>
									</a>

								<?php endif; ?>
							</li>
							<?php endforeach; ?>
						</ul>
						<ul>
							<li><a href=""><img src="images/Instagram_icon.png" alt=""></a></li>
							<li><a href=""><img src="images/Twitter_icon.png" alt=""></a></li>
							<li><a href=""><img src="images/Facebook_icon.png" alt=""></a></li>
							<li><a href=""><img src="images/Linkedin_icon.png" alt=""></a></li>
						</ul>
					</div><!-- end footerSocialIcons -->

				</div><!-- end footerSocialMedia -->

			<?php endif; // Social Media ?>

			</div><!-- end footer-column -->


			<div class="footer-column"><!-- start footer-column -->

				<?php if($footerContent && in_array('calendar', $footerContent) ): ?>

					<div class="footer-calendar grid-25 fr centered">
						<h2 class="heading-font"><?php the_field('title_above_calendar', 'option'); ?></h2>
						<!-- Calendar -->
						<?php include('template-parts/calendar.php'); ?>
					</div>

				<?php endif; // Calendar ?>

			</div><!-- end footer-column -->


			<div class="copy">
				<small> 2009 - <?php echo date("Y"); ?> (&copy;) <?php bloginfo( 'name' ); ?> - All rights reserved</small>
			</div>

		</footer><!-- PAGE STRUCTURE:= end footer -->

	</div><!-- END: page body -->

<!-- =================================================================
	PAGE STRUCTURE:  Scripts
================================================================== -->


<?php wp_footer(); ?>
</body>
</html>