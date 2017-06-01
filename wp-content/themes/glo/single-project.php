<?php
/**
 * The template for displaying all single posts.
 *
 * @package glo
 */

get_header();

remove_shortcode('gallery');
add_shortcode('gallery', 'gallery_shortcode_lo');

function gallery_shortcode_lo($attr) {

}

?>

<!-- PROJECT GALLERY -->
<div class="project-carousel gallery is-hidden">
	<?php
		// helper function to return first regex match
		function get_match( $regex, $content ) {
		    preg_match($regex, $content, $matches);
		    return $matches[1];
		}
		// Extract the shortcode arguments from the $page or $post
		$shortcode_args = shortcode_parse_atts(get_match('/\[gallery\s(.*)\]/isU', $post->post_content));

		// get the ids specified in the shortcode call
		$ids = explode(",",$shortcode_args["ids"]);
		foreach ( $ids as $current_id ) {
			echo '<div>';
			echo '<img data-flickity-lazyload="' . wp_get_attachment_image_src( $current_id, "full", false)[0]. '" alt="' . get_post_meta($current_id, '_wp_attachment_image_alt', true) . '" />';
			echo '<a class="pinit-button-custom" data-pin-do="buttonPin" data-pin-save="true" href="https://www.pinterest.com/pin/create/button/?url=' . get_permalink() . '&media=' . wp_get_attachment_image_src( $current_id, "full", false)[0] . '"></a>';
			echo '</div>';
		}
	?>
</div>

<main class="page-wrapper">
	<div class="container-fluid">
		<div class="page-content">
		<?php while ( have_posts() ) : the_post(); ?>

			<a href="/projects" class="back-link">&larr; Back to Projects</a>

			<div class="page-title">
				<h1><?php the_title(); ?></h1>
			</div>

			<div class="row">
				<div class="col-md-8">
					<?php the_content(); ?>
				</div>
				<div class="col-md-4">
					<aside class="project-details">
						<?php if ( get_field('building_category') ) : ?>
							<div class="single-detail">
								<span class="detail-type">Building Category</span>
								<span class="detail-value"><?php the_field('building_category'); ?></span>
							</div>
						<?php endif; ?>
						<?php if ( get_field('series') ) : ?>
							<div class="single-detail">
								<span class="detail-type">Series</span>
								<span class="detail-value"><?php the_field('series'); ?></span>
							</div>
						<?php endif; ?>
						<?php if ( get_field('location') ) : ?>
							<div class="single-detail">
								<span class="detail-type">Location</span>
								<span class="detail-value"><?php the_field('location'); ?></span>
							</div>
						<?php endif; ?>
						<?php if ( get_field('completion_year') ) : ?>
							<div class="single-detail">
								<span class="detail-type">Completion</span>
								<span class="detail-value"><?php the_field('completion_year'); ?></span>
							</div>
						<?php endif; ?>
						<?php if ( get_field('project_teams') ) : ?>
							<div class="single-detail">
								<span class="detail-type">Project Team</span>
								<span class="detail-value"><?php the_field('project_teams'); ?></span>
							</div>
						<?php endif; ?>
					</aside>
				</div>
			</div>

		<?php endwhile; // End of the loop. ?>
		</div>
	</div>
</main>

<script>

		// show
		var $carousel = jQuery('.gallery').removeClass('is-hidden');
		// trigger redraw for transition
		$carousel[0].offsetHeight;
		// init Flickity
		$carousel.flickity({
			// options
		  cellAlign: 'center',
		  contain: true,
			initialIndex: 0,
			wrapAround: true,
			imagesLoaded: true,
			pageDots: false,
			setGallerySize: false,
			lazyLoad: 2
		});

		$carousel.addClass('flickity-loaded');

	</script>

<?php get_footer(); ?>
