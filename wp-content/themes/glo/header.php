<!doctype html>
<html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" <?php language_attributes(); ?>>
<head <?php do_action( 'add_head_attributes' ); ?>>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php gravity_form_enqueue_scripts( 1, true ); ?>
  <?php echo wp_head(); ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

  <!-- Google Analytics -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-60401502-1', 'auto');
    ga('send', 'pageview');
  </script>
</head>

<body <?php body_class(); ?>>

  <header class="site-header">

    <?php get_template_part( 'inc/topbar' ); ?>

    <?php get_template_part( 'inc/covid-message' ); ?>

    <?php get_template_part( 'inc/primary-nav' ); ?>

  </header>
