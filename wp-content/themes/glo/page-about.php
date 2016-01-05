<?php
/**
 * Template Name: About
 */

get_header(); ?>

<div class="page-title">
	<div class="container">
		<h1>About</h1>
	</div>
</div>

<main class="page-wrapper">
	<div class="container">

		<section class="about-you">
			<h2 class="section-title">About You</h2>

			<div class="row">
				<div class="col-sm-6">
					<div class="about-block block-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/about-you.jpg');">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="about-block block-text">
						<p>You are informed and have energy efficiency goals in mind for your home or building. You want a company that is pushing industry standards forward with future generations in mind.</p>
					</div>
				</div>
			</div>

			<div class="row">
			<div class="col-sm-6 col-sm-push-6">
				<div class="about-block block-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/about-us.jpg');">
				</div>
			</div>
			<div class="col-sm-6 col-sm-pull-6">
				<div class="about-block block-text">
					<p>You want a team of people who are consistent and follow through on their commitments to achieve your design and performance goals. Disregarding conventional standards, your search has led you here and we are excited to learn about your project!</p>
				</div>
			</div>
				
			</div>

		</section>

		<?php while ( have_posts() ) : the_post(); ?>
		<section class="about-you">
			<h2 class="section-title">About Us</h2>
			<div class="row">
				<div class="col-md-12">
					<?php the_content(); ?>
				</div>
			</div>
		</section>
		<?php endwhile; ?>

	</div>
</main>

<?php get_footer(); ?>