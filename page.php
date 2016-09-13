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

	get_header();

		//vars
		$image = get_sub_field('background_image');
		$primary = get_sub_field('main_headline');
		$secondary = get_sub_field('secondary_headline');
		$alignment = get_sub_field('caption_position');
		$r1i = get_field('row_one_image');
		$r1mh = get_field('row_one_large_headline');
		$r1sh = get_field('row_one_small_headline');
		$r1t = get_field('row_one_text');
		$r2i = get_field('row_two_image');
		$r2mh = get_field('row_two_large_headline');
		$r2sh = get_field('row_two_small_headline');
		$r2t = get_field('row_two_text');
		$r3i = get_field('row_three_image');
		$r3mh = get_field('row_three_large_headline');
		$r3sh = get_field('row_three_small_headline');
		$r3t = get_field('row_three_text');
		$r4i = get_field('row_four_image');
		$r4t = get_field('row_four_text');
	?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<!-- START HERO SECTION -->
			<section id="h-hero">
				<div class="flexslider">
				  <ul class="slides">
						<?php if( have_rows('hero_slide') ): ?>

							<?php while( have_rows('hero_slide') ): the_row();
								//vars
								$image = get_sub_field('background_image');
								$primary = get_sub_field('main_headline');
								$secondary = get_sub_field('secondary_headline');
								$alignment = get_sub_field('caption_position');
							?>

								<li style="background: url(<?php echo $image; ?>) center top no-repeat; background-size: cover;">
									<div class="container">
										<div class="caption <?php echo $alignment; ?>">
											<p class="sub headline"><?php echo $secondary; ?></p>
											<p class="main headline"><?php echo $primary; ?></p>
										</div><!-- .caption -->
									</div><!-- .container -->
						    </li>

							<?php endwhile; ?>
						<?php endif; ?>
				  </ul><!-- .slides -->
				</div><!-- .flexslider -->
			</section><!-- #home-hero -->


