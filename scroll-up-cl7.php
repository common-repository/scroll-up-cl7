<?php 
/**
 * Plugin Name:		   Scroll Up CL7
 * Plugin URI:		   https://coderlucky7com.000webhostapp.com/plugins
 * Description:	 Scroll up CL7. This plugin will add scroll to top feature in your wordpress site. is very easy to use, just install and activate plugin, it will work automatically.
 * Version: 		     2.0.1
 * Author: 	           coderlucky7
 * Author URI: 	https://profiles.wordpress.org/sumon3300

 */

//some set up
define('CL7_SCROLLUP_PLUGIN_PATH', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );

// add jquery from wordpress
function cl7_scroll_up_latest_jquery_from_wordpress(){

	wp_enqueue_script('jquery');

}
// jquery script file 


add_action ('init', 'cl7_scroll_up_latest_jquery_from_wordpress');
wp_enqueue_script( 'cl7-jquery-easing', CL7_SCROLLUP_PLUGIN_PATH . '/assets/js/jquery.easing.js', array ( 'jquery'));
wp_enqueue_script( 'cl7-jquery-main-scrollup', CL7_SCROLLUP_PLUGIN_PATH . '/assets/js/jquery.scrollUp.min.js', array ( 'jquery'));
wp_enqueue_script( 'cl7-jquery-active', CL7_SCROLLUP_PLUGIN_PATH . '/assets/js/active.js', array ( 'jquery'));

// font awesome css
wp_enqueue_style( 'font-awesome-css', CL7_SCROLLUP_PLUGIN_PATH. '/assets/css/font-awesome.min.css');
// plugin css style css
wp_enqueue_style( 'cl7-scrollup-plugin-css', CL7_SCROLLUP_PLUGIN_PATH. '/assets/css/style.css');








?>