<?php
// seteo para los enlaces sociales
function add_to_author_profile( $contactmethods ) {
  
  $contactmethods['facebook_profile'] = 'Facebook Profile URL';
  $contactmethods['twitter_profile'] = 'Twitter Profile URL';
  $contactmethods['linkedin_profile'] = 'Linkedin Profile URL';
  
  return $contactmethods;
}
add_filter( 'user_contactmethods', 'add_to_author_profile', 10, 1);
/**Fin Seccion*/


// seteo para el gravatar
function my_gravatar_url() { // Get user email
$user_email = get_the_author_meta( 'user_email' );
// Convert email into md5 hash and set image size to 80 px
$user_gravatar_url = 'http://www.gravatar.com/avatar/' . md5($user_email) . '?s=500';
echo $user_gravatar_url; } 
/**Fin Seccion*/

// Updates User Activity Status
add_action('init', 'riverlab_users_status_init');
add_action('admin_init', 'riverlab_users_status_init');
function riverlab_users_status_init(){
$logged_in_users = get_transient('users_status'); // Capture users' activities by wordpress transients
$user = wp_get_current_user(); // Capture of current user data
// Update the user if it is not in the list, or if it is not online for the last 3 minutes (180 seconds)
if ( !isset($logged_in_users[$user->ID]['last']) || $logged_in_users[$user->ID]['last'] <= time()-180 ){
$logged_in_users[$user->ID] = array(
'id' => $user->ID,
'username' => $user->user_login,
'last' => time(),
);
set_transient('users_status', $logged_in_users, 180); // Set to expiry every 3 minutes (180 seconds)
}
}
// Check if someone is online in the last 3 minutes
function riverlab_is_user_online($id){
$logged_in_users = get_transient('users_status');

return isset($logged_in_users[$id]['last']) && $logged_in_users[$id]['last'] > time()-180;
}
// Check the last time someone was online
function riverlab_user_last_online($id){
$logged_in_users = get_transient('users_status');
if ( isset($logged_in_users[$id]['last']) ){
return $logged_in_users[$id]['last'];
} else {
return false;
}
}
/**Fin Seccion*/