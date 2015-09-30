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
	
	<?php if ( has_post_thumbnail() ) { ?>

		<?php $thumb = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
	
		<div class="hero">
			<h1><?php the_title(); ?></h1>
			<img src="<?php echo $thumb; ?>">
		</div>

	<?php } else { ?>

		<div class="title-belt">
			<div class="row">
				<div class="twelve columns">
					<?php the_title( '<h1 class="entry">', '</h1>' ); ?>
				</div>
			</div>
		</div>

	<?php } ?>


	<div class="row content" data-target="content">
		<div class="twelve columns">
			<?php get_template_part( 'template-parts/content', 'page' ); ?>
		</div><!-- .twelve -->
	</div><!-- .content -->

<?php endwhile; // End of the loop. ?>




<?php get_footer(); ?>
