<?php  /* Template Name: Pagina para categorias */
get_header();?>
<?php $valores = get_post_meta($post->ID , 'slug-cat' , true);?>
<?php $temp = $wp_query; $wp_query = null; $wp_query = new WP_Query(); $wp_query->query('post_type=post&category_name='.$valores.'&showposts=1');  while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
 <header class="py-5 bg-image-full pictera" style="background-image: url('<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } else { ?><?php bloginfo('template_directory'); ?>/screenshot.png" alt="<?php the_title(); ?> <?php } ?>');background-position:center center;background-size:cover;background-repeat:no-repeat;"></header>
<?php endwhile;?>

</div>



<div class="card-header bg-negro">
  <h4 class=" text-light">DESTACADOS</h4>
</div>

<div class="container-fluid">
    <div class="row">
      <?php $valores = get_post_meta($post->ID , 'slug-cat' , true);?>
      <?php $temp = $wp_query; $wp_query = null; $wp_query = new WP_Query(); $wp_query->query('post_type=post&category_name='.$valores.'&showposts=2');  while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <div class="col-lg-6 p-0">
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
     </div>
    </div>







<div class="card-header bg-negro">
  <h4 class=" text-light">NOTICIAS</h4>
</div>


<div class="container-fluid">
    <div class="row">
      <?php $valores = get_post_meta($post->ID , 'slug-cat' , true);?>
      <?php $temp = $wp_query; $wp_query = null; $wp_query = new WP_Query(); $wp_query->query('post_type=post&category_name='.$valores.'&showposts=-1');  while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <div class="col-lg-4 p-0">
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

<?php get_footer(); ?>
