<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package glo
 */

get_header(); ?>

<!-- Google Code for Glo Contact Us Conversion Page -->

<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1012553782;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "AYCTCJiz1WkQtrDp4gM";
var google_remarketing_only = false;
/* ]]> */
</script>

<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>

<noscript>
	<div style="display:inline;">
		<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1012553782/?label=AYCTCJiz1WkQtrDp4gM&amp;guid=ON&amp;script=0"/>
	</div>
</noscript>

<?php while ( have_posts() ) : the_post(); ?>

	<?php $post_id = get_the_ID(); ?>

	<?php if ( has_post_thumbnail() ) : ?>

		<?php $thumb = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

		<div class="page-hero">
			<div class="page-hero-img" style="background-image: url('<?php echo $thumb; ?>');"></div>
			<h1><?php the_title(); ?></h1>
		</div>

	<?php else : ?>

		<div class="page-title">
			<div class="container">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>

	<?php endif; ?>

	<main class="page-wrapper">
		<div class="container">
			<div class="page-content" data-target="content">

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			</div>
		</div>
	</main>

<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>
