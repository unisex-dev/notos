    <div class="container-fluid p-0">
      <div class="row no-gutters">
      <?php $args = array('post_type' => 'post', 'posts_per_page' => 1,'order' => 'DESC' );$loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="col-md-6 p-0">
         <div class="destacado-box ">
          <img class="img-fluid" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } else { ?><?php bloginfo('template_directory'); ?>/screenshot.png" alt="<?php the_title(); ?> <?php } ?>">
            <div class="shadoweffect">
              <div class="descripcion">
                <div class="blog-titu">
                    <span class="bg-green">
                        <a href="pages/blog-category-01.php"><?php $category = get_the_category(); echo $category[0]->cat_name; ?></a>
                    </span>
                  <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
                  <small><a href="<?php echo get_permalink(); ?>"><?php echo get_the_date('F'); ?> <?php echo get_the_date('j'); ?>, <?php echo get_the_date('Y'); ?> </a></small><small><a href="pages/blog-author.php"> by <?php the_author(); ?></a></small></div>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile;?>

        <div class="col-md-6 p-0">
          <div class="row no-gutters">
           <?php $args = array('post_type' => 'post', 'posts_per_page' => 1,'order' => 'DESC' );$loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="col-md-6">
             <div class="noticias-box post-media">
              <img class="img-fluid" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } else { ?><?php bloginfo('template_directory'); ?>/screenshot.png" alt="<?php the_title(); ?> <?php } ?>">
                <div class="shadoweffect">
                  <div class="shadow-desc">
                    <div class="blog-meta">
                        <span class="bg-green">
                            <a href="pages/blog-category-01.php"><?php $category = get_the_category(); echo $category[0]->cat_name; ?></a>
                        </span>
                      <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
                      <small><a href="<?php echo get_permalink(); ?>"><?php echo get_the_date('F'); ?> <?php echo get_the_date('j'); ?>, <?php echo get_the_date('Y'); ?> </a></small><small><a href="pages/blog-author.php"> by <?php the_author(); ?></a></small></div>
                  </div>
                </div>
              </div>
            </div>
           <?php endwhile;?>
           
           <?php $args = array('post_type' => 'post', 'posts_per_page' => 1,'order' => 'DESC' );$loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="col-md-6">
             <div class="noticias-box post-media">
              <img class="img-fluid" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } else { ?><?php bloginfo('template_directory'); ?>/screenshot.png" alt="<?php the_title(); ?> <?php } ?>">
                <div class="shadoweffect">
                  <div class="shadow-desc">
                    <div class="blog-meta">
                        <span class="bg-green">
                            <a href="pages/blog-category-01.php"><?php $category = get_the_category(); echo $category[0]->cat_name; ?></a>
                        </span>
                      <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
                      <small><a href="<?php echo get_permalink(); ?>"><?php echo get_the_date('F'); ?> <?php echo get_the_date('j'); ?>, <?php echo get_the_date('Y'); ?> </a></small><small><a href="pages/blog-author.php"> by <?php the_author(); ?></a></small></div>
                  </div>
                </div>
              </div>
            </div>
           <?php endwhile;?>

          </div>

          <div class="row no-gutters">

           <?php $args = array('post_type' => 'post', 'posts_per_page' => 1,'order' => 'DESC' );$loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="col-md-6">
             <div class="noticias-box post-media">
              <img class="img-fluid" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } else { ?><?php bloginfo('template_directory'); ?>/screenshot.png" alt="<?php the_title(); ?> <?php } ?>">
                <div class="shadoweffect">
                  <div class="shadow-desc">
                    <div class="blog-meta">
                        <span class="bg-green">
                            <a href="pages/blog-category-01.php"><?php $category = get_the_category(); echo $category[0]->cat_name; ?></a>
                        </span>
                      <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
                      <small><a href="<?php echo get_permalink(); ?>"><?php echo get_the_date('F'); ?> <?php echo get_the_date('j'); ?>, <?php echo get_the_date('Y'); ?> </a></small><small><a href="pages/blog-author.php"> by <?php the_author(); ?></a></small></div>
                  </div>
                </div>
              </div>
            </div>
           <?php endwhile;?>

           <?php $args = array('post_type' => 'post', 'posts_per_page' => 1,'order' => 'DESC' );$loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="col-md-6">
             <div class="noticias-box post-media">
              <img class="img-fluid" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } else { ?><?php bloginfo('template_directory'); ?>/screenshot.png" alt="<?php the_title(); ?> <?php } ?>">
                <div class="shadoweffect">
                  <div class="shadow-desc">
                    <div class="blog-meta">
                        <span class="bg-green">
                            <a href="pages/blog-category-01.php"><?php $category = get_the_category(); echo $category[0]->cat_name; ?></a>
                        </span>
                      <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
                      <small><a href="<?php echo get_permalink(); ?>"><?php echo get_the_date('F'); ?> <?php echo get_the_date('j'); ?>, <?php echo get_the_date('Y'); ?> </a></small><small><a href="pages/blog-author.php"> by <?php the_author(); ?></a></small></div>
                  </div>
                </div>
              </div>
            </div>
           <?php endwhile;?>

          </div>

        </div>
      </div>
    </div>