<!-- START CALL TO ACTION SECTION -->
			<section class="cta">
				<div class="container">
					<div class="fgrid fgrid--gutters c-align">
						<div class="fgrid-cell col-8">
							<div class="flex-wrap">

								<?php
									if(get_field('cta_main_headline')) {
										echo '<p class="main headline">' . get_field('cta_main_headline') . '</p>';
									}

									if(get_field('cta_secondary_headline')) {
										echo '<p class="sub headline">' . get_field('cta_secondary_headline') . '</p>';
									}
								?>
							</div><!-- .flex-wrap -->
						</div><!-- .fgrid-cell -->

						<div class="fgrid-cell col-4">
							<div class="flex-wrap r-align c-align r-height">

								<?php
									if(get_field('cta_secondary_headline')) {
										echo '<a href="#h-contact" class="btn lrg trans caret-r">' . get_field('cta_button') . '</a>';
									}
								?>
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

					<?php
						if(get_field('cta_secondary_headline')) {
							echo '<p>' . get_field('intro_paragraph') . '</p>';
						}
					?>

					<div class="block ico ppl"><h3>Low-Ratio Intake</h3></div>
					<div class="block ico blb"><h3>Early Learning</h3></div>
					<div class="block ico crt"><h3>Nutritious Meals</h3></div>
					<div class="block ico hrt"><h3>Health & Safety</h3></div>

				</div><!-- .container -->



	<!-- START AVAILABILITY SECTION -->
				<article id="h-avail">
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

									<?php
										if(get_field('cta_secondary_headline')) {
											echo get_field('top_paragraphs');
										}

										if(get_field('avail_testimonial')) {
											echo '<blockquote>' . get_field('avail_testimonial');

											if(get_field('avail_testimonial_source')){
												echo '<span class="source">via ' . get_field('avail_testimonial_source') . '</span>';
											}
										}

										echo '</blockquote>';

										if(get_field('cta_secondary_headline')) {
											echo get_field('bottom_paragraph');
										}
									?>
								</div><!-- .container -->
							</div><!-- .flex-wrap -->
						</div><!-- .col-8 -->
					</div><!-- .fgrid -->
				</article><!-- #home-avail -->


	<!-- START AVAILABILITY SECTION -->
				<article id="h-additional">
					<div class="container">


				<!-- BEGIN FIRST ROW -->
						<div class="image-row image-right" id="target1">
							<div class="column text">

								<?php
									if($r1sh) { echo '<span class="l-align sub-headline">' . $r1sh . '</span>'; }
									if($r1mh) { echo '<h2 class="squiggle l-align headline">' . $r1mh . '</h2>'; }
									if($r1t) { echo $r1t; }
								?>
							</div><!-- .column -->
							<div class="column image right image-1">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/img/about-01-B@2x.png" class="p-background" />

								<?php if($r1i) { echo '<img src="' . $r1i  .'" class="p-image" />'; } ?>

								<img src="<?php bloginfo('stylesheet_directory'); ?>/img/about-01-F@2x.png" class="p-foreground" />
							</div><!-- .column -->
						</div><!-- .image-row -->


				<!-- BEGIN SECOND ROW -->
						<div class="image-row image-left" id="target2">
							<div class="column text">

								<?php
									if($r1sh) { echo '<span class="l-align sub-headline">' . $r2sh . '</span>'; }
									if($r1mh) { echo '<h2 class="headline squiggle l-align">' . $r2mh . '</h2>'; }
									if($r1t) { echo $r2t; }
								?>
							</div><!-- .column -->
							<div class="column image left image-2">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/img/about-02-B@2x.png" class="p-background" />

								<?php if($r2i) { echo '<img src="' . $r2i  .'" class="p-image" />'; } ?>

								<img src="<?php bloginfo('stylesheet_directory'); ?>/img/about-02-F@2x.png" class="p-foreground" />
							</div><!-- .column -->
						</div><!-- .image-row -->


				<!-- BEGIN THIRD ROW -->
						<div class="image-row image-right" id="target3">
							<div class="column text">

								<?php
									if($r3sh) { echo '<span class="sub-headline l-align">' . $r3sh . '</span>'; }
									if($r3mh) { echo '<h2 class="squiggle l-align headline">' . $r3mh . '</h2>'; }
									if($r3t) { echo $r3t; }
								?>

							</div><!-- .column -->
							<div class="column image right image-3">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/img/about-03-B@2x.png" class="p-background" />

								<?php if($r3i) { echo '<img src="' . $r3i  .'" class="p-image" />'; } ?>

								<img src="<?php bloginfo('stylesheet_directory'); ?>/img/about-03-F@2x.png" class="p-foreground" />
							</div><!-- .column -->
						</div><!-- .image-row -->



					</div><!-- .container -->
				</article><!-- h-additional -->
			</section><!-- #home-about -->


<!-- START BIO SECTION -->
			<section id="h-bio">

				<div class="container">
					<span class="sub-headline">Meet the</span>
					<h2 class="squiggle headline">Director</h2>


					<div class="grid grid-pad grid-pull bio-grid">
						<div class="col-2 ico apple">
							<small>Eight years experience as a teacher with the CBE</small>
						</div><!-- .col-2 -->

						<div class="col-2 ico ribbon">
							<small>Level 3 (Child Supervisor) certified</small>
						</div><!-- .col-2 -->

						<div class="col-2 ico cross">
							<small>Current First Aid (CPR/AED) and infant CPR</small>
						</div><!-- .col-2 -->

						<div class="col-2 ico hat">
							<small>BED with Distinction from the University of Alberta</small>
						</div><!-- .col-2 -->

						<div class="col-2 ico pacifier">
							<small>Alberta Health Child Care course certificate</small>
						</div><!-- .col-2 -->

						<div class="col-2 ico search">
							<small>Criminal record check (vulnerable sector) completed</small>
						</div><!-- .col-2 -->
					</div><!-- .grid -->

				<!-- BEGIN IMAGE ROW -->
						<div class="image-row image-left" id="target4">
							<div class="column text">

								<?php if($r4t) { echo $r4t; } ?>

							</div><!-- .column -->
							<div class="column image left image-4">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/img/director-B@2x.png" class="p-background" />

								<?php if($r4i) { echo '<img src="' . $r4i  .'" class="p-image" />'; } ?>

								<span class="img-cap">Jessica Watson</span>
								<img src="<?php bloginfo('stylesheet_directory'); ?>/img/director-F@2x.png" class="p-foreground" />
							</div><!-- .column -->
						</div><!-- .image-row -->

				</div><!-- .container -->
			</section><!-- .section -->


