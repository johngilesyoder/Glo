<?php
/**
 * Template Name: Blog
 */

get_header(); ?>

<div class="row">


	<?php

		$args = array(
			'post_type' => 'post',
		);

		// The Query
		$the_query = new WP_Query( $args );

		// The Loop
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();

				$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

			?>

				<a href="<?php the_permalink(); ?>" class="four columns post-link">

					<div class="image" style="background:url('<?php echo $url; ?>'); background-position: center; background-size: cover;">
						
					</div>

					<h2><?php the_title(); ?></h2>

					<span class="link-button">Read More</span>

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
