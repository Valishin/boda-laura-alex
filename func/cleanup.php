<?php

//add_filter( 'show_admin_bar', '__return_false' );

/*
Clean up wp_head()
*/
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

/*
Show less info to users on failed login for security.
(Will not let a valid username be known.)
*/

// LOGIN ERROR MESSAGE
function av_login_error_message($error){

    //its the right error so you can overwrite it
    $error = __('Wrong information', 'avali');
    return $error;

}
add_filter('login_errors','av_login_error_message');

/*
Do not generate and display WordPress version
*/
function no_generator()  { 
    return ''; }
add_filter( 'the_generator', 'no_generator' );	

/*
Filters to remove IDs and classes from menu items
http://stackoverflow.com/questions/5222140/remove-li-class-id-for-menu-items-and-pages-list
If you wish to use these filters, then simply un-comment them.

add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
function my_css_attributes_filter($var) {
  return is_array($var) ? array() : '';
}
*/

/*
Filter to remove comment author website link. Use this if you wish to cut down the amount of spammers in your comments (while retaining the "Your website" comment field).
See http://www.wpsquare.com/remove-comment-author-website-link-wordpress/
*/
function av_author_link(){
	global $comment;
	$comment_ID = $comment->user_id;
	$author = get_comment_author( $comment_ID );
	$url = get_comment_author_url( $comment_ID );
	if ( empty( $url ) || 'http://' == $url )
		$return = $author;
	else
		$return = "$author";
	return $return;
}
add_filter('get_comment_author_link', 'av_author_link');

?>