<!-- START RATEs SECTION -->
			<section id="h-rates">
				<div class="container">
					<h2 class="squiggle headline">Hours & Rates</h2>

						<div class="grid grid-pad grid-pull hours-rate-grid">
							<div class="col-6">
								<div class="column hours">
									<span class="fancy">Hours</span>
										<?php
											if(get_field('har_hours')) {
												echo get_field('har_hours');
											}
										?>
								</div><!-- .column -->
							</div><!-- .col-6 -->
							<div class="col-6">
								<div class="column rates">
									<span class="fancy">Rates</span>
										<?php
											if(get_field('har_rates')) {
												echo get_field('har_rates');
											}
										?>
								</div><!-- .column -->
							</div><!-- .col-6 -->
						</div><!-- .grid -->
				</div><!-- .container -->
			</section><!-- .section -->


<!-- START SCHEDULE SECTION -->
			<section id="h-schedule">
				<div class="container">
					<span class="sub-headline">Daily</span>
					<h2 class="squiggle headline">Schedule</h2>

						<ul id="schedule-list">
							<?php if( have_rows('schedule_list_item') ): ?>
								<?php while( have_rows('schedule_list_item') ): the_row();
								//vars
									$slDesc = get_sub_field('schedule_item_description');
							 		$slTime = get_sub_field('schedule_item_time');
								?>

								<?php echo '<li><span class="time-slot">' . $slTime . '</span>' . $slDesc . '</li>'; ?>

								<?php endwhile; ?>
							<?php endif; ?>
						</ul>

						<?php
							if(get_field('schedule_note')) {
								echo '<p class="note">' . get_field('schedule_note') . '</p>';
							}
						?>

				</div><!-- .container -->
			</section><!-- .section -->


