<?php
/**
 * Template Name: Testimonials
 */

get_header(); ?>

<div class="page-title">
	<div class="container">
		<h1><?php the_title(); ?></h1>
	</div>
</div>

<main class="page-wrapper">
	<div class="container">

	<?php

		$args = array(
			'post_type' => 'testimonial',
		);

		// The Query
		$the_query = new WP_Query( $args );

		// The Loop
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();

			?>

				<blockquote class="testimonial">

					<?php the_content(); ?>

					<footer><cite><?php the_title(); ?></cite></footer>
				</blockquote>

			<?php
				
			}
		} else {
			// no posts found
		}
		/* Restore original Post Data */
		wp_reset_postdata();

	?>
	</div>
</main>



<?php get_footer(); ?>
