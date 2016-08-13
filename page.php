<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wee_Wiggles
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section id="home-hero">
				<div class="flexslider">
				  <ul class="slides">
				    <li style="background: url(http://placehold.it/350x150) center center no-repeat; background-size: cover;">
							<div class="container">
								<div class="caption right">
									<p class="sub headline">Learn Through</p>
									<p class="main headline">play & discovery</p>
										<a href="#" class="btn trans caret-r">Learn More</a>
								</div><!-- .caption -->
							</div><!-- .container -->
				    </li>
						<li style="background: url(http://placehold.it/350x150) center center no-repeat; background-size: cover;">
							<div class="container">
								<div class="caption left">
									<p class="sub headline">Learn Through</p>
									<p class="main headline">play & discovery</p>
										<a href="#" class="btn trans caret-r">Learn More</a>
								</div><!-- .caption -->
							</div><!-- .container -->
				    </li>
						<li style="background: url(http://placehold.it/350x150) center center no-repeat; background-size: cover;">
							<div class="container">
								<div class="caption right">
									<p class="sub headline">Learn Through</p>
									<p class="main headline">play & discovery</p>
										<a href="#" class="btn trans caret-r">Learn More</a>
								</div><!-- .caption -->
							</div><!-- .container -->
				    </li>
						<li style="background: url(http://placehold.it/350x150) center center no-repeat; background-size: cover;">
							<div class="container">
								<div class="caption center">
									<p class="sub headline">Learn Through</p>
									<p class="main headline">play & discovery</p>
										<a href="#" class="btn trans caret-r">Learn More</a>
								</div><!-- .caption -->
							</div><!-- .container -->
				    </li>
				  </ul><!-- .slides -->
				</div><!-- .flexslider -->
			</section><!-- #home-hero -->

			<section class="cta">
				<div class="container">
					<p class="main headline">Two full-time spots available!</p>
					<p class="sub headline">Children aged 2-3 years for 2016/2017 school year</p>

					<!-- 2 COL GRID INSERT -->
					<a href="#" class="btn lrg trans caret-r">Contact Us</a>
				</div><!-- .container -->
			</section><!-- .cta -->


			<section id="home-about">
				<div class="container">
					<span>Welcome to</span>
					<h1 class="fancy">Wee Wiggles</h1>

					<p>Wee Wiggles Inc. is a private dayhome on a quiet street in Lake Chaparral.
						There is a dedicated playroom in my bonus room, a separate napping area, and a fully fenced backyard with a playset and outdoor toys.
						On my street are two parks, one of which is across the street. I have two very friendly and cuddly cats, Governor and Seamus.</p>

						<!-- 4 COL GRID INSERT HERE -->


				</div><!-- .container -->
			</section><!-- #home-about -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
