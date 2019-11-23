<?php

// seteo para el gravatar
function my_gravatar_url() { // Get user email
$user_email = get_the_author_meta( 'user_email' );
// Convert email into md5 hash and set image size to 80 px
$user_gravatar_url = 'http://www.gravatar.com/avatar/' . md5($user_email) . '?s=80';
echo $user_gravatar_url; } 
/**Fin Seccion*/

?>