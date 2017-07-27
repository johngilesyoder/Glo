<?php
	get_header();
	get_queried_object()->term_id;
	$termID = get_queried_object()->term_id;
	$image_id = get_term_meta( $termID, 'category-image-id', true );
?>

<section class="hero-title">
  <div class="hero-bg" style="background-image:url('<?php echo wp_get_attachment_image_url( $image_id, 'full' ); ?>');"></div>
  <div class="hero-content">
    <h1><?php single_term_title(); ?> Windows &amp; Doors</h1>
  </div>
</section>

<main class="page-wrapper">

  <div class="product-line">
    <div class="container-fluid">
			<div class="row">
				<div class="col-md-8">
					<!-- DESCRIPTION -->
					<div class="product-line-description">
						<?php echo term_description(); ?>
					</div>
					<!-- WINDOW RESULTS -->
					<?php
						global $wp_query;
						$windows_args = array_merge( $wp_query->query, array(
								 'orderby' => 'series',
								 'order' => 'ASC',
								 'tax_query' => array(
									 array(
										 'taxonomy' => 'product-line',
										 'field'    => 'slug',
										 'terms'    => 'windows',
									 ),
								 ),
							 )
						);

						$windows_loop = new WP_Query( $windows_args );

						if ( $windows_loop->have_posts() ) : ?>

						<div class="product-results">
							<h3 class="results-title"><?php single_term_title(); ?> Windows</h3>

						<?php while ( $windows_loop->have_posts() ) : $windows_loop->the_post(); ?>

						<?php get_template_part( 'inc/product-result' ); ?>

					<?php endwhile; ?>

						</div>

					<?php endif; ?>

					<?php wp_reset_query(); ?>

					<!-- DOOR RESULTS -->
					<?php
						global $wp_query;
						$doors_args = array_merge( $wp_query->query, array(
								 'orderby' => 'series',
								 'order' => 'ASC',
								 'tax_query' => array(
									 array(
										 'taxonomy' => 'product-line',
										 'field'    => 'slug',
										 'terms'    => 'doors',
									 ),
								 ),
							 )
						);

						$doors_loop = new WP_Query( $doors_args );

						if ( $doors_loop->have_posts() ) : ?>

						<div class="product-results">
							<h3 class="results-title"><?php single_term_title(); ?> Doors</h3>

						<?php while ( $doors_loop->have_posts() ) : $doors_loop->the_post(); ?>

						<?php get_template_part( 'inc/product-result' ); ?>

					<?php endwhile; ?>

						</div>

					<?php endif; ?>

					<?php wp_reset_query(); ?>

				</div>
				<div class="col-md-4">
					<aside class="sidebar-product-line">
						<?php get_template_part( 'inc/sidebar-blocks/request-quote' ); ?>
						<?php get_template_part( 'inc/sidebar-blocks/additional-materials' ); ?>
					</aside>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>
