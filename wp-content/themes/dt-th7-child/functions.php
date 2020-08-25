<?php 

function guw_custom_new_menu() {
  register_nav_menu('guw_membership_menu',__( 'Dashboard Menu' ));
}
add_action( 'init', 'guw_custom_new_menu' );


add_filter('query_vars', 'add_my_var');
function add_my_var($public_query_vars) {
    $public_query_vars[] = 'courses';
    return $public_query_vars;
}
