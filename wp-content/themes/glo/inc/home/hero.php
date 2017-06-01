<?php $hero_image = get_field('hero_background_image'); ?>

<section class="home-hero" style="background-image:url('<?php echo $hero_image['url']; ?>')">
  <div class="hero-gradient">
    <div class="hero-content">
      <p><?php the_field('hero_subtext'); ?></p>
      <h2><?php the_field('hero_primary_statement'); ?></h2>
      <a href="<?php the_field('hero_button_link'); ?>" class="btn btn-primary"><?php the_field('hero_button_text'); ?></a>
    </div>
    <blockquote class="hero-testimonial">
      <p>
        &ldquo;<?php the_field('hero_testimonial_quote'); ?>&rdquo;
      </p>
      <footer>
        <cite><?php the_field('hero_testimonial_author'); ?>, <?php the_field('hero_testimonial_author_title'); ?> (<?php the_field('hero_testimonial_author_location'); ?>)</cite>
      </footer>
    </blockquote>
  </div>
</section>
