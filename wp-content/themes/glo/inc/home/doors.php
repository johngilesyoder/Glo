<?php $doors_photo = get_field('doors_photo'); ?>

<section class="home-doors">
  <div class="home-doors-img">
    <img src="<?php echo $doors_photo['url']; ?>">
  </div>
  <div class="story-section">
    <header>
      <h2 class="story-section-title"><?php the_field('doors_title'); ?></h2>
      <p class="story-section-summary">
        <?php the_field('doors_copy'); ?>
      </p>
      <div class="story-section-actions">
        <div class="action">
          <a href="/product-line/doors" class="btn btn-text">Explore our Doors</a>
        </div>
      </div>
    </header>
  </div>
</section>
