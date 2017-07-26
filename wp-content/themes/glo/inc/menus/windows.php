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
              <div class="img-wrapper">
                <?php echo wp_get_attachment_image( $term->image_id, 'full', "", ["class" => "img-window-style"] ) ?>
              </div>
              <span class="item-title"><?php echo $term->name; ?></span>
            </a>
          </li>
        <?php } ?>

      </ul>
    </div>

    <div id="by-window-material">
      <ul class="menu-items">

        <!-- <?php foreach ( (array) $terms_materials as $term ) { ?>
          <li class="menu-item">
            <a href="<?php echo esc_url( get_term_link( $term, $term->taxonomy ) ) ?>">
              <div class="img-wrapper">
                <?php echo wp_get_attachment_image( $term->image_id ) ?>
              </div>
              <span class="item-title"><?php echo $term->name; ?> Windows</span>
            </a>
          </li>
        <?php } ?> -->

        <li class="menu-item">
          <a href="/frame-material/aluminum/">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/material-aluminum.png" alt="Aluminum Windows"/>
            <span class="item-title">Aluminum Windows</span>
          </a>
        </li>
        <li class="menu-item">
          <a href="/frame-material/wood-aluminum/">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/material-wood-aluminum.png" alt="Wood Aluminum Windows"/>
            <span class="item-title">Wood Aluminum Windows</span>
          </a>
        </li>

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
