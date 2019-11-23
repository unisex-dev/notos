<div id="dest-notos">
    <div class="container-fluid">
      <div class="row">
        
<?php $args = array('post_type'  => 'page', 'order' => 'ASC', 'meta_query' => array( array( 'key'   => '_wp_page_template', 'value' => 'cubos-inicio.php' ) ) );$loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post(); ?>  
<div class="col-md-4 p-0 ">	   
    <div class="grid-project-section">  
        <a href="<?php echo get_permalink(); ?>"><img src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } else { ?><?php bloginfo('template_directory'); ?>/screenshot.png" alt="<?php the_title(); ?> <?php } ?>" alt="<?php the_title(); ?>" class="img-fluid">
        <div class="desc text-center"><h1 class="text-light"><?php the_title(); ?></h1></div>
    </a>
    </div>
 </div>
<?php endwhile;?>  
   </div>
  </div>   
</div>

