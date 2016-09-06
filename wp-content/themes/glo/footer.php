		<footer class="site-footer">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-3">
						<div class="footer-column">
							<?php dynamic_sidebar( 'footer-1' ); ?>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="footer-column">
							<?php dynamic_sidebar( 'footer-2' ); ?>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="footer-column">
							<?php dynamic_sidebar( 'footer-3' ); ?>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="footer-column">
							<h3>Connect</h3>
							<div class="footer-social-links">
								<a href="https://www.facebook.com/glowindows" class="social-link" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.svg"></a>
						    <a href="https://twitter.com/GloWindows" class="social-link" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter.svg"></a>
						    <a href="https://www.pinterest.com/GloWindows/" class="social-link" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pinterest.svg"></a>
						    <a href="https://plus.google.com/b/114099422635558267853/114099422635558267853/posts/p/pub" class="social-link" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/googleplus.svg"></a>
						    <a href="http://www.houzz.com/pro/glowindows/glo-european-windows" class="social-link" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/houzz.svg"></a>
					    </div>
					    <p><strong>Glo Windows</strong><br>1001 S 4th Street W, Suite 1<br>Missoula, Montana 59801</p>
					    <p>
					    	<a href="mailto:hello@glowindows.com">hello@glowindows.com</a><br>
					    	(406) 721-2741<br>
								<a href="/contact-us">Contact Us</a>
					    </p>
							<?php dynamic_sidebar( 'footer-4' ); ?>
						</div>
					</div>
				</div>
				<div class="footer-company">
					&copy; <?php echo date('Y'); ?> Glo European Windows, Inc. All rights reserved.
				</div>
			</div>
		</footer>

		<?php wp_footer(); ?>

		<!-- SCRIPTS -->

		<script>
		  jQuery(document).ready(function() {
		    // jQuery(".gallery").owlCarousel({
		    //   autoPlay : 3000,
			   //  stopOnHover : true,
			   //  navigation:false,
			   //  paginationSpeed : 1000,
			   //  goToFirstSpeed : 2000,
			   //  singleItem : true,
			   //  autoHeight : true,
		    // 	});
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



		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-60401502-1', 'auto');
		  ga('send', 'pageview');
		</script>

  </body>
</html>
