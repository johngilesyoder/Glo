<?php
  $terms_styles = apply_filters( 'taxonomy-images-get-terms', '', array(
    'taxonomy'       => 'window-style',
    'having_images'  => false,
    'term_args'      => array(
      'taxonomy'       => 'window-style',
      'hide_empty'     => false
    )
  ) );
?>

<div class="sidebar-block-styles">
  <h3>Operating Styles</h3>
  <div class="the-styles">
    <?php foreach ( (array) $terms_styles as $term ) { ?>
      <a href="<?php echo esc_url( get_term_link( $term, $term->taxonomy ) ) ?>" class="single-style">
        <?php echo wp_get_attachment_image( $term->image_id, 'full' ) ?>
        <span class="style-title"><?php echo $term->name; ?></span>
      </a>
    <?php } ?>
  </div>
</div>
