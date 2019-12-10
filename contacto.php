  <?php  /* Template Name: Contacto */ 
get_header();?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 <header class="py-5 bg-image-full pictera" style="background-image: url(&quot;https://pingendo.github.io/templates/sections/assets/form_red.jpg&quot;);"></header>

  <div class="py-5">
    <div class="container">
      <div class="row">
        
        <div class="col-md-4 text-left p-4 text-light">
          <h1 class="text-light">Contactanos</h1>
          <p>
            <abbr title="Mapa"><i class="fas fa-map"></i></abbr> : 
            <?php echo get_option( 'direccion' ); ?>
          </p>
          <p>
            <abbr title="Telefono"><i class="fas fa-phone"></i></abbr> : 
            <?php echo get_option( 'telefono' ); ?>
          </p>
          <p>
            <abbr title="Email"><i class="far fa-envelope"></i></abbr> :
            <a class="correo" href="mailto:<?php echo get_option( 'email' ); ?>"><?php echo get_option( 'email' ); ?></a>
          </p>
          <p>
            <abbr title="Horarios"><i class="far fa-clock"></i></abbr> : 
            <?php echo get_option( 'horario' ); ?>
          </p>
        </div>

        <div class="p-0 col-md-8">
          <div class="card bg-dark rounded-0">
            <div class="card-body p-5">
              <?php get_template_part( 'formulario', 'page' ); ?>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


<?php endwhile; ?>


<?php wp_reset_postdata(); endif;  ?>   

<?php get_footer(); ?>
