<?php
/**
 * Template Name: Homepage
 */

get_header(); ?>

<?php
	$about_you	 = types_render_field("about-you-home", array("raw"=>"true"));
	$about_us 	 = types_render_field("about-us-home", array("raw"=>"true"));
	$seo_block_1 = types_render_field("seo-block-1", array("raw"=>"true"));
	$seo_block_2 = types_render_field("seo-block-2", array("raw"=>"true"));
	$seo_block_3 = types_render_field("seo-block-3", array("raw"=>"true"));
?>

<div class="container">

	<div class="row">
		<div class="col-md-6">
			<div class="home-block home-block-text home-about-you">
				<div class="home-block-content">
					<h2 class="home-block-title"><a href="/about-us/">About You <i></i></a></h2>
					<?php echo $about_you_home; ?>
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
					<?php echo $about_us_home; ?>
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

	<section class="homepage-info">
		<div class="row">
			<div class="col-md-4">
				<?php echo $seo_block_1; ?>
			</div>
			<div class="col-md-4">
				<?php echo $seo_block_2; ?>
			</div>
			<div class="col-md-4">
				<?php echo $seo_block_3; ?>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>