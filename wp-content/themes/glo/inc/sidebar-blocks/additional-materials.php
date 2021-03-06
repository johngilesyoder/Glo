<?php
  get_queried_object()->term_id;
  $termID = get_queried_object()->term_id;
  $terms = apply_filters( 'taxonomy-images-get-terms', '', array(
    'taxonomy'       => 'frame-material',
    'having_images'  => false,
    'term_args'      => array(
      'taxonomy'       => 'frame-material',
      'hide_empty'     => false,
      'exclude'        => $termID
    )
  ) );
?>

<div class="sidebar-block-materials">
  <h3>Additional Frame Materials</h3>
  <div class="the-materials">
    <div class="row">
      <?php foreach ( (array) $terms as $term ) { ?>
        <div class="col-md-6">
          <a href="<?php echo esc_url( get_term_link( $term, $term->taxonomy ) ) ?>" class="single-material">
            <?php echo wp_get_attachment_image( $term->image_id ) ?>
            <span class="material-title"><?php echo $term->name; ?></span>
          </a>
        </div>
      <?php } ?>
    </div>
  </div>
</div>