<!-- START MENU SECTION -->
			<section id="h-menu">
				<div class="container">
					<span class="sub-headline">Sample</span>
					<h2 class="squiggle headline">Menu</h2>

					<div class="Rtable Rtable--5cols Rtable--collapse">


		<!-- BEGIN COLUMN ONE // MONDAY-->
					  <div style="order:0;" class="Rtable-cell Rtable-cell--head first-col"><h3>Monday</h3></div>
					  <div style="order:1;" class="Rtable-cell cell-1 bg-red first-col">
							<span>Breakfast</span>
							<?php
								if(get_field('mon_breakfast')) {
									echo get_field('mon_breakfast');
								}
							?>
						</div><!-- .Rtable-cell -->
					  <div style="order:2;" class="Rtable-cell cell-2 bg-yellow first-col">
							<span>AM Snack</span>
							<?php
								if(get_field('mon_am_snack')) {
									echo get_field('mon_am_snack');
								}
							?>
						</div><!-- .Rtable-cell -->
						<div style="order:3;" class="Rtable-cell cell-3 bg-cyan first-col">
							<span>Lunch</span>
							<?php
								if(get_field('mon_lunch')) {
									echo get_field('mon_lunch');
								}
							?>
						</div><!-- .Rtable-cell -->
					  <div style="order:4;" class="Rtable-cell cell-4 bg-blue Rtable-cell--foot first-col">
							<span>PM Snack</span>
							<?php
								if(get_field('mon_pm_snack')) {
									echo get_field('mon_pm_snack');
								}
							?>
						</div><!-- .Rtable-cell--foot -->


		<!-- BEGIN COLUMN TWO // TUESDAY-->
						<div style="order:0;" class="Rtable-cell Rtable-cell--head"><h3>Tuesday</h3></div>
					  <div style="order:1;" class="Rtable-cell cell-1 bg-yellow">
							<span>Breakfast</span>
							<?php
								if(get_field('tues_breakfast')) {
									echo get_field('tues_breakfast');
								}
							?>
						</div><!-- .Rtable-cell -->
					  <div style="order:2;" class="Rtable-cell cell-2 bg-cyan">
							<span>AM Snack</span>
							<?php
								if(get_field('tues_am_snack')) {
									echo get_field('tues_am_snack');
								}
							?>
						</div><!-- .Rtable-cell -->
						<div style="order:3;" class="Rtable-cell cell-3 bg-blue">
							<span>Lunch</span>
							<?php
								if(get_field('tues_lunch')) {
									echo get_field('tues_lunch');
								}
							?>
						</div><!-- .Rtable-cell -->
					  <div style="order:4;" class="Rtable-cell cell-4 bg-purple Rtable-cell--foot">
							<span>PM Snack</span>
							<?php
								if(get_field('tues_pm_snack')) {
									echo get_field('tues_pm_snack');
								}
							?>
						</div><!-- .Rtable-cell--foot -->


		<!-- BEGIN COLUMN THREE // WEDNESDAY -->
						<div style="order:0;" class="Rtable-cell Rtable-cell--head"><h3>Wednesday</h3></div>
					  <div style="order:1;" class="Rtable-cell cell-1 bg-cyan">
							<span>Breakfast</span>
							<?php
								if(get_field('wed_breakfast')) {
									echo get_field('wed_breakfast');
								}
							?>
						</div><!-- .Rtable-cell -->
					  <div style="order:2;" class="Rtable-cell cell-2 bg-blue">
							<span>AM Snack</span>
							<?php
								if(get_field('wed_am_snack')) {
									echo get_field('wed_am_snack');
								}
							?>
						</div><!-- .Rtable-cell -->
						<div style="order:3;" class="Rtable-cell cell-3 bg-purple">
							<span>Lunch</span>
							<?php
								if(get_field('wed_lunch')) {
									echo get_field('wed_lunch');
								}
							?>
						</div><!-- .Rtable-cell -->
					  <div style="order:4;" class="Rtable-cell cell-4 bg-red Rtable-cell--foot">
							<span>PM Snack</span>
							<?php
								if(get_field('wed_pm_snack')) {
									echo get_field('wed_pm_snack');
								}
							?>
						</div><!-- .Rtable-cell--foot -->


		<!-- BEGIN COLUMN FOUR // THURSDAY-->
						<div style="order:0;" class="Rtable-cell Rtable-cell--head"><h3>Thursday</h3></div>
					  <div style="order:1;" class="Rtable-cell cell-1 bg-blue">
							<span>Breakfast</span>
							<?php
								if(get_field('thu_breakfast')) {
									echo get_field('thu_breakfast');
								}
							?>
						</div><!-- .Rtable-cell -->
					  <div style="order:2;" class="Rtable-cell cell-2 bg-purple">
							<span>AM Snack</span>
							<?php
								if(get_field('thu_am_snack')) {
									echo get_field('thu_am_snack');
								}
							?>
						</div><!-- .Rtable-cell -->
						<div style="order:3;" class="Rtable-cell cell-3 bg-red">
							<span>Lunch</span>
							<?php
								if(get_field('thu_lunch')) {
									echo get_field('thu_lunch');
								}
							?>
						</div><!-- .Rtable-cell -->
					  <div style="order:4;" class="Rtable-cell cell-4 bg-yellow Rtable-cell--foot">
							<span>PM Snack</span>
							<?php
								if(get_field('thu_pm_snack')) {
									echo get_field('thu_pm_snack');
								}
							?>
						</div><!-- .Rtable-cell--foot -->


		<!-- BEGIN COLUMN FIVE // FRIDAY -->
						<div style="order:0;" class="Rtable-cell Rtable-cell--head"><h3>Friday</h3></div>
					  <div style="order:1;" class="Rtable-cell cell-1 bg-purple">
							<span>Breakfast</span>
							<?php
								if(get_field('fri_breakfast')) {
									echo get_field('fri_breakfast');
								}
							?>
						</div><!-- .Rtable-cell -->
					  <div style="order:2;" class="Rtable-cell cell-2 bg-red">
							<span>AM Snack</span>
							<?php
								if(get_field('fri_am_snack')) {
									echo get_field('fri_am_snack');
								}
							?>
						</div><!-- .Rtable-cell -->
						<div style="order:3;" class="Rtable-cell cell-3 bg-yellow">
							<span>Lunch</span>
							<?php
								if(get_field('fri_lunch')) {
									echo get_field('fri_lunch');
								}
							?>
						</div><!-- .Rtable-cell -->
					  <div style="order:4;" class="Rtable-cell cell-4 bg-cyan Rtable-cell--foot">
							<span>PM Snack</span>
							<?php
								if(get_field('fri_pm_snack')) {
									echo get_field('fri_pm_snack');
								}
							?>
						</div><!-- .Rtable-cell--foot -->
					</div>

				</div><!-- .container -->
			</section><!-- .section -->


