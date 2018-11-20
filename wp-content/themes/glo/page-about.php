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
    <div>
      <h1><?php the_title(); ?></h1>
    </div>
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

  <!-- Map -->
  <?php get_template_part( 'inc/map' ); ?>

</main>

<?php get_footer(); ?>
