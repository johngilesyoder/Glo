<?php
/**
 * The template for displaying all single posts.
 *
 * @package glo
 */

get_header(); ?>

	<div class="row content">
		<div class="twelve columns">
			<?php while ( have_posts() ) : the_post(); ?>
			
				<h1><?php the_title(); ?></h1>

				<?php the_content(); ?>


				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

		<?php endwhile; // End of the loop. ?>
		</div>
	</div>

<?php get_footer(); ?>

