<?php
  $terms_materials = apply_filters( 'taxonomy-images-get-terms', '', array(
    'taxonomy'       => 'frame-material',
    'having_images'  => false,
    'term_args'      => array(
      'taxonomy'       => 'frame-material',
      'hide_empty'     => false
    )
  ) );
  $terms_window_styles = apply_filters( 'taxonomy-images-get-terms', '', array(
    'taxonomy'       => 'window-style',
    'having_images'  => false,
    'term_args'      => array(
      'taxonomy'       => 'window-style',
      'hide_empty'     => false
    )
  ) );
?>


<div class="menu-wrapper menu-windows menu-visual">
  <div class="menu-left">

    <div id="by-window-style" class="is--visible">
      <ul class="menu-items">

        <?php foreach ( (array) $terms_window_styles as $term ) { ?>
          <li class="menu-item">
            <a href="<?php echo esc_url( get_term_link( $term, $term->taxonomy ) ) ?>">
              <?php echo wp_get_attachment_image( $term->image_id, 'full', "", ["class" => "img-window-style"] ) ?>
              <span class="item-title"><?php echo $term->name; ?></span>
            </a>
          </li>
        <?php } ?>

      </ul>
    </div>

    <div id="by-window-material">
      <ul class="menu-items">

        <?php foreach ( (array) $terms_materials as $term ) { ?>
          <li class="menu-item">
            <a href="<?php echo esc_url( get_term_link( $term, $term->taxonomy ) ) ?>">
              <?php echo wp_get_attachment_image( $term->image_id ) ?>
              <span class="item-title"><?php echo $term->name; ?> Windows</span>
            </a>
          </li>
        <?php } ?>

      </ul>
    </div>

    <div class="menu-toggle">
      <button id="toggle-window-styles" class="btn-toggle is--current"><span>By</span> Window Style</button>
      <button id="toggle-window-materials" class="btn-toggle"><span>By</span> Frame Material</button>
    </div>
  </div>
  <div class="menu-right">
    <?php get_template_part( 'inc/menus/block' ); ?>
  </div>
</div>
