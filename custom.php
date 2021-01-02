<?php
/**
 * @package Custom Work
 * @version 1.0.0
 */
/*
Plugin Name: Custom Work 
Plugin URI: https://vrooon.com/custom-wordpress-plugin
Description: This plugin can be used for quickly writing custom code for your client projects.
Author: Varun Kumar
Version: 1.0.0
Author URI: http://vrooon.com
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


define( 'PLUGIN_VERSION', '1.0.0' );

include 'functions.php';

// Enqueue styles
add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('custom-style', plugin_dir_url( __FILE__ ) . '/assets/css/custom.css', '', PLUGIN_VERSION );
    wp_enqueue_script('custom-js', plugin_dir_url( __FILE__ ) . '/assets/js/custom.js', 'jquery', PLUGIN_VERSION, true );
});