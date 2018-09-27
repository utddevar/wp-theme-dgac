<?php

/*======================================================================
	Wordpress wp_head Cleaner
----------------------------------------------------------------------*/
remove_action('wp_head', 'wp_generator'); 						/* WordPress generator meta tag */
remove_action('wp_head', 'rsd_link');							/* Really Simple Discovery */
remove_action('wp_head', 'wlwmanifest_link');					/* Windows Live Writer */
remove_action('wp_head', 'start_post_rel_link');				/* Post Relational Links - Start */
remove_action('wp_head', 'index_rel_link');						/* Post Relational Links - Index */
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');	/* Post Relational Links - Previous and Next */
remove_action('wp_head', 'wp_shortlink_wp_head');				/* Post shortlinks */
remove_action('wp_head', 'rel_canonical');						/* Canonical links */
remove_action('wp_head', 'feed_links');							/* Post and Comment Feed */
remove_action('wp_head', 'feed_links_extra');					/* Other feeds, for example category feeds */
remove_action('wp_head', 'print_emoji_detection_script');		/* Emoji scripts */
remove_action('wp_head', 'rest_output_link_wp_head');			/* REST API */
remove_action('wp_head', 'wp_oembed_add_discovery_links');		/* oEmbed tags */
remove_action('wp_head', 'wp_oembed_add_host_js');				/* oEmbed scripts */
remove_action('wp_head', 'wp_resource_hints');					/* Resource hints */


/*======================================================================
	Remove Wordpress Emoji Support (Front-End)
----------------------------------------------------------------------*/
function myg_remove_emoji(){
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('admin_print_styles', 'print_emoji_styles');
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_filter('the_content_feed', 'wp_staticize_emoji');
	remove_filter('comment_text_rss', 'wp_staticize_emoji');
	remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
	add_filter('tiny_mce_plugins', 'myg_remove_tinymce_emoji');
}
add_action('init', 'myg_remove_emoji');


/*======================================================================
	Remove Wordpress Emoji Support (Back-End)
----------------------------------------------------------------------*/
function myg_remove_tinymce_emoji($plugins){
	if(!is_array($plugins)){
		return array();
	}
	return array_diff($plugins, array('wpemoji'));
}


/*======================================================================
	Wordpress Title
----------------------------------------------------------------------*/
function get_title_trail(){
	if(is_front_page()){
		return get_bloginfo('description');
	}
	elseif(is_home()){
		$blog = get_post(get_option('page_for_posts'));
		return apply_filters('the_title', $blog->post_title);
	}
	elseif(is_page() || is_single()){
		return get_the_title();
	}
	elseif(is_404()){
		return 'Page not found';
	}
	else{
		return get_bloginfo('description');
	}
}


/*======================================================================
	Featured Image
----------------------------------------------------------------------*/
add_theme_support( 'post-thumbnails' ); 
add_image_size( 'custom-size', 220, 180, true );



/*======================================================================
	Featured Image
----------------------------------------------------------------------*/
function wpdocs_custom_excerpt_length( $length ) {
    return 7;
} add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return '[...]';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );




/*======================================================================
	Sticky Nav
----------------------------------------------------------------------*/
/*
// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};
// Get the navbar
var navbar = document.getElementById("navbar");
// Get the offset position of the navbar
var sticky = navbar.offsetTop;
// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky","white-nav")
  } else {
    navbar.classList.remove("sticky","white-nav");
  }
}
*/