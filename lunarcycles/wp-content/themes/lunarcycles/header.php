<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lunar_Cycles
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Bootstrap core CSS -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- Font Awesome Icons -->
	<!-- <link href="assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
	 crossorigin="anonymous">

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

	
	<?php wp_head(); ?>
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->
</head>


<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lunarcycles' ); ?></a>

		<!-- HEADER
	================================================== -->
	<header class="site-header" role="banner">

		<!-- NAVBAR
		================================================== -->
		<div class="navbar-wrapper">

			<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span>Menu</span>
						</button>
						<a class="navbar-brand" href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="Lunar Cycles"><span>Lunar Cycles</span></a>
					</div>


					<?php
						wp_nav_menu( array(

							'theme_location' 		=> 'primary',
							'container'				=> 'nav',
							'container_class' 		=> 'navbar-collapse collapse',
							'menu_class' 			=> 'nav navbar-nav navbar-right'
							
						));
					?>
					<!-- <div class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="active"><a href="/">Home</a></li>
							<li><a href="services.html">Services</a></li>
							<li><a href="frog-bikes.html">Frog Bikes</a></li>
							<li><a href="emu-electric-bikes.html">Emu Electric Bikes</a></li>
							<li><a href="faq.html">FAQs</a></li>
							<li><a href="contact.html">Contact Us</a></li>
						</ul>
					</div> -->
				</div>
			</div>

		</div>
	</header>

	<div id="content" class="site-content">
