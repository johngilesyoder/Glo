<?php
/**
 * Template Name: Projects
 */

get_header(); ?>

<div class="page-title">
	<div class="container-fluid">
		<h1><?php the_title(); ?></h1>
	</div>
</div>

<?php while ( have_posts() ) : the_post(); ?>
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
<?php endwhile; ?>

<main class="page-wrapper">
	<div class="container-fluid">
		<div class="row">
		<?php
		global $wp_query;
		$paged = get_query_var('paged') ? get_query_var('paged') : 1;
		$args = array(
			'post_type' => 'project',
			'posts_per_page' => 15,
			'paged' => $paged
		);
		$wp_query = new WP_Query($args);

		while ( $wp_query->have_posts() ) : $wp_query->the_post();

		$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

		get_template_part( 'inc/project-tile'); ?>

		<?php endwhile; ?>

 		<?php the_posts_pagination( ); ?>
		</div>
	</div>
</main>

<?php get_footer(); ?>
