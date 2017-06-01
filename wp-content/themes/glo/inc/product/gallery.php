<div class="product-gallery">
  <!-- Flickity HTML init -->
  <?php if( have_rows('product_images') ): ?>

  	<div class="carousel carousel-main" data-flickity='{"pageDots": false, "prevNextButtons": false}'>

  	<?php while( have_rows('product_images') ): the_row();

  		// vars
  		$image = get_sub_field('product_image');

  		?>

  		<div class="carousel-cell">

  			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

  		</div>

  	<?php endwhile; ?>

    </div>

  <?php endif; ?>




  <?php if( have_rows('product_images') ): ?>

  	<div class="carousel carousel-nav" data-flickity='{ "asNavFor": ".carousel-main", "contain": true, "pageDots": false }'>

  	<?php while( have_rows('product_images') ): the_row();

  		// vars
  		$image = get_sub_field('product_image');

  		?>

  		<div class="carousel-cell">

  			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

  		</div>

  	<?php endwhile; ?>

    </div>

  <?php endif; ?>

</div>
