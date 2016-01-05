<?php
/**
 * The template for displaying all single posts.
 *
 * @package glo
 */

get_header(); ?>

<div class="page-title">
	<div class="container">
		<h2>Projects</h2>
	</div>
</div>

<main class="page-wrapper">
	<div class="container">
		<div class="page-content">
		<?php while ( have_posts() ) : the_post(); ?>
		
			<h1 class="post-title"><?php the_title(); ?></h1>

			<?php the_content(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				//if ( comments_open() || get_comments_number() ) :
				//	comments_template();
				//endif;
			?>

		<?php endwhile; // End of the loop. ?>
		</div>
	</div>
</main>

<?php get_footer(); ?>