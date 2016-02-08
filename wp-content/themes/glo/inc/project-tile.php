<article class="col-md-4">

  <?php if ( has_post_thumbnail() ) : ?>
  
  <a class="project-post" href="<?php the_permalink(); ?>">
  
  <?php else : ?>

  <a class="project-post no-img" href="<?php the_permalink(); ?>">

  <?php endif; ?>
  
    <div class="post-image" style="background-image:url('<?php echo $url; ?>');"></div>
    <h1 class="post-title"><?php the_title(); ?></h1>
    <span class="view-more">View More &nbsp;&rarr;</span>
  </a>
</article>