<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wee_Wiggles
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wee-wiggles' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<span class="site-title logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</span>

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<!--<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>-->
				<ul>
					<li><a href="#" class="ico heart">About Us</a></li>
					<li><a href="#" class="ico star">The Director</a></li>
					<li><a href="#" class="ico clock">Hours & Rates</a></li>
					<li><a href="#" class="ico calendar">Daily Schedule</a></li>
					<li><a href="#" class="ico utensils">Weekly Menu</a></li>
					<li><a href="#" class="ico camera">Photo Gallery</a></li>
					<li><a href="#" class="ico envelope">Contact</a></li>
				</ul>
			</nav><!-- #site-navigation -->

			<a class="menu-btn">
				<div class="toggle">
					<span class="l1"></span>
					<span class="l1"></span>
					<span class="l1"></span>
				</div>

				<span class="menu-text">Menu</span>
			</a>
		</div><!-- .container -->
	</header><!-- #masthead -->

	<div id="page" class="site">
		<div id="content" class="site-content">
