<?php
/**
 * The template for displaying all single posts.
 *
 * @package glo
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<?php $post_id = get_the_ID(); ?>
	
	<?php if ( has_post_thumbnail() ) { ?>

		<?php 
			$thumb = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
		?>
	
		<div class="hero">
			<h1><?php longName(); ?></h1>
			<img src="<?php echo $thumb; ?>">
		</div>

	<?php } else { ?>

		<div class="title-belt">
			<div class="row">
				<div class="twelve columns">
					<?php the_title( '<h1 class="entry">', '</h1>' ); ?> 
					
					<?php
						
						$terms = get_the_terms($post->ID, 'product-line');
						
						foreach ($terms as $taxindex => $taxitem) {
							echo '<p>' . $taxitem->name . '</p>';
						}
					
					?>
					
				</div>
			</div>
		</div>

	<?php } ?>

	<div class="row product-top content" data-target="product-top">
	
		<div class="one column"></div>

		<div class="three columns">
			<img src="<?php imageOne();?>"/>
		</div>

		<div class="one column"></div>

		<div class="three columns">
			<img src="<?php imageTwo();?>"/>
		</div>

		<div class="one column"></div>

		<div class="three columns">
			
			<div class="product-circle">
				<?php the_title(); ?> 
			</div>

			<div class="rvalue">
				<p>R-VALUE:</p> 
				<span><?php rvalue(); ?></span>
			</div>

		</div>
	
	</div>

	<div class="row content">
		<div class="twelve columns">
			<?php the_content(); ?>
			<div class="product-quote">
				<a href="#" class="switch quote-btn" gumby-trigger="#modal1">Request A Quote</a>
			</div>
		</div>
	</div>

	<div class="row content">
		<div class="twelve columns">
			
			<section class="tabs">

			    <ul class="tab-nav">
			        
			        <li class="active"><a href="#">Specs</a></li>

			        <?php if ( get_post_meta($post_id, 'wpcf-colors', true) != '' ) { ?>
			        	<li><a href="#">Colors</a></li>
			        <?php } ?>

			        <?php if ( get_post_meta($post_id, 'wpcf-wood', true) != '' ) { ?>
			        	<li><a href="#">Wood</a></li>
			        <?php } ?>

			        <?php if ( get_post_meta($post_id, 'wpcf-handles', true) != '' ) { ?>
				        <li><a href="#">Handles</a></li>
					<?php } ?>

					<?php if ( get_post_meta($post_id, 'wpcf-door-handles', true) != '' ) { ?>
				        <li><a href="#">Door Handles</a></li>
					<?php } ?>

					<?php if ( get_post_meta($post_id, 'wpcf-door-styles', true) != '' ) { ?>
			        	<li><a href="#">Door Styles</a></li>
			        <?php } ?>

			    </ul>

			    <div id="specs" class="tab-content active">
			        <?php theSpecs(); ?>
			    </div>

			    <?php if ( get_post_meta($post_id, 'wpcf-colors', true) != '' ) { ?>
		        	<div id="colors" class="tab-content">
				        <img src="<?php colorSwatches(); ?>">
				    </div>
			    <?php } ?>

			    
			    <?php if ( get_post_meta($post_id, 'wpcf-wood', true) != '' ) { ?>
				    <div id="wood" class="tab-content">
				        <img src="<?php woodSwatches(); ?>">
				    </div>
				<?php } ?>
			    
			    <?php if ( get_post_meta($post_id, 'wpcf-handles', true) != '' ) { ?>
				    <div id="handles" class="tab-content">
				        <img src="<?php handles(); ?>">
				    </div>
				<?php } ?>

				<?php if ( get_post_meta($post_id, 'wpcf-door-handles', true) != '' ) { ?>
				    <div id="doorhandles" class="tab-content">
				        <img src="<?php doorHandles(); ?>">
				    </div>
				<?php } ?>

				<?php if ( get_post_meta($post_id, 'wpcf-door-styles', true) != '' ) { ?>
				    <div id="doorstyles" class="tab-content">
				        <img src="<?php doorStyles(); ?>">
				    </div>
				<?php } ?>

			</section>

		</div>
	</div>

<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>
