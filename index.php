
<?php get_header();?>

<div class="espacio"></div>
<div class="card-header bg-negro">
  <div class="small"><?php get_breadcrumb(); ?></div>
</div>
<div class="container-fluid">
    <div class="row">
      <?php while ( have_posts() ) : the_post(); ?>
        <div class="col-lg-4 p-0">
         <div class="noticias-box post-media">
          <img class="img-fluid" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } else { ?><?php bloginfo('template_directory'); ?>/screenshot.png" alt="<?php the_title(); ?> <?php } ?>">
            <div class="shadoweffect">
              <div class="shadow-desc">
                <div class="blog-meta">
                    <span class="bg-green">
                        <a href="<?php get_site_url(); ?>category/<?php $category = get_the_category(); echo $category[0]->slug; ?>" title="<?php $category = get_the_category(); echo $category[0]->cat_name; ?>"><?php $category = get_the_category(); echo $category[0]->cat_name; ?></a>
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
 </div>

 <?php get_footer(); ?>