<?php
/**
 * Template Name: Calculator
 */

get_header(); ?>

<div class="page-title">
  <div class="container">
    <h1><?php the_title(); ?></h1>
  </div>
</div>

<main class="page-wrapper">
  <div class="container">
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
				<h1  style="text-align: center;"><strong><span style="font-size:16px;">{{ calc.equation }}</span><br><span style="color: #ee7624;">{{ 1 / calc.number}}</span></strong></h1>
			</form>
		</div>
    <div class="callouts">
      <div class="row">
        <div class="col-md-6">
          <a href="/projects" class="callout">
            <span class="callout-img" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/callout-projects.jpg);"></span>
            <span class="callout-content">
              <h4>Check out some real-world installations and examples</h4>
              <span class="callout-link">View Projects &rarr;</span>
            </span>
          </a>
        </div>
        <div class="col-md-6">
          <a href="/products" class="callout">
            <span class="callout-img" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/callout-products.jpg);"></span>
            <span class="callout-content">
              <h4>Explore our Window &amp; Door Series</h4>
              <span class="callout-link">View Series &rarr;</span>
            </span>
          </a>
        </div>
      </div>
    </div>
	</div>
</main>

<script src="//cdnjs.cloudflare.com/ajax/libs/vue/0.12.7/vue.min.js"></script>
<script type="text/javascript">
new Vue({
	el: '#calculator',
});
</script>

<?php get_footer(); ?>
