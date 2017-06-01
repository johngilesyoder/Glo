<nav class="navbar navbar-default">
  <div class="container-fluid">
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
      <div class="navbar-quote">
        <a href="/request-a-quote" class="btn btn-request-quote">Request a quote</a>
      </div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="menu-dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><span>Windows <i class="zmdi"></i></span></a>
          <div class="dropdown-menu">
            <?php get_template_part( 'inc/menus/windows' ); ?>
          </div>
        </li>
        <li class="menu-dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><span>Doors <i class="zmdi"></i></span></a>
          <div class="dropdown-menu">
            <?php get_template_part( 'inc/menus/doors' ); ?>
          </div>
        </li>
        <li><a href="/projects"><span>Portfolio</a></li>
        <li class="menu-dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><span>Learn <i class="zmdi"></i></span></a>
          <div class="dropdown-menu">
            <?php get_template_part( 'inc/menus/learn' ); ?>
          </div>
        </li>
        <li><a href="#"><span>Service</span></a></li>
        <li><a href="/blog"><span>Blog</span></a></li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
