<?php
/**
 * Template Name: Homepage
 */

get_header(); ?>

<div class="container">

	<div class="row">
		<div class="col-md-6">
			<div class="home-block home-block-text home-about-you">
				<div class="home-block-content">
					<h2 class="home-block-title"><a href="/about-us/">About You <i></i></a></h2>
					<p>You believe the environment matters and you want to leave the next generation with something to be proud of.</p>
					<p>You don't want to sacrifice quality for the bottom line and you believe the products you buy shouldn't either.</p>
				</div>
			</div>
			<a href="/products" class="home-block home-block-img home-products">
				<div class="block-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/1.jpg');"></div>
				<h2 class="home-block-title">Products <i></i></h2>
			</a>
		</div>
		<div class="col-md-6">
			<a href="/projects" class="home-block home-block-img home-projects">
				<div class="block-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/2.jpg');"></div>
				<h2 class="home-block-title">Projects <i></i></h2>
			</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-7">
			<a href="/passive-house" class="home-block home-block-img home-passive-house">
				<div class="block-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/3.jpg');"></div>
				<h2 class="home-block-title">Passive House <i></i></h2>
			</a>
		</div>
		<div class="col-md-5">
			<div class="home-block home-block-text home-about-us">
				<div class="home-block-content">
					<h2 class="home-block-title"><a href="/about-us/">About Us <i></i></a></h2>
					<p>We are passionate about future generations realizing the benefits of your educated selection of Glo windows today.  Elegant, efficient, durable.  The value of our windows is timeless.</p>
					<p>Glo Windows is consumed with innovation. Our high performance windows, doors and wall linings exceed energy efficiency performance standards.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<a href="/blog" class="home-block home-block-img home-blog">
				<div class="block-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/4.jpg');"></div>
				<h2 class="home-block-title">Blog <i></i></h2>
			</a>
		</div>
		<div class="col-md-8">
			<a href="/professionals" class="home-block home-block-img home-professionals">
				<div class="block-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/5.jpg');"></div>
				<h2 class="home-block-title">Professionals <i></i></h2>
			</a>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4">
			<?php types_render_field("seo-block-1", array("raw"=>"true")); ?>
		</div>
		<div class="col-md-4">
			<?php types_render_field("seo-block-2", array("raw"=>"true")); ?>
		</div>
		<div class="col-md-4">
			<?php types_render_field("seo-block-3", array("raw"=>"true")); ?>
		</div>
</div>


<?php get_footer(); ?>