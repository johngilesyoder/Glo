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
  <script>try{Typekit.load({ async: false });}catch(e){}</script>
</head>

<body <?php body_class( $class ); ?>>

  <header class="site-header">

    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="topbar-request-quote col-md-offset-6 col-md-6">
            <p>(406) 721-2741<a href="#" class="btn btn-primary btn-quote" data-toggle="modal" data-target="#quoteModal">Request A Quote</a></p>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php if (is_front_page()): ?>
            <h1 class="navbar-brand">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Site logo"/>
            </h1>
          <?php else: ?>
            <a class="navbar-brand" href="/">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Site logo"/>
            </a>
          <?php endif; ?>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
          <?php primary_nav(); ?>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

  </header>
