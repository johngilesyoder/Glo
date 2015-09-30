<?php
/**
 * Template Name: About
 */

get_header(); ?>

<style type="text/css">
	.bottom-ten {margin-bottom: 10px;}
</style>

<div class='row'>

<div class="ten columns centered">

<div class="row" style="position: relative;">

	<div class="six columns heading-block block">

		<h1 class="bold">About<br>You</h1>
		
	</div>

	<div class="six columns block">
		<p class="centered">You are informed and have energy efficiency goals in mind for your home or building. You want a company that is pushing industry standards forward with future generations in mind.</p>
	</div>
		
</div>

<div class="row" style="position: relative;">

	<div class="six columns block">

		<p  class="centered">You want a team of people who are consistent and follow through on their commitments to achieve your design and performance goals. Disregarding conventional standards, your search has led you here and we are excited to learn about your project!</p>

	</div>

	<div class="six columns block" style="background:url('<?php echo get_template_directory_uri(); ?>/images/about-you.jpg');">
		
	</div>
		
</div>

</div>

</div>

<div class="row">

	<div class="ten columns centered inset">
	<?php while ( have_posts() ) : the_post(); ?>
		
		<h2 class="bold">About Us</h2>

		<?php the_content(); ?>

	<?php endwhile; ?>
	</div>
		
</div>


<?php get_footer(); ?>
