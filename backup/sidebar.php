<?php
/**
 * The sidebar containing the main widget area
 */
?>

<aside class="right-sidebar grid-30 fl clearfix">

	<?php get_template_part( 'template-parts/sb', 'searchform' ); ?>

	<?php get_template_part( 'template-parts/sb', 'recentposts' ); ?>

	<?php get_template_part( 'template-parts/sb', 'popularposts' ); ?>

	<?php get_template_part( 'template-parts/sb', 'archive' ); ?>

	<?php get_template_part( 'template-parts/sb', 'tags' ); ?>

</aside>