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
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/css/style.css">
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/style.min.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->

	<!-- Mobile Specific Metas
================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="js/menu.js"></script>
	
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

	<!-- jQuery CDN library -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

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

<?php wp_head(); ?>
</head>

<body>

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

				<div class="hamburger-mobile-line">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>

			</div>
		</a>
	</div><!-- end Menu Nav -->


<!-- =============================================================================
	PAGE STRUCTURE:= start pageBody
=============================================================================- -->
	<div class="pageBody">
	  
		<div id="nav"><!-- start Mobile Nav -->
		</div><!-- end mobile nab -->

<!-- =============================================================================
	PAGE STRUCTURE:= start header
=============================================================================- -->
		<header class="home">

			<div class="stickyMenu"><!-- start stickyMenu -->

				<?php $responsiveNav = array(
					'theme_location'	=> 'responsive_nav',
					'container'			=> 'nav',
					'container_class'	=> ''
				);
				wp_nav_menu( $responsiveNav ); ?><!-- END: main-nav -->
				<nav>
					<li><a href="">Startseite</a></li>
					<li><a href="">Unsere Schule</a></li>
					<li><a href="">Nav 2</a></li>
					<li><a href="">Nav 3</a></li>
					<li><a href="">Nav 4</a></li>
					<li class="logoMenu"><a href="">Home</a></li>
					<li><a href="">Download</a></li>
					<li class="orange"><a href="">Aktuelles</a></li>
					<li class="lightBlue"><a href="">Termine</a></li>
					<li class="yellow"><a href="">Kontakt</a></li>
				</nav>

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

			<div class="mainNav"><!-- start mainNav -->

				<?php $mainNav = array(
					'theme_location'	=> 'main-nav',
					'container'			=> 'nav'
				);
				wp_nav_menu( $mainNav ); ?>
				<nav>
					<li><a href="">Startseite</a></li>
					<li><a href="">Unsere Schule</a></li>
					<li><a href="">Nav 2</a></li>
					<li><a href="">Nav 3</a></li>
					<li><a href="">Nav 4</a></li>
					<li><a href="">Download</a></li>
				</nav>

			</div> <!-- end mainNav -->

			<div class="table" style="background-image: url('images/Background-image.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			background-position: 100%;
			">
				<div class="alignMiddle tableCell textCenter">      
					<img src="images/Welt-des-Wissens_handdrawn_logo.png">
				</div>
			</div><!-- end table -->


			<?php $metaNav = array(
				'theme_location'	=> 'big-nav',
				'container'			=> 'div',
				'container_class'	=> ''
			);
			wp_nav_menu( $metaNav ); ?>
			<div class="secondaryNav"><!-- start secondaryNav -->
				<ul>
					<li class="orange"><a href=""><span><img src="images/Aktuelles_icon.png"></span><span>Aktuelles</span></a></li>
					<li class="lightBlue"><a href=""><span><img src="images/Termine_icon.png"></span>Termine</a></li>
					<li class="yellow"><a href=""><span><img src="images/Kontakt_icon.png"></span>Kontakt</a></li>
				</ul>
			</div><!-- end secondaryNav -->     

		</header><!-- PAGE STRUCTURE:= end header -->