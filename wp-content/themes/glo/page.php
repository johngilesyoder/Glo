<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package glo
 */

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

	<main class="page-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="page-content" data-target="content">

						<?php get_template_part( 'template-parts/content', 'page' ); ?>

					</div>
				</div>
			</div>
		</div>
	</main>

<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>
