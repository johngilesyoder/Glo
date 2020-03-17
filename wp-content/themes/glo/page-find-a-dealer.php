<?php
/**
 * Template Name: Find a Dealer
 */

$hero_background = get_field('hero_background');
$about_you_photo = get_field('about_you_photo');
$about_us_photo = get_field('about_us_photo');

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php $post_id = get_the_ID(); ?>

	<?php if ( has_post_thumbnail() ) : ?>

		<?php $thumb = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

		<section class="hero-title">
		  <div class="hero-bg" style="background-image:url('<?php echo $thumb; ?>')"></div>
		  <div class="hero-content">
		    <h1><?php the_title(); ?></h1>
		  </div>
		</section>

	<?php else : ?>

		<div class="page-title">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h1><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
		</div>

	<?php endif; ?>
  
<?php endwhile; ?>

<main class="page-wrapper">
  <!-- Map -->
  <?php get_template_part( 'inc/map' ); ?>

</main>

<?php get_footer(); ?>
