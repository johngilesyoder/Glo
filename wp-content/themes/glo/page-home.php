<?php
/**
 * Template Name: Homepage
 */

get_header(); ?>

<style type="text/css">
	.bottom-twenty {margin-bottom: 20px;}
</style>

<div class="row bottom-twenty" style="position: relative;">

	<a href="/about-us" class="six columns paralink">

		<h2 class="line-under">About You</h2>
		<p  class="centered-home">You believe the environment matters and you want to leave the next generation with something to be proud of.</p>
		<p  class="centered-home">You don't want to sacrifice quality for the bottom line and you believe the products you buy shouldn't either.</p>

		<div class="align-bottom">
				<a href="/products" class="grid">
					<figure class="effect-bubba">
						<img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" alt="Kitchen Area Glo Windows"/>
						<figcaption>
							<h2 class="line-under">PRODUCTS</h2>
							<?php // <p><a href="#">Wood</a> | <a href="#">Aluminum</a> | <a href="#">Passive</a></p> ?>
						</figcaption>			
					</figure>
				</a>
		</div>
	</a>

	<div class="six columns" style="text-align: right;">

		<a href="/projects" class="grid">
			<figure class="effect-bubba linkcenter">
				<img src="<?php echo get_template_directory_uri(); ?>/images/2.jpg" alt="Desk Glo Windows"/>
				<figcaption>
					<h2 class="line-under">Projects</h2>
				</figcaption>			
			</figure>
		</a>

	</div>
		
</div>

<div class="row bottom-twenty">

	<div class="seven columns">

		<a href="/passive-house" class="grid maxheight">
			<figure class="effect-bubba">
				<img src="<?php echo get_template_directory_uri(); ?>/images/3.jpg" alt="Bathroom Inspiration Glo Windows"/>
				<figcaption>
					<h2 class="line-under">Passive House</h2>
				</figcaption>			
			</figure>
		</a>

	</div>

	<a href="/about-us" class="five columns paralink">

		<h2 class="line-under">About Us</h2>
		<p  class="centered-home">We are passionate about future generations realizing the benefits of your educated selection of Glo windows today.  Elegant, efficient, durable.  The value of our windows is timeless.</p>
		<p  class="centered-home">Glo Windows is consumed with innovation. Our high performance windows, doors and wall linings exceed energy efficiency performance standards.</p>

	</a>
		
</div>

<div class="row bottom-twenty sidebyside">

	<div class="four columns">
		
		<a href="/blog" class="grid">
			<figure class="effect-bubba linkcenter">
				<img src="<?php echo get_template_directory_uri(); ?>/images/4.jpg" alt="Stairway Glo Windows"/>
				<figcaption>
					<h2 class="line-under">Blog</h2>
				</figcaption>			
			</figure>
		</a>

	</div>

	<div class="eight columns" style="text-align: right;">

		<a href="/professionals" class="grid">
			<figure class="effect-bubba">
				<img src="<?php echo get_template_directory_uri(); ?>/images/5.jpg" alt="Kitchen Inspiration Glo Windows"/>
				<figcaption>
					<h2 class="line-under">Professionals</h2>
				</figcaption>			
			</figure>
		</a>

	</div>
		
</div>


<?php get_footer(); ?>
