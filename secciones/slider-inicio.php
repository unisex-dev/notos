
<div class="masthead">
   <div class="swiper-container s1">
    <div class="swiper-wrapper">
     <?php $args = array('post_type' => 'post', 'posts_per_page' => -1, 'order' => 'ASC');$loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post(); ?> 
      <div class="swiper-slide" style="background-image: url('<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } else { ?><?php bloginfo('template_directory'); ?>/screenshot.png" alt="<?php the_title(); ?> <?php } ?>');background-position:center center;background-size:cover;background-repeat:no-repeat;">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 text-md-left text-center align-self-center my-5 intro-text">
                     <div class="card rounded-0">
                        <div class="card-header"> <?php echo get_the_date('F'); ?> <?php echo get_the_date('j'); ?>, <?php echo get_the_date('Y'); ?> </div>
                        <div class="card-body">
                           <h3><?php the_title(); ?></h3>
                           <?php the_excerpt(); ?>
                           <a class="btn btn-primary" href="<?php echo get_permalink(); ?>">Ver Mas</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6"></div>
               </div>
            </div>         
      </div>
         <?php endwhile;?> 
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
  </div>
</div>



