<?php
/**
 * Template Name: Calculator
 */

get_header(); ?>

<div class="page-title">
  <div class="container-fluid">
    <h1><?php the_title(); ?></h1>
  </div>
</div>

<div class="page-summary">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="page-content">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<main class="page-wrapper">
  <div class="container-fluid">
		<div id="calculator" class="calculator">
			<form method="POST">
				<p>
				I want to calculate
				<select v-model="calc.equation" class="form-control">
					<option value="R-Value" selected="selected">R-Value</option>
					<option value="U-Value">U-Value</option>
				</select>
				and my
				<span v-if="calc.equation === 'R-Value'">
					U-Value
				</span>
				<span v-if="calc.equation === 'U-Value'">
					R-Value
				</span>
				is
				<input type="number" name="number" id="number" class="form-control" v-model="calc.number" value="1">
				</p>
				<h1>
          <strong>{{ calc.equation }}</strong>
          <span>{{ 1 / calc.number}}</span>
        </h1>
			</form>
		</div>
	</div>
  <div class="callouts">

    <?php get_template_part( 'inc/calculator/callouts' ); ?>
    
  </div>
</main>

<script src="//cdnjs.cloudflare.com/ajax/libs/vue/0.12.7/vue.min.js"></script>
<script type="text/javascript">
new Vue({
	el: '#calculator',
});
</script>

<?php get_footer(); ?>
