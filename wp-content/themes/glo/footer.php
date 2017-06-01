		<!-- Request a quote -->
		<?php if(
			is_post_type_archive( 'project' ) ||
			is_singular( 'project' ) ||
			is_page_template( 'page-about.php') ||
			is_singular( 'product') ||
			is_page_template( 'page-calculator.php' ) ) : ?>

			<?php get_template_part( 'inc/footer-callouts/glo-advantage' ); ?>

		<?php else : ?>

			<?php get_template_part( 'inc/footer-callouts/request-quote' ); ?>

		<?php endif; ?>

		<footer class="site-footer">
			<div class="footer-main">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-1 col-md-offset-1">
							<img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white.png" alt="Glo Windows">
						</div>
						<div class="col-md-2 col-md-offset-1">
							<div class="footer-column">
								<?php footer_links_1(); ?>
							</div>
						</div>
						<div class="col-md-2">
							<div class="footer-column">
								<?php footer_links_2(); ?>
							</div>
						</div>
						<div class="col-md-3 col-md-offset-1">
							<div class="footer-column">
								<h3>Keep Up With News &amp; Offerings</h3>
						    <p class="footer-contact">
						    	<a href="mailto:hello@glowindows.com">hello@glowindows.com</a>
						    	<span class="phone-number">(406) 721-2741</span>
									<a href="/contact-us">Contact Us</a>
						    </p>
								<div class="footer-social-links">
									<a href="https://www.facebook.com/glowindows" class="social-link" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.svg"></a>
							    <a href="https://twitter.com/GloWindows" class="social-link" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter.svg"></a>
							    <a href="https://www.pinterest.com/GloWindows/" class="social-link" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pinterest.svg"></a>
							    <a href="https://plus.google.com/b/114099422635558267853/114099422635558267853/posts/p/pub" class="social-link" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/googleplus.svg"></a>
							    <a href="http://www.houzz.com/pro/glowindows/glo-european-windows" class="social-link" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/houzz.svg"></a>
						    </div>
								<a href="/dealer-portal" class="btn btn-dealer btn-outline">Dealer Portal</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-company">
				&copy; <?php echo date('Y'); ?> Glo European Windows, Inc. All rights reserved.
			</div>
		</footer>

		<?php wp_footer(); ?>

		<!-- SCRIPTS -->
		<script async defer src="//assets.pinterest.com/js/pinit.js"></script>
		<script>
		  jQuery(document).ready(function() {
		    jQuery('.gallery').flickity({
		      // options
		      wrapAround: true,
		      autoPlay: true,
		      imagesLoaded: true,
		      percentPosition: true,
		      cellSelector: '.gallery-item',
		      setGallerySize: false
		    });
		  });
		</script>

  </body>
</html>
