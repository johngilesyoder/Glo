<?php
/**
 * Template Name: About
 */

get_header(); ?>

<section class="hero-title">
  <div class="hero-bg" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/fake/about-hero.jpg')"></div>
  <div class="hero-content">
    <h1><?php the_title(); ?></h1>
  </div>
</section>

<main class="page-wrapper">
	<section class="about-you tile-story">
		<div class="tile-img">
	    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fake/about-you-tile.jpg">
	  </div>
	  <div class="story-section">
	    <header>
	      <h2 class="story-section-title">About You</h2>
	      <p class="story-section-summary">
	        You are informed and have energy efficiency goals in mind for your home or building. You want a company that is pushing industry standards forward with future generations in mind.<br>
					You want a team of people who are consistent and follow through on their commitments to achieve your design and performance goals. Disregarding conventional standards, your search has led you here and we are excited to learn about your project!
	      </p>
	    </header>
	  </div>
  </section>

	<section class="about-us tile-story">
	  <div class="story-section">
	    <header>
	      <h2 class="story-section-title">About Us</h2>
	      <p class="story-section-summary">
	        Glo European Windows is a Missoula, Montana, based team of professionals dedicated to improving the performance of building envelopes through high-performance window design and installation.  As a division of Energetechs, our staff has a combined total of over 100 years in the green building field.  Our foundation ranges from general construction, super insulation and air sealing of high performance buildings, building science, energy modeling and passive house design.  Supplying energy efficient windows and doors became a natural transition in providing a quality product for you and your building envelope.
	      </p>
	    </header>
	  </div>
		<div class="tile-img">
	    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-us-tile.jpg">
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
