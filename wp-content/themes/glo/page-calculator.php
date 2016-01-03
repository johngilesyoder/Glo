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
		<div id="calculator">
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
	</div>
</main>

<script src="http://cdnjs.cloudflare.com/ajax/libs/vue/0.12.7/vue.min.js"></script>
<script type="text/javascript">	
new Vue({
	el: '#calculator',
});
</script>

<?php get_footer(); ?>