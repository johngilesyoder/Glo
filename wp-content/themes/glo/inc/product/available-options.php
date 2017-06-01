<div id="available-options" class="available-options">
  <div class="container-fluid">
    <h3>Available Options</h3>
    <div class="product-tabs">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs">
        <?php if( get_field('handles') ): ?>
          <li><a href="#handles" data-toggle="tab">Handles</a></li>
        <?php endif; ?>
        <?php if( get_field('colors') ): ?>
          <li><a href="#colors" data-toggle="tab">Colors</a></li>
        <?php endif; ?>
        <?php if( get_field('wood') ): ?>
          <li><a href="#wood" data-toggle="tab">Wood</a></li>
        <?php endif; ?>
        <?php if( get_field('obscure_glass') ): ?>
          <li><a href="#obscure-glass" data-toggle="tab">Obscure Glass</a></li>
        <?php endif; ?>
        <?php if( get_field('styles') ): ?>
          <li><a href="#styles" data-toggle="tab">Styles</a></li>
        <?php endif; ?>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <?php if( get_field('handles') ): ?>
          <div class="tab-pane fade" id="handles">
            <?php the_field('handles'); ?>
          </div>
        <?php endif; ?>
        <?php if( get_field('colors') ): ?>
          <div class="tab-pane fade" id="colors">
            <?php the_field('colors'); ?>
          </div>
        <?php endif; ?>
        <?php if( get_field('wood') ): ?>
          <div class="tab-pane fade" id="wood">
            <?php the_field('wood'); ?>
          </div>
        <?php endif; ?>
        <?php if( get_field('obscure_glass') ): ?>
          <div class="tab-pane fade" id="obscure-glass">
            <?php the_field('obscure_glass'); ?>
          </div>
        <?php endif; ?>
        <?php if( get_field('styles') ): ?>
          <div class="tab-pane fade" id="styles">
            <?php the_field('styles'); ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
