<?php
/**
 * The template for displaying 404 pages (not found)
 */

if ( is_front_page() ) :
	get_header('home');
else:
	get_header();
endif; ?>

<div class="wrap-404">

	<section class="error-404 grid-1160">

		<h1 class="error-404-heading">404 Error<br><span>page not found</span></h1>

		<div>
			<p class="section-description">We are sorry, that page not found. Please go back to home page or try one of pages listed below. Thank you!</p>

			<ul>
				<?php wp_list_pages( array( 'title_li' => '' ) ); ?>
			</ul>
		</div><!-- END: .page-content -->

	</section><!-- END: .error-404 -->

</div><!-- END: .wrap -->

<?php get_footer();