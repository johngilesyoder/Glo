<!doctype html>
<html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" <?php language_attributes(); ?>>
<head <?php do_action( 'add_head_attributes' ); ?>>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php gravity_form_enqueue_scripts( 1, true ); ?>
  <?php echo wp_head(); ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Typekit -->
  <script src="//use.typekit.net/cmt2uhr.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>

<body <?php body_class( $class ); ?>> 
	<div class="container">
		<div class="error-message">
			<h1>404</h1>
			<h2>Page not found :(</h2>
			<p>Unfortunately, we were unable to find that page or it does not exist.<br />Please <a href="/">return</a> to the home page.</p>
		</div>
		<div class="site-logo-wrapper">
			<!-- ==== Site Logo ==== -->
			<div class="site-logo">
				<a href="/" class="glo-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Site logo"/></a>
			</div>
		</div>
	</div>
</body>
</html>