<?php
function add_to_author_profile( $contactmethods ) {
  
  $contactmethods['facebook_profile'] = 'Facebook Profile URL';
  $contactmethods['twitter_profile'] = 'Twitter Profile URL';
  $contactmethods['linkedin_profile'] = 'Linkedin Profile URL';
  
  return $contactmethods;
}
add_filter( 'user_contactmethods', 'add_to_author_profile', 10, 1);
?>