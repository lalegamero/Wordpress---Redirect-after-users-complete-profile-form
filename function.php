<?php

/**
* Redirect after users complete profile form
*/
add_action( 'member_role_upgrade', 'my_member_role_upgrade', 10, 3 );
function my_member_role_upgrade( $old_role, $new_role, $user_id ) {
  if ( $new_role === 'member-in-approval' ) {

          $user_id = wp_update_user( array( 'ID' => $user_id, 'role' => 'member-in-approval' ) );
          $url = 'http://example.com/profile-under-review/';
           wp_redirect($url);
           die();

  }
}

?>
