<!doctype html>
<html class="no-js" {{ language_attributes() }}>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php echo wp_head(); ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/owl/owl.carousel.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/owl/owl.theme.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  
  <!-- Typekit -->
  <script src="//use.typekit.net/cmt2uhr.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>

<body <?php body_class( $class ); ?>> 

  <header class="site-header">

    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="topbar-request-quote col-md-offset-6 col-md-6">
            <p>(406) 721-2741<a href="#" class="btn btn-primary btn-quote" gumby-trigger="#modal1">Request A Quote</a></p>
          </div>
        </div>
      </div>
    </div>

    <nav class="site-header navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png">
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
          <?php primary_nav(); ?>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

  </header>