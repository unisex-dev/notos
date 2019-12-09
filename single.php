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
