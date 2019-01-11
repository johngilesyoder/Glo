<?php
/**
 * Template Name: Press
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
			'post_type' => 'press',
		);

		// The Query
		$the_query = new WP_Query( $args );

		// The Loop
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();

			?>
			
				<div class="col-md-4">
					<a href="<?php the_field('url'); ?>" class="press-link" target="_blank">

						<?php echo get_the_post_thumbnail(); ?>

					</a>
				</div>

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
</main>

<?php get_footer(); ?>