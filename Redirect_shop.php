<?php
/*
Plugin Name: Redirect shop page for non registered users in Woocommerce
Plugin URI: http://codingsuggestion.com/
Description: Redirect shop page for non registered users--- WooCommerce
Author: Somdeb Mukherjee
Author URI: http://codingsuggestion.com/
Version: 1.0
*/


/******************************
* global variables
******************************/

$rsp_prefix = 'rsp';
$rsp_plugin_name = 'Redirect shop page for non registered users in Woocommerce';

// retrieve our plugin settings from the options table
$rsp_options = get_option('rsp_settings');


/******************************
* includes
******************************/

include('includes/scripts.php'); // this controls all JS / CSS
include('includes/data-processing.php'); // this controls all saving of data
include('includes/display-functions.php'); // display content functions
include('includes/admin-page.php'); // the plugin options page HTML and save functions
