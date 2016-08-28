<?php
/**
 * The template for displaying all single products.
 *
 * @package glo
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php $post_id = get_the_ID(); ?>

	<?php if ( has_post_thumbnail() ) : ?>

		<?php $thumb = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

		<div class="page-hero">
			<div class="page-hero-img" style="background-image: url('<?php echo $thumb; ?>');"></div>
			<h1><?php longName(); ?></h1>
		</div>

	<?php else : ?>

		<div class="page-title">
			<div class="container">
				<h1><?php longName(); ?></h1>
			</div>
		</div>

	<?php endif; ?>

<main class="page-wrapper">
	<div class="container">
		<div class="row product-top content" data-target="product-top">
			<div class="col-md-3 col-md-offset-1 product-image">
				<img src="<?php imageOne();?>"/>
			</div>
			<div class="col-md-3 col-md-offset-1 product-image">
				<img src="<?php imageTwo();?>"/>
			</div>
			<div class="col-md-3 col-md-offset-1 product-meta">
				<div class="rvalue">
					<p>R-VALUE:</p>
					<span><?php rvalue(); ?></span>
				</div>
			</div>
		</div>
		<div class="page-content">
			<?php the_content(); ?>
		</div>
		<div class="product-quote">
			<a href="#" class="switch quote-btn" data-toggle="modal" data-target="#quoteModal">Request A Quote</a>
		</div>

		<section class="product-tabs">
			<!-- Nav tabs -->
	    <ul class="nav nav-tabs">

			<?php if ( get_post_meta($post_id, 'wpcf-door-styles', true) != '' ) : ?>

	    	<li class="active"><a href="#door-styles" data-toggle="tab">Door Styles</a></li>

	    	<?php if ( get_post_meta($post_id, 'wpcf-colors', true) != '' ) : ?>

		    	<li><a href="#colors" data-toggle="tab">Colors</a></li>

	    	<?php endif; ?>

	      <?php else : ?>

	    	<?php if ( get_post_meta($post_id, 'wpcf-colors', true) != '' ) : ?>

	    		<li class="active"><a href="#colors" data-toggle="tab">Colors</a></li>

	    	<?php endif; ?>

			<?php endif; ?>

			<?php if ( get_post_meta($post_id, 'wpcf-window-styles', true) != '' ) : ?>

    		<li><a href="#window-styles" data-toggle="tab">Window Styles</a></li>

			<?php endif; ?>

      <?php if ( get_post_meta($post_id, 'wpcf-wood', true) != '' ) { ?>
      	<li><a href="#wood" data-toggle="tab">Wood</a></li>
      <?php } ?>

      <?php if ( get_post_meta($post_id, 'wpcf-handles', true) != '' ) { ?>
        <li><a href="#window-handles" data-toggle="tab">Window Handles</a></li>
			<?php } ?>

			<?php if ( get_post_meta($post_id, 'wpcf-door-handles', true) != '' ) { ?>
		  	<li><a href="#door-handles" data-toggle="tab">Door Handles</a></li>
			<?php } ?>

			<li><a href="#specs" data-toggle="tab">Specs</a></li>

	    </ul>

	    <!-- Tab panes -->
	    <div class="tab-content">

  			<?php if ( get_post_meta($post_id, 'wpcf-door-styles', true) != '' ) : ?>

  	    <div id="door-styles" class="tab-pane fade in active">
  	      <img src="<?php doorStyles(); ?>">
  	    </div>

		    <?php if ( get_post_meta($post_id, 'wpcf-colors', true) != '' ) : ?>

        <div id="colors" class="tab-pane fade">
		      <img src="<?php colorSwatches(); ?>">
		    </div>

		    <?php endif; ?>

  			<?php else : ?>

  			<div id="colors" class="tab-pane fade in active">
		      <img src="<?php colorSwatches(); ?>">
		    </div>

  			<?php endif; ?>

				<?php if ( get_post_meta($post_id, 'wpcf-window-styles', true) != '' ) : ?>

	  	    <div id="door-styles" class="tab-pane fade">
	  	      <img src="<?php windowStyles(); ?>">
	  	    </div>

				<?php endif; ?>

			  <?php if ( get_post_meta($post_id, 'wpcf-wood', true) != '' ) { ?>
		    <div id="wood" class="tab-pane fade">
		    	<img src="<?php woodSwatches(); ?>">
		    </div>
				<?php } ?>

		    <?php if ( get_post_meta($post_id, 'wpcf-handles', true) != '' ) { ?>
		    <div id="window-handles" class="tab-pane fade">
		    	<img src="<?php handles(); ?>">
		    </div>
				<?php } ?>

				<?php if ( get_post_meta($post_id, 'wpcf-door-handles', true) != '' ) { ?>
		    <div id="door-handles" class="tab-pane fade">
		      <img src="<?php doorHandles(); ?>">
		    </div>
				<?php } ?>

				<div id="specs" class="tab-pane fade">
					<?php theSpecs(); ?>
	    	</div>

			</div>

			</div>
		</section>

	<?php endwhile; // End of the loop. ?>

	</div>
</main>

<?php get_footer(); ?>
