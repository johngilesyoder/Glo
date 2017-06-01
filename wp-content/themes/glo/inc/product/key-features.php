<div class="key-features">
  <h3>Key Features</h3>
  <?php if( have_rows('key_features') ): ?>
  	<ul>
  	<?php while( have_rows('key_features') ): the_row();
  		// vars
  		$key_feature = get_sub_field('key_feature');
  		?>
  		<li>
  		    <?php echo $key_feature; ?>
  		</li>
  	<?php endwhile; ?>
  	</ul>
  <?php endif; ?>
</div>
