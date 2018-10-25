<?php
/**
 * The template for displaying 404 pages (not found)
 *
 */
get_header(); ?>

<div class="wrap-404 padd-top padd-bot">
	<section class="error-404 not-found grid-70 page-center">
		<header class="page-header">
			<h1 class="page-title centered">404 Error - page not found</h1>
		</header><!-- END: .page-header -->
		<div class="page-content">
			<p>We are sorry, that page not found. Please go back to home page or try one of pages listed below. Thank you!</p>

			<ul>
				<?php wp_list_pages( array( 'title_li' => '' ) ); ?>
			</ul>
		</div><!-- END: .page-content -->
	</section><!-- END: .error-404 -->
</div><!-- END: .wrap -->

<?php get_footer();