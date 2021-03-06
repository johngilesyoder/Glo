<div class="product-tabs">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="active"><a href="#description" data-toggle="tab">Description</a></li>
    <?php if( get_field('styles') ): ?>
      <li><a href="#styles" data-toggle="tab">Frame Styles</a></li>
    <?php endif; ?>
    <?php if( get_field('door_panels') ): ?>
      <li><a href="#door-panels" data-toggle="tab">Door Panels</a></li>
    <?php endif; ?>
    <li><a href="#specs" data-toggle="tab">Specs</a></li>
    <?php if( get_field('detail_sets') ): ?>
      <li><a href="#detail-drawings" data-toggle="tab">Detail Drawings</a></li>
    <?php endif; ?>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div class="tab-pane fade active in" id="description">
      <div class="page-content description" data-target="content">
        <?php the_content(); ?>
      </div>
    </div>
    <?php if( get_field('styles') ): ?>
      <div class="tab-pane fade" id="styles">
        <?php the_field('styles'); ?>
      </div>
    <?php endif; ?>
    <?php if( get_field('door_panels') ): ?>
      <div class="tab-pane fade" id="door-panels">
        <?php the_field('door_panels'); ?>
      </div>
    <?php endif; ?>
    <div class="tab-pane fade" id="specs">
      <?php if( have_rows('specs') ): ?>
      	<ul>
      	<?php while( have_rows('specs') ): the_row();
      		// vars
      		$spec = get_sub_field('spec');
      		?>
      		<li>
      		    <?php echo $spec; ?>
      		</li>
      	<?php endwhile; ?>
      	</ul>
      <?php endif; ?>
    </div>
    <?php if( get_field('detail_sets') ): ?>
      <div class="tab-pane fade" id="detail-drawings">
        <?php the_field('detail_sets'); ?>
      </div>
    <?php endif; ?>
  </div>
</div>
