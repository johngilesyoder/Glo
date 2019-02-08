<?php
/**
 * The template for displaying all single posts.
 *
 * @package glo
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="page-title">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<a href="/blog" class="back-to-blog">&larr; Back to blog</a>
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
</div>

<main class="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="page-content">

					<?php the_content(); ?>

					<?php // comments_template(); ?>

				</div>
			</div>
		</div>
	</div>
</main>

<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>
