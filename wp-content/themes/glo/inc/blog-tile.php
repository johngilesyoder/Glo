<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
<article class="col-md-4">
  <a class="blog-post" href="<?php the_permalink(); ?>">
    <div class="post-image" style="background-image:url('<?php echo $url; ?>');"></div>
    <h1 class="post-title"><?php the_title(); ?></h1>
    <span class="read-more">Read More &nbsp;&rarr;</span>
  </a>
</article>