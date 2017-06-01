<?php
/**
 * Template Name: About
 */

$hero_background = get_field('hero_background');
$about_you_photo = get_field('about_you_photo');
$about_us_photo = get_field('about_us_photo');

get_header(); ?>

<section class="hero-title">
  <div class="hero-bg" style="background-image:url('<?php echo $hero_background['url']; ?>')"></div>
  <div class="hero-content">
    <h1><?php the_title(); ?></h1>
  </div>
</section>

<main class="page-wrapper">
	<section class="about-you tile-story">
		<div class="tile-img">
	    <img src="<?php echo $about_you_photo['url']; ?>">
	  </div>
	  <div class="story-section">
	    <header>
	      <h2 class="story-section-title">About You</h2>
	      <p class="story-section-summary">
	        <?php the_field('about_you_copy'); ?>
	      </p>
	    </header>
	  </div>
  </section>

	<section class="about-us tile-story">
	  <div class="story-section">
	    <header>
	      <h2 class="story-section-title">About Us</h2>
	      <p class="story-section-summary">
	        <?php the_field('about_us_copy'); ?>
	      </p>
	    </header>
	  </div>
		<div class="tile-img">
	    <img src="<?php echo $about_us_photo['url']; ?>">
	  </div>
  </section>

	<section class="available-anywhere story-section">
		<div class="container-fluid">
			<header>
				<h2 class="story-section-title">Available wherever you are.</h2>
			</header>
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<img class="america-outline" class="america-map" src="<?php echo get_template_directory_uri(); ?>/assets/img/usa-outline.svg">
					<div class="headquarters">
						<h3>Headquarters</h3>
						<div class="row">
							<div class="col-md-6">
								<address>
									<strong>Glo European Windows</strong>
									+1 (406) 721-2741<br>
									1001 S 4th Street W, Suite 1<br>
									Missoula, Montana 59801
								</address>
							</div>
							<div class="col-md-6">
								<address>
									<strong>European Finishes</strong>
									+1 (543) 767-3701<br>
									234 Dougal St.<br>
									Seattle, Washington 87334
								</address>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>
