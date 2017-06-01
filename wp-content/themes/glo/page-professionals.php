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
            <p>Nulla vitae elit libero, a pharetra augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
          </div>
        </a>
      </div>
      <div class="col-md-6">
        <a href="/calculator" class="professional-tile">
          <div class="tile-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/professionals-calculator.jpg');"></div>
          <div class="tile-content">
            <h3>R-value Calculator</h3>
            <p>Nulla vitae elit libero, a pharetra augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
          </div>
        </a>
      </div>
      <div class="col-md-6">
        <a href="/details-sets" class="professional-tile">
          <div class="tile-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/professionals-detail-sets.jpg');"></div>
          <div class="tile-content">
            <h3>Detail Drawings</h3>
            <p>Nulla vitae elit libero, a pharetra augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
          </div>
        </a>
      </div>
      <div class="col-md-6">
        <a href="/receiving-unloading-windows" class="professional-tile">
          <div class="tile-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/professionals-receiving-unloading.jpg');"></div>
          <div class="tile-content">
            <h3>Receiving &amp; Unloading</h3>
            <p>Nulla vitae elit libero, a pharetra augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
          </div>
        </a>
      </div>
      <div class="col-md-6">
        <a href="/performance-specs" class="professional-tile">
          <div class="tile-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/professionals-performance-specs.jpg');"></div>
          <div class="tile-content">
            <h3>Window Performance Specs</h3>
            <p>Nulla vitae elit libero, a pharetra augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
          </div>
        </a>
      </div>
      <div class="col-md-6">
        <a href="/installation" class="professional-tile">
          <div class="tile-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/professionals-installation.jpg');"></div>
          <div class="tile-content">
            <h3>Euro Window Installation</h3>
            <p>Nulla vitae elit libero, a pharetra augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
          </div>
        </a>
      </div>

    </div>
  </div>
</main>

<?php get_footer(); ?>
