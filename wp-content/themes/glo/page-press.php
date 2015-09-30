<?php
/**
 * Template Name: Press
 */

get_header(); ?>

<div class="row">


	<?php

		$args = array(
			'post_type' => 'press',
		);

		// The Query
		$the_query = new WP_Query( $args );

		// The Loop
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();

			?>

				<a href="<?php thePressURL(); ?>" class="four columns press-link" target="_blank">

					<?php echo get_the_post_thumbnail(); ?>

				</a>

			<?php
				
			}
		} else {
			// no posts found
			echo '<p>No Press.</p>';
		}
		/* Restore original Post Data */
		wp_reset_postdata();

	?>


</div>


<?php get_footer(); ?>
