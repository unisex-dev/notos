<?php get_header();?>
<div class="py-3" >
  <div class="my-5">  
   </div>
</div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <br>
           <br>    
          <div class="small"><?php get_breadcrumb(); ?></div>
         </div>
      </div>
    </div>

<section id="single-post">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <article class="blog-post">
            <div class="post-heading">
              <h3><?php the_title(); ?></h3>
            </div>
            <div class="clearfix"></div>
           <img class="img-fluid d-block w-100" src="<?php the_post_thumbnail_url(); ?>" alt="website template image">
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
        <div class="col-lg-4">
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
    <?php get_footer(); ?>
