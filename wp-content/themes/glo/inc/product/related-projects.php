<?php

$posts = get_field('related_projects');

if( $posts ): ?>
  <div class="related-projects">
    <div class="container-fluid">
      <h3>Related Projects</h3>
      <div class="projects-wrapper">
        <div class="row">
          <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
            <?php setup_postdata($post); ?>
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
            <article class="col-md-4">

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
          
          <?php endforeach; ?>
        </div>
      </div>
      <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    </div>
  </div>
<?php endif; ?>
