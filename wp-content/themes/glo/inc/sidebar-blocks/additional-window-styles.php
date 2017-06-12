<?php
  get_queried_object()->term_id;
  $termID = get_queried_object()->term_id;
  $terms = apply_filters( 'taxonomy-images-get-terms', '', array(
    'taxonomy'       => 'window-style',
    'having_images'  => false,
    'term_args'      => array(
      'taxonomy'       => 'window-style',
      'hide_empty'     => false,
      'exclude'        => $termID
    )
  ) );
?>

<div class="sidebar-block-styles">
  <h3>Additional Styles</h3>
  <div class="the-styles">
    <?php foreach ( (array) $terms as $term ) { ?>
      <a href="<?php echo esc_url( get_term_link( $term, $term->taxonomy ) ) ?>" class="single-style">
        <?php echo wp_get_attachment_image( $term->image_id, 'full' ) ?>
        <span class="style-title"><?php echo $term->name; ?></span>
      </a>
    <?php } ?>
  </div>
</div>
