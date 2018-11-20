<?php
/**
 * Template Name: Quote
 */
 get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php $post_id = get_the_ID(); ?>

		<div class="page-title">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h1><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
		</div>

	<main class="page-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="page-content" data-target="content">

						<?php gravity_form(1, false, false, false, '', true); ?>

					</div>
				</div>
			</div>
		</div>

		<!-- Map -->
		<?php get_template_part( 'inc/map' ); ?>

	</main>

<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>
