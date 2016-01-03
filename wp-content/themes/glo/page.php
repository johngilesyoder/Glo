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

<div class="page-title">
	<div class="container">
		<h1><?php the_title(); ?>
	</div>
</div>

<main class="page-wrapper">
	<div class="container">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php $post_id = get_the_ID(); ?>
			
			<?php if ( has_post_thumbnail() ) : ?>

				<?php $thumb = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
			
				<div class="hero">
					<img src="<?php echo $thumb; ?>">
				</div>

			<?php endif; ?>

			<div class="page-content" data-target="content">
					<?php get_template_part( 'template-parts/content', 'page' ); ?>
			</div>

		<?php endwhile; // End of the loop. ?>

	</div>
</main>

<?php get_footer(); ?>