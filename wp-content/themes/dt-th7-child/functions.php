<?php 

function childtheme_scripts() {
    // enqueue style
    wp_enqueue_style('dt-th7-child-style', get_stylesheet_uri());
    
}

add_action('wp_enqueue_scripts', 'childtheme_scripts');


function guw_custom_new_menu() {
  register_nav_menu('guw_membership_menu',__( 'Dashboard Menu' ));
}
add_action( 'init', 'guw_custom_new_menu' );


add_filter('query_vars', 'add_my_var');
function add_my_var($public_query_vars) {
    $public_query_vars[] = 'courses';
    return $public_query_vars;
}

//title
//paragraph
//image
//button link

function upcoming_events_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'guw_upcoming_events', 'your-theme-domain' ),
            'id' => 'guw_upcoming_events-sidebar',
            'description' => __( 'GUW Upcoming Events Sidebar', 'your-theme-domain' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
        )
    );

    register_sidebar(
        array (
            'name' => __( 'guw_upcoming_events_img', 'your-theme-domain' ),
            'id' => 'guw_upcoming_events-img-sidebar',
            'description' => __( 'GUW Upcoming Events Sidebar Image', 'your-theme-domain' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
        )
    );
}
add_action( 'widgets_init', 'upcoming_events_sidebar' );



function add_loginout_link( $items, $args ) {
 
  if (is_user_logged_in() && $args->theme_location == 'primary') {
    $items .= '<li><a style="font-weight: bold;border: 3px solid #f2cb23;padding:0 15px;" href="'. wp_logout_url( get_permalink( wc_get_page_id( 'myaccount' ) ) ) .'">Log Out</a></li>';
  }

  elseif (!is_user_logged_in() && $args->theme_location == 'primary') {
    $items .= '<li><a style="font-weight: bold;border: 3px solid #f2cb23;padding:0 15px;" href="' . get_permalink( wc_get_page_id( 'myaccount' ) ) . '">Log In</a></li>';
  }

  return $items;
}

add_filter( 'wp_nav_menu_items', 'add_loginout_link', 10, 2 );


function add_loginoutmobile_link( $items, $args ) {
 
  if (is_user_logged_in() && $args->theme_location == 'mobile') {
    $items .= '<li><a style="font-weight: bold;" href="'. wp_logout_url( get_permalink( wc_get_page_id( 'myaccount' ) ) ) .'">Log Out</a></li>';
  }

  elseif (!is_user_logged_in() && $args->theme_location == 'mobile') {
    $items .= '<li><a style="font-weight: bold;" href="' . get_permalink( wc_get_page_id( 'myaccount' ) ) . '">Log In</a></li>';
  }

  return $items;
}

add_filter( 'wp_nav_menu_items', 'add_loginoutmobile_link', 10, 2 );


function exclude_pages_from_search($query) {
    if ( $query->is_main_query() && is_search() ) {
        $query->set( 'post_type', 'post' );
        $query->set( 'cat', '207, 46');
    }
    return $query;
}
add_filter( 'pre_get_posts','exclude_pages_from_search' );
