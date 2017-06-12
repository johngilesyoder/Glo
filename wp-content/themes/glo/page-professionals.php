<?php
/**
 * Template Name: Professionals
 */

get_header(); ?>

<section class="hero-title">
  <div class="hero-bg" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/fake/professionals-hero.jpg')"></div>
  <div class="hero-content">
    <h1><?php the_title(); ?></h1>
  </div>
</section>

<main class="page-wrapper">
  <div class="container-fluid">
    <div class="row">

      <div class="col-md-6">
        <a href="/installation-videos" class="professional-tile">
          <div class="tile-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/professionals-videos.jpg');"></div>
          <div class="tile-content">
            <h3>Installation Videos</h3>
            <p>Our Installation Videos will show you how to install your Glo windows and doors with step-by-step instructions and easy how-to’s that ensure professional results.</p>
          </div>
        </a>
      </div>
      <div class="col-md-6">
        <a href="/calculator" class="professional-tile">
          <div class="tile-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/professionals-calculator.jpg');"></div>
          <div class="tile-content">
            <h3>R-value Calculator</h3>
            <p>Having trouble converting R-value to U-value? Our simple-to-use R-value calculator provides quick conversion allowing you to select the right products for your project’s climate zone. </p>
          </div>
        </a>
      </div>
      <div class="col-md-6">
        <a href="/details-sets" class="professional-tile">
          <div class="tile-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/professionals-detail-sets.jpg');"></div>
          <div class="tile-content">
            <h3>Detail Drawings</h3>
            <p>Construction detail drawings for window and door sections and elevations provide you with the technical information required for smooth integration of our products into your architectural drawings.</p>
          </div>
        </a>
      </div>
      <div class="col-md-6">
        <a href="/receiving-unloading-windows" class="professional-tile">
          <div class="tile-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/professionals-receiving-unloading.jpg');"></div>
          <div class="tile-content">
            <h3>Receiving &amp; Unloading</h3>
            <p>What to expect when your Glo Windows and Doors have been delivered to your site including recommended tools and equipment to make the window delivery and unload process smooth, efficient, and safe.</p>
          </div>
        </a>
      </div>
      <div class="col-md-6">
        <a href="/performance-specs" class="professional-tile">
          <div class="tile-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/professionals-performance-specs.jpg');"></div>
          <div class="tile-content">
            <h3>Window Performance Specs</h3>
            <p>Window performance information for our products including window specifications and data relating to energy efficiency including U-value, SHGC, insulated glazing, VT, and more. </p>
          </div>
        </a>
      </div>
      <div class="col-md-6">
        <a href="/installation" class="professional-tile">
          <div class="tile-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/professionals-installation.jpg');"></div>
          <div class="tile-content">
            <h3>Euro Window Installation</h3>
            <p>Window installation tips and tricks for preparing your rough openings to achieve the best possible water and air tightness through proper flashing and furthering your energy efficiency with overinsulation techniques.</p>
          </div>
        </a>
      </div>

    </div>
  </div>
</main>

<?php get_footer(); ?>
