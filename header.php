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
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel='shortcut icon' type='image/x-icon' href='<?php bloginfo('stylesheet_directory'); ?>/img/favicon.ico' />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#h-about"><?php esc_html_e( 'Skip to content', 'wee-wiggles' ); ?></a>

		<header id="masthead" class="site-header">
			<div class="container">
				<span class="b1"></span>
				<span class="site-title logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</span>
			</div><!-- .container -->
		</header><!-- #masthead -->

		<div class="site-wrap">
			<div id="content" class="site-content">
