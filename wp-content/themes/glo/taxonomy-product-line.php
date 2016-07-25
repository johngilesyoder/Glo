<?php get_header(); ?>
<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>

	<main class="page-wrapper">

	  <div class="product-line">
	    <div class="product-line-hero">
	      <div class="product-line-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/product/<?php echo $term->slug; ?>.jpg');"></div>
	      <h2><?php single_term_title(); ?></h2>
	    </div>
	    <div class="container">

				<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<div class="product">
		        <div class="product-description">
		          <div class="product-excerpt">
		            <?php the_excerpt(); ?>
		          </div>
		          <a class="btn btn-primary" href="<?php the_permalink(); ?>">View <?php the_title(); ?> &nbsp;&rarr;</a>
		        </div>
		      </div>

				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>
			</div>
		</div>
	</main>

<?php get_footer(); ?>
