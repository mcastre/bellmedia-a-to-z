<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-144x144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-precomposed.png">
		<link href='https://fonts.googleapis.com/css?family=Cabin|Montserrat:700|Oswald' rel='stylesheet' type='text/css'>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-71172848-1', 'auto');
		  ga('send', 'pageview');
		</script>

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header id="masthead" class="header-primary" role="banner">
		<span class="hdr-emergency-service-tagline show-for-small-only">
			<span class="font-oswald-bold">24 / 7</span> Emergency Service Available!
		</span>
		<div class="row show-for-medium">
			<div class="small-12 columns">
				<span class="hdr-emergency-service-tagline">
					<span class="font-oswald-bold">24 / 7</span> Emergency Service Available!
				</span>
			</div>
		</div>
		<div class="title-bar" data-responsive-toggle="mobile_top_bar">
			<div class="menu-icon-wrapper">
				<button class="menu-icon" type="button" data-toggle="mobile_top_bar"></button>
			</div>
			<div class="title-bar-title show-for-small">
				<a href="<?php echo get_home_url(); ?>" rel="home">
					<span class="logo-logo-mark">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons-svg/repair-icon.svg" alt="A to Z Appliance Repair" />
					</span>
					<span class="logo-logotype">A to Z Appliance Repair</span>
				</a>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
			<div class="row">
				<div class="medium-5 large-4 columns hdr-logo-wrapper show-for-medium">
					<a href="<?php echo get_home_url(); ?>">
						<span class="logo-logo-mark">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons-svg/repair-icon.svg" alt="A to Z Appliance Repair" />
						</span>
						<span class="logo-logotype">A to Z Appliance Repair</span>
					</a>
					<div class="logo-phone-box">Phone: 850-390-4400</div>
				</div>
				<div class="medium-7 large-8 columns">
					<div class="top-bar-right">
						<?php foundationpress_top_bar_r(); ?>
					</div>
				</div>
			</div><!-- /.row -->
		</nav>
		<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'topbar' ) : ?>
			<?php get_template_part( 'parts/mobile-top-bar' ); ?>
		<?php endif; ?>
	</header>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' ); ?>
