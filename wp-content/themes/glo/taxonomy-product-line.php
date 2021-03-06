<?php
	get_header();
	get_queried_object()->term_id;
	$termID = get_queried_object()->term_id;
	$image_id = get_term_meta( $termID, 'category-image-id', true );
?>

<section class="hero-title">
  <div class="hero-bg" style="background-image:url('<?php echo wp_get_attachment_image_url( $image_id, 'full' ); ?>');"></div>
  <div class="hero-content">
    <h1><?php single_term_title(); ?></h1>
  </div>
</section>

<main class="page-wrapper">

  <div class="product-line">
    <div class="container-fluid">
			<div class="row">
				<div class="col-md-8">
					<!-- RESULTS -->
					<div class="product-results">

						<?php
							global $wp_query;
							query_posts(
								array_merge(
									 $wp_query->query,
									 array('orderby' => 'series','order' => 'ASC')
								)
							);
							if ( have_posts() ) : while ( have_posts() ) : the_post();
						?>

							<?php get_template_part( 'inc/product-result' ); ?>

						<?php endwhile; ?>

						<?php else : ?>

							<?php get_template_part( 'template-parts/content', 'none' ); ?>

						<?php endif; ?>

					</div>

					<!-- DESCRIPTION -->
					<div class="product-line-description">
						<?php echo term_description(); ?>
					</div>
				</div>
				<div class="col-md-4">
					<aside class="sidebar-product-line">
						<?php get_template_part( 'inc/sidebar-blocks/materials' ); ?>
						<?php
							if (is_tax( 'product-line', 'doors')) {
								get_template_part( 'inc/sidebar-blocks/additional-door-styles' );
							} elseif (is_tax( 'product-line', 'windows')) {
								get_template_part( 'inc/sidebar-blocks/additional-window-styles' );
							}
						?>
					</aside>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>
