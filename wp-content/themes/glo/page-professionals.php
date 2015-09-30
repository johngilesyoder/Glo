<?php
/**
 * Template Name: Professionals
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="row">

	<div class="twelve columns" style="margin-top: 150px; padding-bottom: 150px;">

		<a class="big-link" href="/details-sets"><i class="fa fa-file-o"></i>Detail Sets</a>
		<a class="big-link" href="/installation"><i class="fa fa-wrench"></i>Installation</a>
		<a class="big-link" href="/receiving-unloading-windows"><i class="fa fa-truck"></i>Receiving + Unloading Windows</a>
		<a class="big-link" href="/performance-specs"><i class="fa fa-tasks"></i>Performance Specs</a>
		<a class="big-link" href="/calculator"><i class="fa fa-calculator"></i>Calculator</a>

	</div>

</div>


<?php endwhile; ?>

<?php get_footer(); ?>
