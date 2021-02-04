<?php

/*
Plugin Name: WPB Extend Request
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: Generate a long request in backend, useful to test performances tools
Version: 1.0
Author: WP Bullet
Author URI: http://URI_Of_The_Plugin_Author
License: A "Slug" license name e.g. GPL2
*/

require_once 'includes/class-wpb-extend-request.php';

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Access denied.' );
}

new WPB_Extend_Request();

