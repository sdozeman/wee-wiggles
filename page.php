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

<!-- START HERO SECTION -->
			<section id="h-hero">
				<div class="flexslider">
				  <ul class="slides">
				    <li style="background: url(<?php bloginfo('stylesheet_directory'); ?>/img/slide-01.jpg) center top no-repeat; background-size: cover;">
							<div class="container">
								<div class="caption right">
									<!-- if top sub-headline exists, post it -->
									<?php
										if(get_field('hero_slide_1_subheadline')) {
											echo '<p class="sub headline">' . get_field('hero_slide_1_subheadline') . '</p>';
										}
									?>
									<!-- if main headline exists, post it -->
									<?php
										if(get_field('hero_slide_1_mainheadline')) {
											echo '<p class="main headline">' . get_field('hero_slide_1_mainheadline') . '</p>';
										}
									?>
									<!-- if bottom sub-headline exists, post it -->
									<?php
										if(get_field('hero_slide_1_lower_subheadline')) {
											echo '<p class="sub headline">' . get_field('hero_slide_1_lower_subheadline') . '</p>';
										}
									?>
									<a href="#" class="btn trans caret-r">Learn More</a>
								</div><!-- .caption -->
							</div><!-- .container -->
				    </li>
						<li style="background: url(<?php bloginfo('stylesheet_directory'); ?>/img/slide-02.jpg) center top no-repeat; background-size: cover;">
							<div class="container">
								<div class="caption right">
									<!-- if top sub-headline exists, post it -->
									<?php
										if(get_field('hero_slide_2_subheadline')) {
											echo '<p class="sub headline">' . get_field('hero_slide_2_subheadline') . '</p>';
										}
									?>
									<!-- if main headline exists, post it -->
									<?php
										if(get_field('hero_slide_2_mainheadline')) {
											echo '<p class="main headline">' . get_field('hero_slide_2_mainheadline') . '</p>';
										}
									?>
									<!-- if bottom sub-headline exists, post it -->
									<?php
										if(get_field('hero_slide_2_lower_subheadline')) {
											echo '<p class="sub headline">' . get_field('hero_slide_2_lower_subheadline') . '</p>';
										}
									?>
									<a href="#" class="btn trans caret-r">Learn More</a>
								</div><!-- .caption -->
							</div><!-- .container -->
				    </li>
						<li style="background: url(<?php bloginfo('stylesheet_directory'); ?>/img/slide-03.jpg) center top no-repeat; background-size: cover;">
							<div class="container">
								<div class="caption left">
									<!-- if top sub-headline exists, post it -->
									<?php
										if(get_field('hero_slide_3_subheadline')) {
											echo '<p class="sub headline">' . get_field('hero_slide_3_subheadline') . '</p>';
										}
									?>
									<!-- if main headline exists, post it -->
									<?php
										if(get_field('hero_slide_3_mainheadline')) {
											echo '<p class="main headline">' . get_field('hero_slide_3_mainheadline') . '</p>';
										}
									?>
									<!-- if bottom sub-headline exists, post it -->
									<?php
										if(get_field('hero_slide_3_lower_subheadline')) {
											echo '<p class="sub headline">' . get_field('hero_slide_3_lower_subheadline') . '</p>';
										}
									?>
									<a href="#" class="btn trans caret-r">Learn More</a>
								</div><!-- .caption -->
							</div><!-- .container -->
				    </li>
				  </ul><!-- .slides -->
				</div><!-- .flexslider -->
			</section><!-- #home-hero -->


<!-- START CALL TO ACTION SECTION -->
			<section class="cta">
				<div class="container">
					<div class="fgrid fgrid--gutters c-align">
						<div class="fgrid-cell col-8">
							<div class="flex-wrap">
								<p class="main headline">Two full-time spots available!</p>
								<p class="sub headline">Children aged 2-3 years for 2016/2017 school year</p>
							</div><!-- .flex-wrap -->
						</div><!-- .fgrid-cell -->

						<div class="fgrid-cell col-4">
							<div class="flex-wrap r-align c-align r-height">
								<a href="#" class="btn lrg trans caret-r">Contact Us</a>
							</div><!-- .flex-wrap -->
						</div><!-- .fgrid-cell -->
					</div><!-- .fgrid-->
				</div><!-- .container -->
			</section><!-- .cta -->


