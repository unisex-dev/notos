  <?php  /* Template Name: Contacto */ 
get_header();?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 <header class="py-5 bg-image-full pictera" style="background-image: url(&quot;https://pingendo.github.io/templates/sections/assets/form_red.jpg&quot;);"></header>

  <div class="py-5 text-white bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-4 text-left p-4">
          <h1>Contactanos</h1>
          <p>
            <abbr title="Phone"><i class="fas fa-map"></i></abbr>: <?php echo get_option( 'direccion' ); ?>
          </p>
          <p>
            <abbr title="Phone"><i class="fas fa-phone"></i></abbr>: <?php echo get_option( 'telefono' ); ?>
          </p>
          <p>
            <abbr title="Email"><i class="far fa-envelope"></i></abbr>:
            <a class="correo" href="mailto:<?php echo get_option( 'email' ); ?>"><?php echo get_option( 'email' ); ?></a>
          </p>
          <p>
            <abbr title="Hours"><i class="far fa-clock"></i></abbr>: <?php echo get_option( 'horario' ); ?>
          </p>
        </div>
        <div class="p-0 col-md-8">
          <div class="card">
            <div class="card-body p-5">
              <form id="contact-form" class="contact-form" name="contact-form" method="post" action="#">
                <div class="row">
                  <div class="form-group col-md-6">
                    <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                    <input type="text" name="company" class="form-control" placeholder="Company"> </div>
                  <div class="form-group col-md-6">
                    <input type="email" name="email" class="form-control" required="required" placeholder="Email Address">
                    <input type="url" name="website" class="form-control" placeholder="Website"> </div>
                  <div class="form-group col-md-12"> <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea> </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<?php endwhile; ?>


<?php wp_reset_postdata(); endif;  ?>   

<?php get_footer(); ?>