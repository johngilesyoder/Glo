<?php
/**
 * Template Name: Calculator
 */

get_header(); ?>

<style type="text/css">

#calculator p {font-size: 30px;}
	
select {
   background: transparent;
   width: auto;
   padding: 5px;
   font-size: 30px;
   line-height: 1;
   border: 0;
   border-radius: 0;
   height: 34px;
   -webkit-appearance: none;
   color: #ee7624;
 }

 input {
   background: transparent;
   width: 120px;
   padding: 5px;
   font-size: 30px;
   line-height: 1;
   border: 0;
   border-radius: 0;
   -webkit-appearance: none;
   color: #ee7624;
   transition: .3s linear all;
 }

 input:focus {
 	outline: none;
 	background-color: #f2f2f2;
 }

 .styled-select {
   display: inline-block;
   width: 140px;
   height: 34px;
   overflow: hidden;
   border: 1px solid #ccc;
 }


</style>

		<div class="title-belt">
			<div class="row">
				<div class="twelve columns">
					<h1 class="entry">Calculator</h1> 					
				</div>
			</div>
		</div>

		<div class="row">
				<div id="calculator" class="twelve columns">


					<form method="POST">


							<p style="text-align: center;">

							I want to calculate 

							<select v-model="calc.equation">
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

		<script src="http://cdnjs.cloudflare.com/ajax/libs/vue/0.12.7/vue.min.js"></script>

		<script type="text/javascript">
			
		new Vue({

			el: '#calculator',

		});

		</script>


<?php get_footer(); ?>
