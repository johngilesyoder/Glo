<?php
/**
 * Template Name: Available Anywhere
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
  <!-- Map -->
  <?php get_template_part( 'inc/map' ); ?>

</main>

<?php get_footer(); ?>
