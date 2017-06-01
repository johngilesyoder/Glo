<?php
/**
 * Template Name: Homepage
 */

get_header(); ?>

<!-- Hero -->
<?php get_template_part( 'inc/home/hero' ); ?>
<!-- Our Purpose -->
<?php get_template_part( 'inc/home/purpose' ); ?>
<!-- Doors -->
<?php get_template_part( 'inc/home/doors' ); ?>
<!-- Windows -->
<?php get_template_part( 'inc/home/windows' ); ?>
<!-- Big Mural image -->
<?php get_template_part( 'inc/home/mural' ); ?>
<!-- Callout blocks -->
<?php get_template_part( 'inc/home/callouts' ); ?>

<?php get_footer(); ?>
