<?php get_header(); ?>
<?php
	$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
	$term1 =	$wp_query->queried_object;
	$term2 = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

	// GET CATEGORY ROOT NAME
	$term_id = get_queried_object()->term_id; //Get ID of current term
	$ancestors = get_ancestors( $term_id, 'product-line' ); // Get a list of ancestors
	$ancestors = array_reverse($ancestors); //Reverse the array to put the top level ancestor first
	$ancestors[0] ? $top_term_id = $ancestors[0] : $top_term_id = $term_id; //Check if there is an ancestor, else use id of current term
	$term3 = get_term( $top_term_id, 'product-line' ); //Get the term

?>

	<main class="page-wrapper">

	  <div class="product-line">
	    <div class="product-line-hero">
	      <div class="product-line-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/product/<?php echo $term->slug; ?>.jpg');"></div>
	      <h2><?php single_term_title(); ?></h2>
	    </div>
	    <div class="container">
				<?php echo '<p class="product-line-description">'.$term1->description.'</p>'; ?>
				<div class="row">
						<div class="col-md-3">
							<div class="subcategories">
								<h4><?php echo $term3->name; ?></h4>
								<ul>
								  <?php wp_list_categories('child_of='.$term3->term_id.'&title_li=&taxonomy=product-line&hide_empty=0'); ?>
								</ul>
							</div>
						</div>
						<div class="col-md-9">
						<?php if ( have_posts() ) : ?>
							<div class="row">
						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>
								<div class="col-sm-6">
									<figure class="product-block effect-sarah">
										<div class="product-img" style="background-image:url('<?php the_post_thumbnail_url( full ); ?>')"></div>
										<figcaption>
											<h2><?php the_title(); ?></h2>
											<p>
												<span class="view-more">Find out more &rarr;</span>
											</p>
											<a href="<?php the_permalink(); ?>">View more</a>
										</figcaption>
									</figure>
								</div>

						<?php endwhile; ?>

						<?php the_posts_navigation(); ?>

					<?php else : ?>

						<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

<?php get_footer(); ?>
