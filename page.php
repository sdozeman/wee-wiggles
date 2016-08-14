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

			<section id="h-hero">
				<div class="flexslider">
				  <ul class="slides">
				    <li style="background: url(//placehold.it/350x150) center center no-repeat; background-size: cover;">
							<div class="container">
								<div class="caption right">
									<p class="sub headline">Learn Through</p>
									<p class="main headline">play & discovery</p>
										<a href="#" class="btn trans caret-r">Learn More</a>
								</div><!-- .caption -->
							</div><!-- .container -->
				    </li>
						<li style="background: url(//placehold.it/350x150) center center no-repeat; background-size: cover;">
							<div class="container">
								<div class="caption left">
									<p class="sub headline">Learn Through</p>
									<p class="main headline">play & discovery</p>
										<a href="#" class="btn trans caret-r">Learn More</a>
								</div><!-- .caption -->
							</div><!-- .container -->
				    </li>
						<li style="background: url(//placehold.it/350x150) center center no-repeat; background-size: cover;">
							<div class="container">
								<div class="caption right">
									<p class="sub headline">Learn Through</p>
									<p class="main headline">play & discovery</p>
										<a href="#" class="btn trans caret-r">Learn More</a>
								</div><!-- .caption -->
							</div><!-- .container -->
				    </li>
						<li style="background: url(//placehold.it/350x150) center center no-repeat; background-size: cover;">
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
					<div class="fgrid fgrid--gutters c-align">
						<div class="fgrid-cell col-8">
							<div class="flex-wrap">
								<p class="main headline">Two full-time spots available!</p>
								<p class="sub headline">Children aged 2-3 years for 2016/2017 school year</p>
							</div><!-- .flex-wrap -->
						</div><!-- .fgrid-cell -->

					<!-- 2 COL GRID INSERT -->
					<div class="fgrid-cell col-4">
						<div class="flex-wrap r-align c-align r-height">
							<a href="#" class="btn lrg trans caret-r">Contact Us</a>
						</div><!-- .flex-wrap -->
					</div><!-- .fgrid-cell -->
				</div><!-- .container -->
			</section><!-- .cta -->


			<section id="h-about">
				<div class="container">
					<span>Welcome to</span>
					<h1 class="squiggle">Wee Wiggles</h1>

					<p>Wee Wiggles Inc. is a private dayhome on a quiet street in Lake Chaparral.
						There is a dedicated playroom in my bonus room, a separate napping area, and a fully fenced backyard with a playset and outdoor toys.
						On my street are two parks, one of which is across the street. I have two very friendly and cuddly cats, Governor and Seamus.</p>

					<div class="block ico ppl"><h3>Low-Ratio Intake</h3></div>
					<div class="block ico blb"><h3>Early Learning</h3></div>
					<div class="block ico crt"><h3>Nutritious Meals</h3></div>
					<div class="block ico hrt"><h3>Health & Safety</h3></div>

				</div><!-- .container -->
			</section><!-- #home-about -->

			<section id="h-avail">
			</section><!-- #home-avail -->


			<section id="h-bio">
			</section><!-- .section -->

			<section id="h-rates">
			</section><!-- .section -->

			<section id="h-schedule">
			</section><!-- .section -->

			<section id="h-menu">
			</section><!-- .section -->

			<section id="h-gallery">
			</section><!-- .section -->

			<section id="h-contact">
				<div class="container slim">
					<h2 class="squiggle">Contact</h2>
						<div class="grid">
							<div class="col-4 ico phone">
								<p>Phone</p>
								<small>403-200-2059</small>
							</div><!-- ico -->

							<div class="col-4 ico email">
								<p>Email</p>
								<small>hello@weewigglesinc.com</small>
							</div><!-- ico -->

							<div class="col-4 ico clock">
								<p>Hours</p>
								<small>Monday-Friday<br>7:30am-5:00pm</small>
							</div><!-- ico -->
						</div><!-- .grid -->

						<form id="contact-form" class="FlowupLabels" action="">
							<div class="grid grid-pad grid-pull">
								<div class="col-6">
									<div class="fl_wrap">
										<label class="fl_label required" for="c_name">Your name</label>
										<input type="text" class="fl_input" id="c-name" class="required">
									</div><!-- .fl_wrap -->
									<div class="fl_wrap">
										<label class="fl_label required" for="c_email">Your e-mail</label>
										<input type="text" class="fl_input" id="c-email" class="required">
									</div><!-- .fl_wrap -->
									<div class="fl_wrap">
										<label class="fl_label required" for="c_subject">Subject</label>
										<input type="text" class="fl_input" id="c-subject">
									</div><!-- .fl_wrap -->
								</div><!-- .col-6 -->

								<div class="col-6">
									<div class="fl_wrap">
										<label class="fl_label required" for="c-mess">Message</label>
										<textarea id="c-mess" class="fl_input"></textarea>
									</div><!-- fl_wrap -->
								</div><!-- .col-6 -->
							</div><!-- .grid -->

							<button type="submit" class="btn red">Send Message</button>
						</form><!-- #contact-form -->

				</div><!-- .container -->
			</section><!-- .section -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
