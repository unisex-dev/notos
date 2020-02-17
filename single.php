<?php get_header();?>
<section id="paginas">
<div class="espacio"></div>
<div class="card-header bg-blanco">
  <div class="small"><?php get_breadcrumb(); ?></div>
</div>

<section id="single-post">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-9">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <article class="blog-post">
            <div class="post-heading">
            </div>
            <div class="clearfix"></div>
         <div class="single-box post-media">
          <img class="img-fluid" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } else { ?><?php bloginfo('template_directory'); ?>/screenshot.png" alt="<?php the_title(); ?> <?php } ?>">
            <div class="shadoweffect">
              <div class="descripcion">
                <div class="blog-titu">
                    <span class="bg-green">
                        <a href="<?php get_category_link( $category_id ); ?>"><?php $category = get_the_category(); echo $category[0]->cat_name; ?></a>
                    </span>
                  <h4><a><?php the_title(); ?></a></h4>
                </div>
              </div>
            </div>
          </div>
            <ul class="post-meta">
              <li class="first">
                <i class="fas fa-calendar"></i>
                <span>
                <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
              </span>
              </li>
              <li>
                <i class="fas fa-comment"></i>
                <span>
                  <?php
                    $commentscount = get_comments_number();
                    if($commentscount == 1): $commenttext = 'comentario'; endif;
                    if($commentscount > 1 || $commentscount == 0): $commenttext = 'comentarios'; endif;
                    echo $commentscount.' '.$commenttext;
                  ?>
                </span>
              </li>
              <li class="last">
                <i class="fas fa-tags"></i>
                 <span>
                  <?php $post_tags = get_the_tags(); if ( $post_tags ) { foreach( $post_tags as $tag ) { echo ' <a href="'; echo '/?tag=' . $tag->slug . '" class="text-dark">' . $tag->name . '</a>,'; } } ?>
                </span>
              </li>
            </ul>
            <div class="clearfix"></div>
            <?php $phrase = get_the_content(); $phrase = apply_filters('the_content', $phrase); $replace = '<p>'; echo str_replace('</p>', $replace, $phrase); ?>
          </article>
         <?php endwhile; ?>

 <h4>Noticias relacionadas</h4>
<div class="container-fluid p-0">
    <div class="row no-gutters">
     <!-- Equipo -->
     <div class="swiper-container s3">
      <div class="swiper-wrapper">
    
       <?php $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID) ) ); if( $related ) foreach( $related as $post ) { setup_postdata($post); ?>
         <div class="swiper-slide">
          <div class="noticias-box post-media2">
              <img class="img-fluid" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } else { ?><?php bloginfo('template_directory'); ?>/screenshot.png" alt="<?php the_title(); ?> <?php } ?>">
                <div class="shadoweffect">
                  <div class="shadow-desc">
                    <div class="blog-meta2">
                        <span class="bg-green">
                        <a href="<?php get_site_url(); ?>category/<?php $category = get_the_category(); echo $category[0]->slug; ?>" title="<?php $category = get_the_category(); echo $category[0]->cat_name; ?>"><?php $category = get_the_category(); echo $category[0]->cat_name; ?></a>
                    </span>
                      <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
                      <small><a href="<?php echo get_permalink(); ?>"><?php echo get_the_date('F'); ?> <?php echo get_the_date('j'); ?>, <?php echo get_the_date('Y'); ?> </a></small><small><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">por <?php the_author(); ?></a></small></div>
                  </div>
                </div>
              </div>
       </div>   
<?php }
wp_reset_postdata(); ?>


      </div>
     </div>
     <!-- /.row -->
    </div>
   </div>
<div class="espacio2"></div>

        <?php comments_template(); ?>
        </div>
        <div class="col-lg-3 p-0">
          <aside>
            <div class="widget">
              <?php dynamic_sidebar( 'unique-sidebar-id' );   ?>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </section>

<?php wp_reset_postdata();
endif;  ?>
</section>
    <?php get_footer(); ?>

                 <span>
                  <?php $post_tags = get_the_tags(); if ( $post_tags ) { foreach( $post_tags as $tag ) { echo ' <a href="'; echo '/?tag=' . $tag->slug . '" class="text-dark">' . $tag->name . '</a>,'; } } ?>
                </span>
              </li>
            </ul>
            <div class="clearfix"></div>
            <?php $phrase = get_the_content(); $phrase = apply_filters('the_content', $phrase); $replace = '<p>'; echo str_replace('</p>', $replace, $phrase); ?>
          </article>
         <?php endwhile; ?>
        <?php comments_template(); ?>
        </div>
        <div class="col-lg-3 p-0">
          <aside>
            <div class="widget">
              <?php dynamic_sidebar( 'unique-sidebar-id' );   ?>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </section>
<?php wp_reset_postdata();
endif;  ?>
</section>
    <?php get_footer(); ?>
