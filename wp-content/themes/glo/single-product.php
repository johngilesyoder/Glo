<?php
/**
 * The template for displaying all single products.
 *
 * @package glo
 */

get_header();
$thumb = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>

<section class="hero-title">
  <div class="hero-bg" style="background-image:url('<?php echo $thumb; ?>');"></div>
  <div class="hero-content">
		<?php
			//Do something if a specific array value exists within a post
			$term_list = wp_get_post_terms($post->ID, 'series', array("fields" => "all"));
			foreach($term_list as $term_single) {
		?>
			<span class="series-name"><?php echo $term_single->slug; ?></span>
		<?php
			}
		?>
    <h1><?php the_title(); ?></h1>
		<a href="/request-a-quote" class="btn btn-primary btn-quote">Request a quote</a>
  </div>
</section>


<?php while ( have_posts() ) : the_post(); ?>

<?php $post_id = get_the_ID(); ?>

<main class="page-wrapper">

	<!-- PRODUCT TOP -->
	<!-- ======================= -->
	<div class="product-top">

		<!-- KEY FEATURES -->
		<?php get_template_part( 'inc/product/key-features' ); ?>

		<!-- R VALUE -->
		<?php get_template_part( 'inc/product/r-value' ); ?>

		<!-- MARKETING BLOCK -->
		<?php get_template_part( 'inc/product/marketing-block' ); ?>

	</div>

	<div class="product-middle">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4">

					<!-- GALLERY -->
					<?php get_template_part( 'inc/product/gallery' ); ?>

				</div>
				<div class="col-md-8">

					<!-- TABS -->
					<?php get_template_part( 'inc/product/tabs' ); ?>

				</div>
			</div>
		</div>
	</div>

  <?php get_template_part( 'inc/product/available-styles' ); ?>

  <?php get_template_part( 'inc/product/available-options' ); ?>

  <?php get_template_part( 'inc/product/related-projects' ); ?>

	<?php endwhile; // End of the loop. ?>

</main>

<?php get_footer(); ?>
