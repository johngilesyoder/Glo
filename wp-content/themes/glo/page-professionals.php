<?php
/**
 * Template Name: Professionals
 */

get_header(); ?>

<div class="page-title">
  <div class="container">
    <h1><?php the_title(); ?></h1>
  </div>
</div>

<main class="page-wrapper">
  <div class="container">
    <div class="page-content">

      <?php while ( have_posts() ) : the_post(); ?>

    	<ul class="professionals-links">
    		<li><a href="/details-sets"><i class="fa fa-file-o"></i>Detail Sets</a></li>
    		<li><a href="/installation"><i class="fa fa-wrench"></i>Installation</a></li>
    		<li><a href="/receiving-unloading-windows"><i class="fa fa-truck"></i>Receiving + Unloading Windows</a></li>
    		<li><a href="/performance-specs"><i class="fa fa-tasks"></i>Performance Specs</a></li>
    		<li><a href="/calculator"><i class="fa fa-calculator"></i>Calculator</a></li>
    	</ul>

      <?php endwhile; ?>

    </div>
  </div>
</main>

<?php get_footer(); ?>