<!-- START ABOUT SECTION -->
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


<!-- START AVAILABILITY SECTION -->
			<section id="h-avail">
				<div class="fgrid fgrid--gutters">
					<div class="fgrid-cell col-5">
						<div class="flex-wrap" style="background: url(<?php bloginfo('stylesheet_directory'); ?>/img/about-availability.jpg) center center no-repeat; background-size: cover;">
						</div><!-- .flex-wrap -->
					</div><!-- .col-4 -->

					<div class="fgrid-cell col-7 availability">
						<div class="flex-wrap">
							<div class="container xsml">
								<span class="sub-headline l-align">2016/2017</span>
								<h2 class="squiggle l-align">Availability</h2>
								<p>I operate Wee Wiggles Inc. from the end of August to the end of June (corresponding to the CBE traditional calendar—ideal for teachers’ families!).
									I do not charge fees to hold spots over the summer like other dayhomes, as I take summers off.</p>
								<p>Wee Wiggles Inc. currently has <strong>two full-time spots available for children aged 2-3 for the 2016/2017 school year</strong>.
									I cannot provide care for school-aged children, as I currently do not offer drop off/pick-up services.
									When the new Education Act is in effect, I will be able to care for children up to age 5. See below for when the new regulations are expected to take effect.</p>

								<blockquote>
									“Under our current School Act regulations, children must be at least four years old on or before March 1 to start kindergarten in September of the same calendar year.<br><br>
									*Please note: The new Education Act was expected to take effect in the 2016-17 school year, but has been delayed by Alberta Education.
									The new regulation states that starting in the 2018-19 school year, children must be at least five years old by Dec. 31, 2018 to start kindergarten in September 2018.
									Our kindergarten calculator assumes that the Education Act will be in effect for the 2018-19 school year.”

									<span class="source">via <a href="#">Calgary Board of Education</a></span>
								</blockquote>

								<p>Please <a href="#">contact me</a> at <a href="mailt:hello@weewigglesinc.com">hello@weewigglesinc.com</a> or 403-200-2059 for more information or to schedule an interview.</p>
							</div><!-- .container -->
						</div><!-- .flex-wrap -->
					</div><!-- .col-8 -->
				</div><!-- .fgrid -->
			</section><!-- #home-avail -->


