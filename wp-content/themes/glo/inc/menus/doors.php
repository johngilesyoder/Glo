<div class="menu-wrapper menu-doors menu-visual">
  <div class="menu-left">

    <div id="by-style" class="is--visible">
      <ul class="menu-items">
        <li class="menu-item">
          <a href="#">
            <i class="icon-fixed-windows"></i>
            <span class="item-title">Fixed Windows</span>
          </a>
        </li>
        <li class="menu-item">
          <a href="#">
            <i class="icon-tilt-turn-windows"></i>
            <span class="item-title">Tilt &amp; Turn Windows</span>
          </a>
        </li>
        <li class="menu-item">
          <a href="#">
            <i class="icon-french-windows"></i>
            <span class="item-title">French Windows</span>
          </a>
        </li>
        <li class="menu-item">
          <a href="#">
            <i class="icon-tilt-only-windows"></i>
            <span class="item-title">Tilt-only Windows</span>
          </a>
        </li>
        <li class="menu-item">
          <a href="#">
            <i class="icon-inward-opening-awning-windows"></i>
            <span class="item-title">Inward Opening Awning Windows</span>
          </a>
        </li>
        <li class="menu-item">
          <a href="#">
            <i class="icon-curtain-call-windows"></i>
            <span class="item-title">Curtain Wall Windows</span>
          </a>
        </li>
      </ul>
    </div>

    <div id="by-material">
      <ul class="menu-items">
        <li class="menu-item">
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/material-aluminum.png" alt="Aluminum Windows"/>
            <span class="item-title">Aluminum Windows</span>
          </a>
        </li>
        <li class="menu-item">
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/material-wood-aluminum.png" alt="Wood Aluminum Windows"/>
            <span class="item-title">Wood Aluminum Windows</span>
          </a>
        </li>
        <li class="menu-item">
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/material-wood.png" alt="Wood Windows"/>
            <span class="item-title">Wood Windows</span>
          </a>
        </li>
      </ul>
    </div>

    <div class="menu-toggle">
      <button id="toggle-styles" class="btn-toggle is--current"><span>By</span> Window Style</button>
      <button id="toggle-materials" class="btn-toggle"><span>By</span> Frame Material</button>
    </div>
  </div>
  <div class="menu-right">
    <?php get_template_part( 'inc/menus/block' ); ?>
  </div>
</div>
