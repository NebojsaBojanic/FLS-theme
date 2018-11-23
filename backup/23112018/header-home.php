<!doctype html>
<html>
<head <?php language_attributes(); ?>>

	<!-- Basic Page Needs
================================================== -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php the_title(); ?> - <?php bloginfo( 'name' ); ?></title>
	<meta name="author" content="mediavuk.com" >
	
	<!-- CSS
================================================== -->
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/style.css">
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/style.min.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->

	<!-- Mobile Specific Metas
================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Apple Devices Settings
================================================== -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="apple-touch-fullscreen" content="yes" />

	<!-- Remove all auto-formatting for telephone number -->
	<meta name="format-detection" content="telephone=no">

	<meta name="msapplication-tap-highlight" content="no"/> 

	<!-- Google Fonts
================================================== -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900&amp;subset=latin-ext" rel="stylesheet">

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
	}
?>
    <meta property="og:locale" content="de_DE"/>
    <meta property="og:locale:alternate" content="en_US" />
    <meta property="og:title" content="<?php if (get_field('og_title') == ''): the_title(); else: echo get_field('og_title'); endif ?>"/>
    <meta property="og:description" content="<?php echo get_field('og_description'); ?>"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="<?php the_permalink(); ?>"/>
    <meta property="og:image" content="<?php echo $ogImage['url']; ?>"/>
    <meta property="og:image:url" content="<?php echo $ogImage['url']; ?>"/>
    <meta property="og:site_name" content="<?php echo $siteTitle = get_bloginfo( 'name' ); ?>"/>

<?php
	$headerBgImage 		= get_field('header_background_image', 'option');
	// Logo
	$logo 				= get_field('logo', 'option');
	$logoDisplay 		= get_field('logo_on_header_bg_image', 'option');
	$logoPosition 		= get_field('logo_position', 'option');
	// Navigation
	$navBg				= get_field('main_nav_bg', 'option');
	$navBgColor			= get_field('main_nav_bg_color', 'option');
	$navTextColor		= get_field('main_nav_color', 'option');
?>

<!-- Inline style -->
<style>
	.stickyMenu li.logoMenu a,
	.fixedMenu li.logoMenu a {
		background: url("<?php echo $logo['url']; ?>");
		background-position: center;
		background-repeat: no-repeat;
		background-size: contain; }
</style>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- Detect if JavaScript enable -->
	<noscript>
		<div class="nojsMessage">
			<div class="center">
				<p>Bitte aktivieren Sie JavaScript um die Seite korrekt zu sehen – Danke!</p>
			</div>
		</div>
	</noscript>
	<!-- END: Detect if JavaScript enable-->


	<!-- start Menu Nav -->
	<div id="navmenu">
		<a class="nav-toggle" href="#">
			
			<div class="hamburger-mobile"><!-- start hamburgerMenu -->

				<?php $bgColor = get_field('hamburger_icon_color', 'options'); ?>
				<div class="hamburger-mobile-line">
					<span class="<?php echo $bgColor; ?>"></span>
					<span class="<?php echo $bgColor; ?>"></span>
					<span class="<?php echo $bgColor; ?>"></span>
					<span class="<?php echo $bgColor; ?>"></span>
				</div>

			</div>
		</a>
	</div><!-- end Menu Nav -->


<!-- =============================================================================
	PAGE STRUCTURE:= start pageBody
=============================================================================- -->
	<div class="pageBody">




<!-- =============================================================================
	PAGE STRUCTURE:= start header
=============================================================================- -->
		<header id="header" class="home">

			<div class="stickyMenu"><!-- start stickyMenu -->

				<?php $fixedNavigation = array(
					'theme_location'	=> 'fixed-nav',
					'container'			=> 'nav',
					'container_class'	=> ''
				);
				wp_nav_menu( $fixedNavigation ); ?><!-- END: fixed-nav -->

			</div><!-- end stickyMenu -->

			<?php // Check should FLS ad be displayed
			$fls 	= get_field('fls_advertisement', 'option');
			if ($fls) { ?>
				<div class="fls-badge"><!-- start fls-badge -->
					<a href="https://www.farbleitsystem.com/" title="Visit FLS" target="_blank">
						<figure>
							<img src="<?php echo get_template_directory_uri(); ?>/images/FLS-Implemented_logo.png" alt="FLS logo" title="Go to FLS website">
						</figure>
					</a>
				</div><!-- end fls-badge -->
			<?php } ?>


			<div class="mainNav <?php if ($navBg) { echo $navBgColor; } echo " ".$navTextColor;?>"><!-- start mainNav -->

				<?php $mainNav = array(
					'theme_location'	=> 'main-nav',
					'container'			=> 'nav'
				);
				wp_nav_menu( $mainNav ); ?>

			</div> <!-- end mainNav -->


			<div class="table" style="background-image: url('<?php echo $headerBgImage; ?>'); background-repeat: no-repeat; background-size: cover; background-position: 50%;">
				<?php if ($logoDisplay) { ?>
					<div class="logo <?php echo $logoPosition; ?> tableCell textCenter">      
						<img src="<?php echo $logo['url']; ?>">
					</div>
				<?php } ?>
			</div><!-- end table -->


			<?php $metaNav = array(
				'theme_location'	=> 'big-nav',
				'container'			=> 'div',
				'container_class'	=> 'secondaryNav'
			);
			wp_nav_menu( $metaNav ); ?><!-- end secondaryNav -->     

		</header><!-- PAGE STRUCTURE:= end header -->