<!-- START AVAILABILITY SECTION -->
			<section id="h-additional">
				<div class="container">


			<!-- BEGIN FIRST ROW -->
					<div class="image-row image-right" id="target1">
						<div class="column text">
							<span class="sub-headline l-align">Fostering</span>
							<h2 class="squiggle l-align headline">early-learning</h2>

							<p>It is my core belief that children should learn through play and discovery.
								As a teacher, I found class-size to be the biggest indicator of success in my classrooms.
								As such, I will be keeping my dayhome low-ratio to maximize the amount of time I can spend with each child.
								I strive to create lifelong learners in a warm, safe,
								and engaging environment for children to explore their surroundings.</p>

							<p>Every month we will explore a theme to do with the world around us.
								Every week I will create activities based on the expressed interests from the week before for the children in my care.
								Every day I will use brightwheel© to report to parents when children are checked in and out, when naps begin and end,
								daily activities, and the type and amount of food eaten.</p>
						</div><!-- .column -->
						<div class="column image right image-1">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/img/about-01-B@2x.png" class="p-background" />
							<img src="<?php bloginfo('stylesheet_directory'); ?>/img/about-01-earlylearning@2x.jpg" class="p-image" />
							<img src="<?php bloginfo('stylesheet_directory'); ?>/img/about-01-F@2x.png" class="p-foreground" />
						</div><!-- .column -->
					</div><!-- .image-row -->


			<!-- BEGIN SECOND ROW -->
					<div class="image-row image-left" id="target2">
						<div class="column text">
							<h2 class="l-align headline">Nutritious</h2>
							<span class="sub-headline squiggle l-align">meals & snacks</span>

							<p>Being a former Foods teacher, I place an enormous value on nutritious meals and snacks.
								I prepare almost all of my food from scratch and will involve children in both meal preparation and clean-up.
								I will provide a healthy breakfast, lunch, and two snacks per day. </p>
						</div><!-- .column -->
						<div class="column image left image-2">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/img/about-02-B@2x.png" class="p-background" />
							<img src="<?php bloginfo('stylesheet_directory'); ?>/img/about-02-earlylearning@2x.jpg" class="p-image" />
							<img src="<?php bloginfo('stylesheet_directory'); ?>/img/about-02-F@2x.png" class="p-foreground" />
						</div><!-- .column -->
					</div><!-- .image-row -->


			<!-- BEGIN THIRD ROW -->
					<div class="image-row image-right" id="target3">
						<div class="column text">
							<span class="sub-headline l-align">Health</span>
							<h2 class="squiggle l-align headline">& safety</h2>

							<p>Health and safety are of utmost importance to me. I will never drive with the children in my care.
								I also will never post photos of children online or make my address freely available on the internet.
								Only children with up-to-date vaccinations will be allowed to attend.
								I also will be sanitizing toys weekly (at a minimum) and will ensure that children who are sick are kept or sent home.
								Children will only be released to parents or identified emergency contacts.
								I also have a video monitor in my playroom that records 24h of footage.</p>
						</div><!-- .column -->
						<div class="column image right image-3">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/img/about-03-B@2x.png" class="p-background" />
							<img src="<?php bloginfo('stylesheet_directory'); ?>/img/about-03-health-safety@2x.jpg" class="p-image" />
							<img src="<?php bloginfo('stylesheet_directory'); ?>/img/about-03-F@2x.png" class="p-foreground" />
						</div><!-- .column -->
					</div><!-- .image-row -->



				</div><!-- .container -->
			</section><!-- h-additional -->


<!-- START BIO SECTION -->
			<section id="h-bio">

				<div class="container">
					<span class="sub-headline">Meet the</span>
					<h2 class="squiggle headline">Director</h2>


				<!-- BEGIN IMAGE ROW -->
						<div class="image-row image-left" id="target4">
							<div class="column text">
								<p>I’ve always loved working with children.
									As a child I always said that I wanted to be a babysitter when I grew up! As a teenager I ran my church’s nursery and worked at summer camps (and of course did a ton of babysitting!).
									While obtaining my education degree I ran an after school program for children in need and volunteered in schools. When I was offered a job with the Calgary Board of Education I was thrilled!
									Over my teaching career I taught Foods, Fashion, English Language Arts, Health, and English Language Learning. I also ran a catering club and coached soccer, badminton, and cross-country.
									I loved my job and felt so rewarded being able to make a difference in children’s lives.</p>
									<p>While I loved being a teacher, I come from a family of small business owners and have always had an entrepreneurial spirit.
										After my daughter was born, I decided to take a leap of faith and open up my own dayhome to allow me to still do what I love while being my own boss.</p>
							</div><!-- .column -->
							<div class="column image left image-4">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/img/director-B@2x.png" class="p-background" />
								<img src="<?php bloginfo('stylesheet_directory'); ?>/img/JessicaWatson@2x.jpg" class="p-image" />
								<img src="<?php bloginfo('stylesheet_directory'); ?>/img/director-F@2x.png" class="p-foreground" />
							</div><!-- .column -->
						</div><!-- .image-row -->

				</div><!-- .container -->
			</section><!-- .section -->


<!-- START RATEs SECTION -->
			<section id="h-rates">
			</section><!-- .section -->


<!-- START SCHEDULE SECTION -->
			<section id="h-schedule">
			</section><!-- .section -->


<!-- START MENU SECTION -->
			<section id="h-menu">
			</section><!-- .section -->


