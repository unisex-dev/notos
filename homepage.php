<?php  /* Template Name: inicio */ 
get_header();?>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'secciones/slider-inicio', 'page' ); ?>
<?php endwhile; // end of the loop. ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'secciones/cubos', 'page' ); ?>
<?php endwhile; // end of the loop. ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'secciones/eventos', 'page' ); ?>
<?php endwhile; // end of the loop. ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'secciones/ultimas-notas', 'page' ); ?>
<?php endwhile; // end of the loop. ?>

 <?php get_footer(); ?>
