   <section id="ultimas-notas">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
      <?php $args = array('post_type' => 'post', 'posts_per_page' => 1,'category_name' => 'noticias','order' => 'DESC' );$loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="col-md-6 p-0">
         <div class="destacado-box post-media">
          <img class="img-fluid" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } else { ?><?php bloginfo('template_directory'); ?>/screenshot.png" alt="<?php the_title(); ?> <?php } ?>">
            <div class="shadoweffect">
              <div class="descripcion">
                <div class="blog-titu">
                    <span class="bg-green">
                        <a href="<?php get_category_link( $category_id ); ?>">Noticias</a>
                    </span>
                  <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
                  <small><a href="<?php echo get_permalink(); ?>"><?php echo get_the_date('F'); ?> <?php echo get_the_date('j'); ?>, <?php echo get_the_date('Y'); ?> </a></small>
                  <small><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">por <?php the_author(); ?></a></small></div>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile;?>

        <div class="col-md-6 p-0">
          <div class="row no-gutters">
           <?php $args = array('post_type' => 'post', 'posts_per_page' => 1,'category_name' => 'articulos','order' => 'DESC' );$loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="col-md-6">
             <div class="noticias-box post-media">
              <img class="img-fluid" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } else { ?><?php bloginfo('template_directory'); ?>/screenshot.png" alt="<?php the_title(); ?> <?php } ?>">
                <div class="shadoweffect">
                  <div class="shadow-desc">
                    <div class="blog-meta">
                        <span class="bg-green">
                            <a href="<?php get_category_link( $category_id ); ?>">Artículos</a>
                        </span>
                      <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
                      <small><a href="<?php echo get_permalink(); ?>"><?php echo get_the_date('F'); ?> <?php echo get_the_date('j'); ?>, <?php echo get_the_date('Y'); ?> </a></small><small><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">por <?php the_author(); ?></a></small></div>
                  </div>
                </div>
              </div>
            </div>
           <?php endwhile;?>
           
           <?php $args = array('post_type' => 'post', 'posts_per_page' => 1,'category_name' => 'videos','order' => 'DESC' );$loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="col-md-6">
             <div class="noticias-box post-media">
              <img class="img-fluid" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } else { ?><?php bloginfo('template_directory'); ?>/screenshot.png" alt="<?php the_title(); ?> <?php } ?>">
                <div class="shadoweffect">
                  <div class="shadow-desc">
                    <div class="blog-meta">
                        <span class="bg-green">
                            <a href="<?php get_category_link( $category_id ); ?>">Videos</a>
                        </span>
                      <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
                      <small><a href="<?php echo get_permalink(); ?>"><?php echo get_the_date('F'); ?> <?php echo get_the_date('j'); ?>, <?php echo get_the_date('Y'); ?> </a></small><small><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">por <?php the_author(); ?></a></small>
                   </div>
                  </div>
                </div>
              </div>
            </div>
           <?php endwhile;?>

          </div>

          <div class="row no-gutters">

           <?php $args = array('post_type' => 'post', 'posts_per_page' => 1,'category_name' => 'columnas','order' => 'DESC' );$loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="col-md-6">
             <div class="noticias-box post-media">
              <img class="img-fluid" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } else { ?><?php bloginfo('template_directory'); ?>/screenshot.png" alt="<?php the_title(); ?> <?php } ?>">
                <div class="shadoweffect">
                  <div class="shadow-desc">
                    <div class="blog-meta">
                        <span class="bg-green">
                            <a href="<?php get_category_link( $category_id ); ?>">Columnas</a>
                        </span>
                      <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
                      <small><a href="<?php echo get_permalink(); ?>"><?php echo get_the_date('F'); ?> <?php echo get_the_date('j'); ?>, <?php echo get_the_date('Y'); ?> </a></small><small><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">por <?php the_author(); ?></a></small></div>
                  </div>
                </div>
              </div>
            </div>
           <?php endwhile;?>

           <?php $args = array('post_type' => 'post', 'posts_per_page' => 1,'category_name' => 'editorial','order' => 'DESC' );$loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="col-md-6">
             <div class="noticias-box post-media">
              <img class="img-fluid" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } else { ?><?php bloginfo('template_directory'); ?>/screenshot.png" alt="<?php the_title(); ?> <?php } ?>">
                <div class="shadoweffect">
                  <div class="shadow-desc">
                    <div class="blog-meta">
                        <span class="bg-green">
                            <a href="<?php get_category_link( $category_id ); ?>">Editorial</a>
                        </span>
                      <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
                      <small><a href="<?php echo get_permalink(); ?>"><?php echo get_the_date('F'); ?> <?php echo get_the_date('j'); ?>, <?php echo get_the_date('Y'); ?> </a></small><small><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">por <?php the_author(); ?></a></small></div>
                  </div>
                </div>
              </div>
            </div>
           <?php endwhile;?>

                

          </div>

        </div>
      </div>
    </div>
   </section>