<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package glo
 */

get_header(); ?>

<div class="page-title">
	<div class="container">
		<h1>Blog</h1>
	</div>
</div>

<main class="page-wrapper">
	<div class="container">
		<div class="row">
		<?php if ( have_posts() ) : ?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'inc/blog-tile' );

			// End the loop.
			endwhile;
			?>

		</div>

		<?php 
		// Previous/next page navigation.
		the_posts_pagination( array(
			'prev_text'          => __( 'Previous page' ),
			'next_text'          => __( 'Next page' ),
			'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
		) );

	// If no content, include the "No posts found" template.
	else :
		

	endif;
	?>

	</div>
</main>

<?php get_footer(); ?>
