<?php
/**
 * Template Name: Homepage
 */

get_header(); ?>

<div class="container">

	<div class="row">
		<div href="/about-us" class="col-md-6">
			<h2 class="line-under">About You</h2>
			<p class="centered-home">You believe the environment matters and you want to leave the next generation with something to be proud of.</p>
			<p class="centered-home">You don't want to sacrifice quality for the bottom line and you believe the products you buy shouldn't either.</p>
			<div class="align-bottom">
				<a href="/products" class="grid">
					<figure class="effect-bubba">
						<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" alt="Kitchen Area Glo Windows"/>
						<figcaption>
							<h2 class="line-under">PRODUCTS</h2>
							<?php // <p><a href="#">Wood</a> | <a href="#">Aluminum</a> | <a href="#">Passive</a></p> ?>
						</figcaption>			
					</figure>
				</a>
			</div>
		</div>

		<div class="col-md-6">
			<a href="/projects" class="grid">
				<figure class="effect-bubba linkcenter">
					<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/2.jpg" alt="Desk Glo Windows"/>
					<figcaption>
						<h2 class="line-under">Projects</h2>
					</figcaption>			
				</figure>
			</a>
		</div>
	</div>

	<div class="row">
		<div class="col-md-7">
			<a href="/passive-house">
				<figure class="effect-bubba">
					<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/3.jpg" alt="Bathroom Inspiration Glo Windows"/>
					<figcaption>
						<h2 class="line-under">Passive House</h2>
					</figcaption>			
				</figure>
			</a>

		</div>

		<a href="/about-us" class="col-md-5">

			<h2 class="line-under">About Us</h2>
			<p  class="centered-home">We are passionate about future generations realizing the benefits of your educated selection of Glo windows today.  Elegant, efficient, durable.  The value of our windows is timeless.</p>
			<p  class="centered-home">Glo Windows is consumed with innovation. Our high performance windows, doors and wall linings exceed energy efficiency performance standards.</p>

		</a>
			
	</div>

	<div class="row">

		<div class="col-md-4">
			
			<a href="/blog" class="grid">
				<figure class="effect-bubba linkcenter">
					<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/4.jpg" alt="Stairway Glo Windows"/>
					<figcaption>
						<h2 class="line-under">Blog</h2>
					</figcaption>			
				</figure>
			</a>

		</div>

		<div class="col-md-8" style="text-align: right;">

			<a href="/professionals" class="grid">
				<figure class="effect-bubba">
					<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/5.jpg" alt="Kitchen Inspiration Glo Windows"/>
					<figcaption>
						<h2 class="line-under">Professionals</h2>
					</figcaption>			
				</figure>
			</a>

		</div>
			
	</div>

</div>


<?php get_footer(); ?>
