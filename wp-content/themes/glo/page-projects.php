<?php
/**
 * Template Name: Projects
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

			$args = array(
				'post_type' => 'project',
			);

			// The Query
			$the_query = new WP_Query( $args );

			// The Loop
			if ( $the_query->have_posts() ) {
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

				?>

					<article class="col-md-4">

						<?php if ( has_post_thumbnail() ) : ?>
						
						<a class="project-post" href="<?php the_permalink(); ?>">
						
						<?php else : ?>

						<a class="project-post no-img" href="<?php the_permalink(); ?>">

						<?php endif; ?>
						
							<div class="post-image" style="background-image:url('<?php echo $url; ?>');"></div>
							<h1 class="post-title"><?php the_title(); ?></h1>
							<span class="view-more">View More &nbsp;&rarr;</span>
						</a>
					</article>

				<?php
					
				}
			} else {
				// no posts found
			}
			/* Restore original Post Data */
			wp_reset_postdata();

		?>

		</div>
	</div>
</main>

<?php get_footer(); ?>
