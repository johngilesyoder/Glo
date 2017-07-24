<?php
  $terms_door_styles = apply_filters( 'taxonomy-images-get-terms', '', array(
    'taxonomy'       => 'door-style',
    'having_images'  => false,
    'term_args'      => array(
      'taxonomy'       => 'door-style',
      'hide_empty'     => false
    )
  ) );
?>

<div class="menu-wrapper menu-doors menu-visual">
  <div class="menu-left">

    <div id="by-door-style" class="is--visible">
      <ul class="menu-items">

        <?php foreach ( (array) $terms_door_styles as $term ) { ?>
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

    <div id="by-door-material">
      <ul class="menu-items">
        <li class="menu-item">
          <a href="/frame-material/aluminum/">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/material-aluminum-doors.png" alt="Aluminum Doors"/>
            <span class="item-title">Aluminum Doors</span>
          </a>
        </li>
        <li class="menu-item">
          <a href="/frame-material/wood-aluminum/">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/material-wood-aluminum-doors.png" alt="Wood Aluminum Doors"/>
            <span class="item-title">Wood Aluminum Doors</span>
          </a>
        </li>
      </ul>
    </div>

    <div class="menu-toggle">
      <button id="toggle-door-styles" class="btn-toggle is--current"><span>By</span> Door Style</button>
      <button id="toggle-door-materials" class="btn-toggle"><span>By</span> Frame Material</button>
    </div>
  </div>
  <div class="menu-right">
    <?php get_template_part( 'inc/menus/block' ); ?>
  </div>
</div>
