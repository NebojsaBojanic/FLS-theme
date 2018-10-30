<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Basic Page Needs
================================================== -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php the_title(); ?> - <?php bloginfo( 'name' ); ?></title>

	<!-- CSS
================================================== -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/style.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/style.min.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/style-new.css">

	<!-- Google Fonts
================================================== -->
	<link href="https://fonts.googleapis.com/css?family=Cookie|Lora:400,400i,700,700i|Playfair+Display:400,400i,700,700i|Puritan:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet"> 

	<!-- Favicon
================================================== -->
<?php 
	$favicon 	= get_field('favicon_default', 'option');
?>
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $favicon['sizes']['favicon180']; ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $favicon['sizes']['favicon32']; ?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $favicon['sizes']['favicon16']; ?>">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/favicons/manifest.json">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/favicons/safari-pinned-tab.svg" color="#46dfbd">
	<link rel="shortcut icon" href="<?php echo $favicon['sizes']['favicon32']; ?>">
	<meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/favicons/browserconfig.xml">
	<meta name="theme-color" content="#58d4bd">

	<!-- Open Graph
================================================== -->
<?php
$ogImage = '';
if (get_field('og_image') == false) {
	$ogImage = get_field('og_image', 'option');
} else {
	$ogImage = get_field('og_image');
} ?>
    <meta property="og:locale" content="de_DE"/>
    <meta property="og:locale:alternate" content="en_US" />
    <meta property="og:title" content="<?php if (get_field('og_title') == ''): the_title(); else: echo get_field('og_title'); endif ?>"/>
    <meta property="og:description" content="<?php echo get_field('og_description'); ?>"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="<?php the_permalink(); ?>"/>
    <meta property="og:image" content="<?php echo $ogImage['url']; ?>"/>
    <meta property="og:image:url" content="<?php echo $ogImage['url']; ?>"/>
    <meta property="og:site_name" content="<?php echo $siteTitle = get_bloginfo( 'name' ); ?>"/>

    <!-- Changeable style from admin panel
================================================== -->
<?php 
	$headerBgImage			= get_field("header_background_image", "option");
	$metaNavItemOne			= get_field('first_menu_item_bg_color', 'option');
	$metaNavItemTwo			= get_field('second_menu_item_bg_color', 'option');
	$metaNavItemThree		= get_field('third_menu_item_bg_color', 'option');
	$logoImage				= get_field('logo', 'option');
	$menuItemUnderline		= get_field('navigation_underline_color', 'option');

	$headingColorSchule		= get_field('schule_heading_color', 'option');
	$spTitleColor			= get_field('schuleprogram_title_color','option');
	$spSidebarColor			= get_field('schuleprogram_sidebar_title_color','option');
	$elternTitleColor		= get_field('eltern_title_color','option');
	$elternSidebarColor		= get_field('eltern_sidebar_title_color','option');
	$kinderTitleColor		= get_field('kinder_title_color','option');
	$kinderSidebarColor		= get_field('kinder_sidebar_title_color','option');
	$headingColorAktuelles	= get_field('aktuelles_heading_color', 'option');
	$searchBgColor			= get_field('search_button_background_color', 'option');
	$kontaktColor 			= get_field('heading_and_labels_color', 'option');

	$staffScrew				= get_field('staff_screw_text_color', 'option');
	$aktuellesScrew 		= get_field('aktuelles_screw_text_color', 'option');
	$courseScrew 			= get_field('courses_screw_text_color', 'option');
	
	$footerBgColor			= get_field('footer_background_color', 'option');

