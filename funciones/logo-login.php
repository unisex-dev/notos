<?php
/**
* Logo login
*/
function custom_login_logo() {
    echo '<style type="text/css">'.
             'body {
                background: url(https://images.pexels.com/photos/33041/antelope-canyon-lower-canyon-arizona.jpg?auto=compress&bri=-20&crop=bottom&cs=tinysrgb&fit=crop&h=360&sharp=30&w=1400);
                background-repeat: no-repeat;
                background-size: cover;
              }
             h1 a { 
              background-image:url('.get_theme_mod( 'your_theme_logo' ).') !important;
              background-size: 200px !important;
              width: 200px !important;
            }'.
         '</style>';
}
add_action( 'login_head', 'custom_login_logo' );
/**Fin Seccion*/

?>