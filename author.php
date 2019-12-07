<?php get_header();?>
  <?php if ( have_posts() ): the_post(); ?>
   	<div class="container espacio">		
		<div class="d-flex justify-content-center h-100">
			<div class="image_outer_container">
<?php $id = get_the_author_meta( 'ID' );
// this should be inside a post (single.php for example)
if ( riverlab_is_user_online($id) ) {
        echo '<div class="green_icon"></div>';
    } else {
        echo '<div class="red_icon"></div>';
    }
?>
				<div class="image_inner_container">
					<img src="<?php my_gravatar_url() ?>" />
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>  
 <div class="container espacio2">
              <div class="row">
                <div class="col-md-12 ">
                  <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                      Ultimos Post</a>
                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Información biográfica</a>
                      <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contacto</a>
                    </div>
                  </nav>
                  <div class="tab-content py-3 px-3 px-sm-0 text-light" id="nav-tabContent">

                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                     <div class="container-fluid">
                          <div class="row">
                            <?php rewind_posts(); while ( have_posts() ) : the_post(); ?>
                              <div class="col-lg-4 p-0">
                               <div class="noticias-box post-media">
                                <img class="img-fluid" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } else { ?><?php bloginfo('template_directory'); ?>/screenshot.png" alt="<?php the_title(); ?> <?php } ?>">
                                  <div class="shadoweffect">
                                    <div class="shadow-desc">
                                      <div class="blog-meta">
                                          <span class="bg-green">
                                              <a href="<?php get_category_link( $category_id ); ?>"><?php $category = get_the_category(); echo $category[0]->cat_name; ?></a>
                                          </span>
                                        <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        <small><a href="<?php echo get_permalink(); ?>"><?php echo get_the_date('F'); ?> <?php echo get_the_date('j'); ?>, <?php echo get_the_date('Y'); ?> </a></small><small><a href="pages/blog-author.php"> by <?php the_author(); ?></a></small>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                      <?php endwhile;?>
                         </div>
                       </div>

                    </div>

                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                    <?php if ( get_the_author_meta( 'description' ) ) : ?>
                     <?php the_author_meta( 'description' ); ?>
                     <?php endif; ?> 

                    </div>

                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                     
                     

                    </div>

                  </div>
                
                </div>
              </div>
        </div>
      </div>
</div>
    <?php get_footer(); ?>

