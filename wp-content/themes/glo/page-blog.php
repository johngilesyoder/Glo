<?php
/**
 * Template Name: Blog
 */

get_header(); ?>

<div class="page-title">
	<div class="container">
		<h1><?php the_title(); ?></h1>
	</div>
</div>

<main class="page-wrapper">
	<div class="container">
		<div class="row">
			<?php 
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				$args = array(
					'post_type'      => 'post',
					'paged'          => $paged,
					'posts_per_page' => 3,
				);
			?>
			<?php $query = new WP_Query( $args ); ?>
			<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'inc/blog-tile' );

				// End the loop.
				endwhile;

				// Previous/next page navigation.
				the_posts_pagination( array(
					'prev_text'          => __( 'Previous page', '' ),
					'next_text'          => __( 'Next page', '' ),
				) );

			// If no content, include the "No posts found" template.
			else :
				

			endif;
			?>

		</div>
	</div>
</main>

<?php get_footer(); ?>