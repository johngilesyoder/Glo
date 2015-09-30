<?php
/**
 * Template Name: Careers
 */

get_header(); ?>

<div class="row">


	<?php

		$args = array(
			'post_type' => 'career',
		);

		// The Query
		$the_query = new WP_Query( $args );

		// The Loop
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();

			?>

				<div class="row content">
					<div class="twelve columns">
						<h2><?php the_title();?></h2>
						<?php the_content(); ?>
					</div>
				</div>

				<hr>

			<?php
				
			}
		} else {
			// no posts found
			echo '<p>Sorry, there is not any open positions.</p>';
		}
		/* Restore original Post Data */
		wp_reset_postdata();

	?>


</div>


<?php get_footer(); ?>
