    <!-- Footer -->
   <div id="footer">
        <div class="container p-0 text-light">

            <div class="row copy-right">
                <div class="col-lg-8 p-0 mx-auto text-center">
                    <p class="asbest-social-icons support-social">  
                        <a class="social" href="<?php echo get_option( 'my_twitter_url' ); ?>"><i class="fab fa-twitter"></i></a>
                        <a class="social"  href="<?php echo get_option( 'my_facebook_url' ); ?>"><i class="fab fa-facebook"></i></a>
                        <a class="social"  href="<?php echo get_option( 'my_instagram_url' ); ?>"><i class="fab fa-instagram"></i></a>    
                        <a class="social"  href="<?php echo get_option( 'my_linkedin_url' ); ?>"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social"  href="<?php echo get_option( 'my_youtube_url' ); ?>"><i class="fab fa-youtube"></i></a>
                    </p>
                    <p>&#xA9; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>, Por Unisex.ltda</p>
                </div>
            </div>
        </div>
    </div>

 <?php wp_footer(); ?>
  </body>

</html>

