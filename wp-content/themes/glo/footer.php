			</div>
		</div>
		<!-- ./wrapper -->

		<footer>
			<div class="toTop">
				<a class="white-circle skip" gumby-goto="[data-target='top']">
					<i class="icon-up-open"></i>
				</a>
			</div>
			<div class="row">
				<div class="three columns">
					<?php dynamic_sidebar( 'footer-1' ); ?>
				</div>
				<div class="three columns">
					<?php dynamic_sidebar( 'footer-2' ); ?>
				</div>
				<div class="three columns">
					<?php dynamic_sidebar( 'footer-3' ); ?>
				</div>
				<div class="three columns">
					<h3>Follow Us</h3>
					<a href="https://www.facebook.com/glowindows" class="social-link" target="_blank"><i class="icon-facebook-circled"></i></a>
			    <a href="https://twitter.com/GloWindows" class="social-link" target="_blank"><i class="icon-twitter-circled"></i></a>
			    <a href="https://www.pinterest.com/GloWindows/" class="social-link" target="_blank"><i class="icon-pinterest-circled"></i></a>
			    <a href="#" class="social-link" target="_blank"><i class="icon-gplus-circled"></i></a>
			    <a href="http://www.houzz.com/pro/glowindows/glo-european-windows" class="social-link" target="_blank"><i class="icon-record"></i></a>
			    <p style="margin-top:10px;"><strong>Glo Windows</strong><br>1001 S 4th Street W, Suite 1<br>Missoula, Montana 59801</p>
			    <p>(406) 721-2741</p>
					<?php dynamic_sidebar( 'footer-4' ); ?>
				</div>
			</div>
		</footer>

		<div class="modal" id="modal1">
		  <div class="content">
		    <a class="close switch" gumby-trigger="|#modal1"><i class="icon-cancel" /></i></a>
		    <div class="row">
		      <div class="ten columns centered text-center">
		        <h2>Request A Quote</h2>
		        <?php echo do_shortcode( '[gravityform id="1" name="Request A Quote"]' ); ?>
		      </div>
		    </div>
		  </div>
		</div>

		<div class="mobile-nav-trigger">
			<i class="icon-menu"></i>
		</div>

		<div class="mobile-nav">
			<a class="close-nav" href="#"><i class="icon-cancel"></i></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</div>

		<?php wp_footer(); ?>

		<script type="text/javascript">
			$(function() {
		    //caches a jQuery object containing the header element
		    var header = $(".site-header");
		    $(window).scroll(function() {
		      var scroll = $(window).scrollTop();
		      if (scroll >= 100) {
		        header.addClass("slim-header");
		      } else {
		        header.removeClass("slim-header");
		      }
		    });
			});

		  $(window).scroll(function() {
		    if ($(this).scrollTop()>0)
		     {
		        $('.toBottom').fadeOut();
		     }
		    else
		     {
		      $('.toBottom').fadeIn();
		     }
			});

		  $(document).ready(function(){
		    $('.mobile-nav-trigger').click(function(){
		    	$(".mobile-nav").slideToggle();
		    });
		    $('.close-nav').click(function(){
		    	$(".mobile-nav").slideToggle();
		    });
			});
		</script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

		<script>
		  $(document).ready(function() {
		    $(".gallery").owlCarousel({
		      autoPlay : 3000,
			    stopOnHover : true,
			    navigation:false,
			    paginationSpeed : 1000,
			    goToFirstSpeed : 2000,
			    singleItem : true,
			    autoHeight : true,
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