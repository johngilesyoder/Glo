<?php
/**
 * Template Name: Projects
 */

get_header(); ?>

<div class="row">


	<?php

		$args = array(
			'post_type' => 'project',
		);

		// The Query
		$the_query = new WP_Query( $args );

		// The Loop
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();

			?>

				<a href="<?php the_permalink(); ?>" class="four columns post-link">

					<?php

						if ( has_post_thumbnail() ) { ?>
								<?php the_post_thumbnail(); ?>
						<?php
						}
						else {
							echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/under-construction.jpg" style="border: 1px solid #333;"/>';
						}
					?>

					<h2><?php the_title(); ?></h2>

					<span class="link-button">See More</span>

				</a>

			<?php
				
			}
		} else {
			// no posts found
		}
		/* Restore original Post Data */
		wp_reset_postdata();

	?>


</div>


<?php get_footer(); ?>
