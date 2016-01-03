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
	
		<div class="page-hero">
			<div class="page-hero-img" style="background-image: url('<?php echo $thumb; ?>');"></div>
			<h1><?php the_title(); ?></h1>
		</div>

	<?php else : ?>

		<div class="page-title">
			<div class="container">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>

	<?php endif; ?>

	<main class="page-wrapper">
		<div class="container">
			<div class="page-content" data-target="content">

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			</div>
		</div>
	</main>

<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>