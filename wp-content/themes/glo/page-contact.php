<?php
/**
 * Template Name: Contact
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

						<div class="row">
							<div class="col-md-6">
							<h4>Address</h4>
							<address>1001 S 4th St West, Suite 1<br>
								Missoula, MT 59801</address>
							</div>
							<div class="col-md-6">
								<h4>Phone</h4>
								+1 (406) 721-2741
							</div>
						</div>

						<?php gravity_form( 3, false, false, false, '', false ); ?>

					</div>
				</div>
			</div>
		</div>

		<!-- Map -->
		<?php get_template_part( 'inc/map' ); ?>
		
	</main>

<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>
