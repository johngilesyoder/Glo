<a href="<?php the_permalink(); ?>" class="product-result">
  <div class="series-image" style="background-image: url('<?php the_post_thumbnail_url( full ); ?>');"></div>
  <span class="series-id">
    <?php
      $terms = get_the_terms( $post->ID , 'series' );
      foreach ( $terms as $term ) {
        echo $term->name;
      }
    ?>
  </span>
  <div class="series-text">
    <h3 class="series-title"><?php the_title(); ?></h3>
    <div class="series-description">
      <?php the_excerpt(); ?>
    </div>
  </div>
</a>
