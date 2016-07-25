<?php get_header(); ?>
<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>

	<main class="page-wrapper">

	  <div class="product-line">
	    <div class="product-line-hero">
	      <div class="product-line-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/product/<?php echo $term->slug; ?>.jpg');"></div>
	      <h2><?php single_term_title(); ?></h2>
	    </div>
	    <div class="container">
				<?php
					// the taxonomy archive term page's term id
					$queried_object = get_queried_object();
					$term_id = $queried_object->term_id;

					$list_child_terms_args = array(
					    'taxonomy' => 'product-line',
					    'use_desc_for_title' => 0, // best practice: don't use title attributes ever
					    'child_of' => $term_id // show only child terms of the current page's
					);
					?>
					<ul>
					  <?php wp_list_categories( $list_child_terms_args ); ?>
					</ul>

					<?php
					$term = get_queried_object();

					$children = get_terms( $term->taxonomy, array(
					'parent'    => $term->term_id,
					'hide_empty' => false
					) );
					//print_r($children); // uncomment to examine for debugging
					if($children) { // get_terms will return false if tax does not exist or term wasn't found.
					    // term has children
							echo "HAS CHILDREN";
					} else {
						echo "NO CHILDREN";
					}
					?>

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
