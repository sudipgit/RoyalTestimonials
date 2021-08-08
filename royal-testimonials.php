<?php
/**
 * Royal Testimonials
 *
 * Plugin Name: Royal Testimonials
 * Plugin URI:  https://leturetech.com/royal_testimonials
 * Description: Royal testimonials is the a great Wordpress plugin to show your client review/testimonials in your site.
 * Version:     1.0
 * Author:      Sudip Sarkar
 * Author URI:  https://leturetech.com
 * License: GPLv3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: royal-testimonials
 * Domain Path: /languages
 * Requires at least: 4.9
 * Requires PHP: 5.2.4
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Invalid request.' );
}

/**
* Add css file for admin setting design
*/
add_action( 'admin_print_styles', 'wrt_load_royal_testimonials_admin_css' );
function wrt_load_royal_testimonials_admin_css(){	
	 wp_enqueue_style('wrt_testimonials_admin', plugins_url('/admin/assets/css/admin.css',__FILE__));
}

 /**
* Load global admin javascript file
*/
add_action('admin_enqueue_scripts','wrt_load_royal_testimonials_admin_js');
function wrt_load_royal_testimonials_admin_js() {
    wp_enqueue_script( 'wrt_testimonials_admin_js', plugins_url( '/admin/assets/js/script.js', __FILE__ ),'','',true);
	}

/**
* Add font awesome css in front end
*/
 
add_action( 'wp_enqueue_scripts', 'wrt_load_royal_testimonials_front_end_css' );
function wrt_load_royal_testimonials_front_end_css() {
		wp_enqueue_style( 'wrt_testimonials_frontend', plugins_url('/assets/css/style.css',__FILE__),array(), 1.0, 'all' );
		wp_enqueue_style('style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', 'all');
    }

/**
* Front end script
* Load global javascript file
*/
add_action('wp_enqueue_scripts','wrt_load_royal_testimonials_front_end_js');
function wrt_load_royal_testimonials_front_end_js() {
    wp_enqueue_script( 'wrt_testimonials_js', plugins_url( '/assets/js/script.js', __FILE__ ),'','',true);
	}

/**
* Add Settings link in plugin
*/

add_filter('plugin_action_links_'.plugin_basename(__FILE__), 'wrt_royal_testimonials_settings_link');
function wrt_royal_testimonials_settings_link( $links ) {
	$links[] = '<a href="' .
		admin_url( 'edit.php?post_type=royal_testimonials&page=royal_testimonials_settings' ) .
		'">' . __('Settings') . '</a>';
	return $links;
}

/**
* Plugin constants
*/

define('WRT_PATH', basename( dirname(__FILE__) ));
define('WRT_PLUGIN_ROOT',dirname(__FILE__)) ;
define('WRT_PLUGIN_ROOT_URL', plugins_url( '', __FILE__ ) ) ; 

/**
*  Admin classes file 
*  All functions are there
*  Create an object to execute the class
*/
require_once (WRT_PLUGIN_ROOT.'/admin/classes.php');
/**
*  Testimonails admin panel settings functions 
*  Create  custom Testimonial posts
*  Create custom fields 
*  
*/
require_once (WRT_PLUGIN_ROOT.'/admin/functions.php');

/**
*  Front end functions
*  
*/
require_once (WRT_PLUGIN_ROOT.'/inc/functions.php');

/**
*  Shortcode functions
*  There are three shortcodes available 
*  
*/
require_once (WRT_PLUGIN_ROOT.'/inc/shortcodes.php');