?>
<style type="text/css">
	.nojsMessage {
		display: block; background:#ef2727; padding: 10px; text-align: center; }
	.nojsMessage p {
		font-size: 16px; color:#fff; padding:5px 0; }

	.page-header-home .table .table-row {
		background: url('<?php echo $headerBgImage; ?>') no-repeat 10% center fixed; }
/* Meta navigation on homepage (tiles) */
	.big-nav ul li.menu-item:nth-of-type(3n+1) {
		background-color: <?php echo $metaNavItemOne; ?>;
		border: 3px solid <?php echo $metaNavItemOne; ?>; }
	.big-nav ul li.menu-item:nth-of-type(3n+1).current_page_item {
		background-color: #FFF; }
	.big-nav ul li.menu-item:nth-of-type(3n+1).current_page_item a {
		color: <?php echo $metaNavItemOne; ?>; }

	.big-nav ul li.menu-item:nth-of-type(3n+2) {
		background-color: <?php echo $metaNavItemTwo; ?>;
		border: 3px solid <?php echo $metaNavItemTwo; ?>; }
	.big-nav ul li.menu-item:nth-of-type(3n+2).current_page_item {
		background-color: #FFF; }
	.big-nav ul li.menu-item:nth-of-type(3n+2).current_page_item a {
		color: <?php echo $metaNavItemTwo; ?>; }

	.big-nav ul li.menu-item:nth-of-type(3n+3) {
		background-color: <?php echo $metaNavItemThree; ?>;
		border: 3px solid <?php echo $metaNavItemThree; ?>; }
	.big-nav ul li.menu-item:nth-of-type(3n+3).current_page_item {
		background-color: #FFF; }
	.big-nav ul li.menu-item:nth-of-type(3n+3).current_page_item a {
		color: <?php echo $metaNavItemThree; ?>; }

/* Meta navigation in fixed bar */
	.meta-nav ul li:nth-of-type(3n+1) {
		background: <?php echo $metaNavItemOne; ?>;
		border: 3px solid <?php echo $metaNavItemOne; ?>; }
	.meta-nav ul li:nth-of-type(3n+1).current_page_item {
		background: #FFF; }
	.meta-nav ul li:nth-of-type(3n+1).current_page_item a {
		color: <?php echo $metaNavItemOne; ?>; }

	.meta-nav ul li:nth-of-type(3n+2) {
		background: <?php echo $metaNavItemTwo; ?>;
		border: 3px solid <?php echo $metaNavItemTwo; ?>; }
	.meta-nav ul li:nth-of-type(3n+2).current_page_item {
		background: #FFF; }
	.meta-nav ul li:nth-of-type(3n+2).current_page_item a {
		color: <?php echo $metaNavItemTwo; ?>; }

	.meta-nav ul li:nth-of-type(3n+3) {
		background: <?php echo $metaNavItemThree; ?>;
		border: 3px solid <?php echo $metaNavItemThree; ?>; }
	.meta-nav ul li:nth-of-type(3n+3).current_page_item {
		background: #FFF; }
	.meta-nav ul li:nth-of-type(3n+3).current_page_item a {
		color: <?php echo $metaNavItemThree; ?>; }

/* Navigations */
	.top-nav ul li:hover::before,
	.top-nav ul li.current_page_item::before,
	.nav-bar .main-nav ul li a:hover::before,
	.nav-bar .main-nav ul li.current_page_item a::before {
		background-color: <?php echo $menuItemUnderline; ?>; }

/* Logo in fixed navigation */
	.logo {
		border: 1px solid <?php echo $menuItemUnderline; ?>;
		outline: 5px solid #FFF; }
	.logo a {
		background: url("<?php echo $logoImage['url']; ?>") no-repeat center center; }

/* Pages */
	.unsere h1,
	.acf-schiiler-section h2 {
		color: <?php echo $headingColorSchule; ?>; }
	.schuleprogram h3 {
		color: <?php echo $spTitleColor; ?>; }
	.schuleprogram-sidebar h3 {
		color: <?php echo $spSidebarColor; ?>; }
	.schuleprogram-sidebar h3::before {
		background-color: <?php echo $headingColorAktuelles; ?>; }
	.eltern h3 {
		color: <?php echo $elternTitleColor; ?>; }
	.eltern-sidebar h3 {
		color: <?php echo $elternSidebarColor; ?>; }
	.eltern-sidebar h3::before {
		background-color: <?php echo $headingColorAktuelles; ?>; }
	.kinder h3 {
		color: <?php echo $kinderTitleColor; ?>; }
	.kinder-sidebar h3 {
		color: <?php echo $kinderSidebarColor; ?>; }
	.kinder-sidebar h3::before {
		background-color: <?php echo $headingColorAktuelles; ?>; }
	.schuleprogram .schuleprogram-sidebar ul li.active a,
	.kinder .kinder-sidebar ul li.active a,
	.eltern .eltern-sidebar ul li.active a {
		color: <?php echo $headingColorAktuelles; ?>; }
	.post-title h1,
	.recent-post a:hover h3,
	.pagination .page-numbers.current {
		color: <?php echo $headingColorAktuelles; ?>; }
	.widget h3::before {
		background-color: <?php echo $headingColorAktuelles; ?>; }
	.w-most-popular-posts ul.wpp-list li.current a {
    	color: <?php echo $headingColorAktuelles; ?>; }
	.content-pagination a,
	.pagination .page-numbers {
		background-color: <?php echo $headingColorAktuelles; ?>;
		border: 1px solid <?php echo $headingColorAktuelles; ?> }
	.w-search button#searchsubmit {
    	background-color: <?php echo $searchBgColor; ?>; }
    .kontakt-text-color {
		color: <?php echo $kontaktColor; ?>; }

/* Screw colors */
	.course-text-screw {
		color:<?php echo $courseScrew; ?>; }
	.staff-text-screw {
		color: <?php echo $staffScrew; ?>; }
	.aktuelles-text-screw {
		color: <?php echo $aktuellesScrew; ?>; }
	
/* Footer */
	.footer-bg-color {
		background-color:<?php echo $footerBgColor; ?>; }

</style>

	<?php wp_head(); ?>
</head>