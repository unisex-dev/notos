<div class="masthead">
  <section id="notos-slider">
   <div class="swiper-container s1">
    <div class="swiper-wrapper">
     <?php $args = array('post_type' => 'post', 'posts_per_page' => -1, 'order' => 'ASC');$loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post(); ?> 
      <div class="swiper-slide" style=";background-position:center center; background-size:cover; background-repeat:no-repeat; background-image: url('<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } else { ?><?php bloginfo('template_directory'); ?>/screenshot.png" alt="<?php the_title(); ?> <?php } ?>')">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 text-md-left text-center align-self-center my-5 intro-text">
                     <div class="card-transparent rounded-0">
                            <span class="bg-green"> <a href="<?php get_category_link( $category_id ); ?>"><?php $category = get_the_category(); echo $category[0]->cat_name; ?></a> </span>
                           <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <small><a href="<?php echo get_permalink(); ?>"><?php echo get_the_date('F'); ?> <?php echo get_the_date('j'); ?>, <?php echo get_the_date('Y'); ?> </a></small>
                            <small><a href="pages/blog-author.php"> by <?php the_author(); ?></a></small>
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
 </section>
</div>

