<!-- Calendar widget -->

<?php if ( is_active_sidebar( 'calendar' ) ) : ?>
	<div class="w-calendar">
		<?php dynamic_sidebar( 'calendar' ); ?>
	</div>
<?php endif; ?>