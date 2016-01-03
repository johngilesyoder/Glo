<?php /** * Template Name: Products */ 

get_header(); ?>

<div class="page-title">
  <div class="container">
    <h1><?php the_title(); ?></h1>
  </div>
</div>

<main class="page-wrapper">

  <?php
  	$args = array(
  		'orderby'    => 'term_id',
  		'hide_empty' => 0,
  	);
  	$terms = get_terms( 'product-line', $args );
  	if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
  	  foreach ( $terms as $term ) {
  ?>
  <div class="product-line">
  	<div class="product-line-hero">
      <div class="product-line-img" style="background-image:url('http://placehold.it/1200x600'); background-position: center; background-size: cover;"></div>
      <h2><?php echo $term->name; ?></h2>
  	</div>
  	<div class="product-description">
			<div class="container">
				<div class="product-circles">
		      <?php query_posts( array( 'product-line' =>  $term->name) ); ?>
					<?php if( is_tax() ) {
					    global $wp_query;
					    $object = $wp_query->get_queried_object();
					    $title = $object->name;
						}  
					?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<!-- <a href="<?php the_permalink() ?>" rel="bookmark" class="product-link"><?php the_title(); ?></a> -->
					<div class="product-description">
						<?php the_excerpt(); ?>
						<a class="btn-link" href="<?php the_permalink(); ?>">View <?php the_title(); ?></a>
					</div>
					<?php endwhile; else: ?>
					<?php endif; ?>
				</div>
				<?php echo $term->description; ?>
			</div>
		</div>
  </div>

  	<?php       
  		}
  	?>

  <?php
  	}
  ?>

</main>

<?php get_footer(); ?>