<!-- START GALLERY SECTION -->
			<section id="h-gallery">
				<div class="container">

				<!-- GLIDE THAT SHIT -->
					<div class="slider-copy">
						<div class="slider-wrap">
							<div data-slide="1" class="service first">
								<h2>This is<br> SPARTA</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam congue aliquam efficitur. Mauris aliquet nibh justo, at elementum sem malesuada ac. Curabitur id ornare dui, non vulputate ex. Suspendisse volutpat elit erat.</p>
								<a class="link" href="#">Find out more</a>
							</div>

							<div data-slide="2" class="service active">
								<h2>Lorem Ipsum Stuff</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam congue aliquam efficitur. Mauris aliquet nibh justo, at elementum sem malesuada ac. Curabitur id ornare dui, non vulputate ex. Suspendisse volutpat elit erat.</p>
								<a class="link" href="#">Find out more</a>
							</div>

							<div data-slide="3" class="service">
								<h2>Turkey Dinner</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam congue aliquam efficitur. Mauris aliquet nibh justo, at elementum sem malesuada ac. Curabitur id ornare dui, non vulputate ex. Suspendisse volutpat elit erat.</p>
								<a class="link" href="#">Find out more</a>
							</div>

							<div data-slide="4" class="service">
								<h2>I don't even...</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam congue aliquam efficitur. Mauris aliquet nibh justo, at elementum sem malesuada ac. Curabitur id ornare dui, non vulputate ex. Suspendisse volutpat elit erat.</p>
								<a class="link" href="#">Find out more</a>
							</div>

							<div data-slide="5" class="service">
								<h2>I don't even...</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam congue aliquam efficitur. Mauris aliquet nibh justo, at elementum sem malesuada ac. Curabitur id ornare dui, non vulputate ex. Suspendisse volutpat elit erat.</p>
								<a class="link" href="#">Find out more</a>
							</div>
						</div><!-- .slider-wrap -->
					</div><!-- .slider-copy -->

					<div class="home-slider">
						<div class="glide" id="carousel" style="">
							<ul class="slides glide__track">
								<li class="slide glide__slide">
									<figure>
										<img alt="" title="" src="<?php bloginfo('stylesheet_directory'); ?>/img/animals1.jpg">
									</figure>
								</li>
								<li class="slide glide__slide">
									<figure>
										<img alt="" title="" src="<?php bloginfo('stylesheet_directory'); ?>/img/animals2.jpg">
									</figure>
								</li>
								<li class="slide glide__slide">
									<figure>
										<img alt="" title="" src="<?php bloginfo('stylesheet_directory'); ?>/img/animals3.jpg">
									</figure>
								</li>
								<li class="slide glide__slide">
									<figure>
										<img alt="" title="" src="<?php bloginfo('stylesheet_directory'); ?>/img/animals4.jpg">
									</figure>
								</li>
								<li class="slide glide__slide">
									<figure>
										<img alt="" title="" src="<?php bloginfo('stylesheet_directory'); ?>/img/animals5.jpg">
									</figure>
								</li>
							</ul>

							<div class="slider__arrows glide__arrows">
								<button data-glide-dir="&gt;" class="slider__arrow glide__arrow slider__arrows-item slider__arrows-item--righ next"></button>
								<button data-glide-dir="&lt;" class="slider__arrow glide__arrow slider__arrows-item slider__arrows-item--left prev"></button>
							</div>
						</div><!-- .glide -->
					</div><!-- .home-slider -->

				</div><!-- .container -->
			</section><!-- .section -->


<!-- START CONTACT SECTION -->
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
										<input type="text" class="fl_input required" id="c-name">
									</div><!-- .fl_wrap -->
									<div class="fl_wrap">
										<label class="fl_label required" for="c_email">Your e-mail</label>
										<input type="text" class="fl_input required" id="c-email">
									</div><!-- .fl_wrap -->
									<div class="fl_wrap">
										<label class="fl_label" for="c_subject">Subject</label>
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
