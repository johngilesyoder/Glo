<?php
/**
 * Template Name: Testimonials
 */

get_header(); ?>

		<div class="title-belt">
			<div class="row">
				<div class="twelve columns">
					<h1 class="entry">Testimonials</h1> 					
				</div>
			</div>
		</div>

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

				<div class="row">

					<div class="twelve columns testimonial">

						<?php the_content(); ?>

						<span class="customer">-<?php the_title(); ?></span>
						<span class="quote-before">&#8220;</span>
						<span class="quote-after">&#8221;</span>
					
					</div>
				
				</div>

			<?php
				
			}
		} else {
			// no posts found
		}
		/* Restore original Post Data */
		wp_reset_postdata();

	?>




<?php get_footer(); ?>
