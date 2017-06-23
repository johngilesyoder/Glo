<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
<article class="col-sm-6 col-md-4">

  <?php if ( has_post_thumbnail() ) : ?>

  <a class="project-post" href="<?php the_permalink(); ?>">

  <?php else : ?>

  <a class="project-post no-img" href="<?php the_permalink(); ?>">

  <?php endif; ?>

    <span class="project-image" style="background-image:url('<?php echo $url; ?>');"></span>
    <span class="project-name">
      <h1 class="project-title"><?php the_title(); ?></h1>
    </span>
  </a>
</article>
