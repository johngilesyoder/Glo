<?php
  if (has_term( 'windows', 'product-line' )) {
    $terms = get_the_terms( $post->ID, 'window-style' );
  } elseif (has_term( 'doors', 'product-line' )) {
    $terms = get_the_terms( $post->ID, 'door-style' );
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
      <?php foreach ($terms as $term) { ?>
        <?php
        if (has_term( 'windows', 'product-line' )) {
          $styles = apply_filters( 'taxonomy-images-get-terms', '', array(
            'taxonomy' => 'window-style',
              'term_args' => array(
                'slug' => $term->slug,
              )
            )
          );
        } elseif (has_term( 'doors', 'product-line' )) {
          $styles = apply_filters( 'taxonomy-images-get-terms', '', array(
            'taxonomy' => 'door-style',
              'term_args' => array(
                'slug' => $term->slug,
              )
            )
          );
        }
        ?>
        <?php foreach( (array) $styles as $style) { ?>
          <li class="menu-item">
            <div class="item">
              <?php echo wp_get_attachment_image( $style->image_id, 'full', "", ["class" => "img-window-style"] ); ?>
              <span class="item-title"><?php echo $style->name; ?></span>
            </div>
          </li>
        <?php } ?>
      <?php } ?>
    </ul>
  </div>
</div>