<!-- START GALLERY SECTION -->
			<section id="h-gallery">
				<div class="container">

				<!-- GLIDE THAT SHIT -->
					<div class="slider-copy">
						<div class="slider-wrap">
							<?php if( have_rows('carou_slide') ): ?>

								<?php while( have_rows('carou_slide') ): the_row();
									$carouTitle = get_sub_field('carou_headline');
									$carouText = get_sub_field('carou_text');
									$carouNum = get_sub_field('carou_number');
								?>

									<div data-slide="<?php echo $carouNum ?>" class="service ">
										<?php
											echo '<h2>' . $carouTitle . '</h2>';
											echo '<p>' . $carouText . '</p>';
										?>
									</div>

								<?php endwhile; ?>
							<?php endif; ?>

						</div><!-- .slider-wrap -->
					</div><!-- .slider-copy -->

					<div class="home-slider">
						<div class="glide" id="carousel" style="">
							<ul class="slides glide__track">

								<?php if( have_rows('carou_slide') ): ?>

									<?php while( have_rows('carou_slide') ): the_row();
										$carouImage = get_sub_field('carou_image');
										$carouTitle = get_sub_field('carou_headline');
									?>

										<li class="slide glide__slide">
											<figure>
												<img alt="<?php echo $carouTitle; ?>" title="<?php echo $carouTitle; ?>" src="<?php echo $carouImage; ?>">
											</figure>
								    </li>

									<?php endwhile; ?>
								<?php endif; ?>
							</ul>

							<div class="slider__arrows glide__arrows">
								<button data-glide-dir="&gt;" class="slider__arrow glide__arrow slider__arrows-item slider__arrows-item--right next"></button>
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
								<small><a href="mailto:fake@mail.com" data-mail-user="hello" data-mail-domain="weewigglesinc.com" class="plain-link">...</a></small>
							</div><!-- ico -->

							<div class="col-4 ico clock">
								<p>Hours</p>
								<small>Monday-Friday<br>7:30am-5:00pm</small>
							</div><!-- ico -->
						</div><!-- .grid -->

						<form id="contact-form" class="FlowupLabels" method="POST" action="<?php bloginfo('stylesheet_directory'); ?>/mail.php">
							<div class="grid grid-pad grid-pull">
								<div class="col-6">
									<div class="fl_wrap">
										<label class="fl_label required" for="c_name">Your name</label>
										<input type="text" class="fl_input required" id="c-name" name="name" value="" required>
									</div><!-- .fl_wrap -->
									<div class="fl_wrap">
										<label class="fl_label required" for="c_email">Your e-mail</label>
										<input type="text" class="fl_input required" id="c-email" name="email" value="" required>
									</div><!-- .fl_wrap -->
									<div class="fl_wrap">
										<label class="fl_label" for="c_subject">Subject</label>
										<input type="text" class="fl_input" id="c-subject" name="subject" value="">
									</div><!-- .fl_wrap -->
								</div><!-- .col-6 -->

								<div class="col-6">
									<div class="fl_wrap tall">
										<label class="fl_label required" for="c-mess">Message</label>
										<textarea id="c-mess" class="fl_input" name="message" value="" required></textarea>
									</div><!-- fl_wrap -->
								</div><!-- .col-6 -->
							</div><!-- .grid -->

							<button type="submit" name="submit" class="btn red">Send Message</button>
              <input type="hidden" name="submitted" id="submitted" value="true" />
						</form><!-- #contact-form -->
						<div id="contactResponse"></div>

				</div><!-- .container -->
			</section><!-- .section -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
