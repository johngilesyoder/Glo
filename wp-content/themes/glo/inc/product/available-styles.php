<?php
  $terms_materials = apply_filters( 'taxonomy-images-get-terms', '', array(
    'taxonomy'       => 'frame-material',
    'having_images'  => false,
    'term_args'      => array(
      'taxonomy'       => 'frame-material',
      'hide_empty'     => false
    )
  ) );
  if (has_term( 'windows', 'product-line' )) {
    $terms_styles = apply_filters( 'taxonomy-images-get-terms', '', array(
      'taxonomy'       => 'window-style',
      'having_images'  => false,
      'term_args'      => array(
        'taxonomy'       => 'window-style',
        'hide_empty'     => false
      )
    ) );
  } elseif (has_term( 'doors', 'product-line' )) {
    $terms_styles = apply_filters( 'taxonomy-images-get-terms', '', array(
      'taxonomy'       => 'door-style',
      'having_images'  => false,
      'term_args'      => array(
        'taxonomy'       => 'door-style',
        'hide_empty'     => false
      )
    ) );
  }
?>

<div class="available-styles">
  <div class="container-fluid">
    <header class="available-styles-header">
      <h3>Available Operating Styles</h3>
      <?php if( get_field('cross-pollination_link') ): ?>
        <a href="<?php the_field('cross-pollination_link'); ?>" class="cross-pollination-link"><?php the_field('cross-pollination_link_title'); ?></a>
      <?php endif; ?>
    </header>
    <ul class="operating-styles">
      <?php foreach ( (array) $terms_styles as $term ) { ?>
        <li class="menu-item">
          <a href="<?php echo esc_url( get_term_link( $term, $term->taxonomy ) ) ?>">
            <?php echo wp_get_attachment_image( $term->image_id, 'full', "", ["class" => "img-window-style"] ) ?>
            <span class="item-title"><?php echo $term->name; ?></span>
          </a>
        </li>
      <?php } ?>
    </ul>
  </div>
</div>
