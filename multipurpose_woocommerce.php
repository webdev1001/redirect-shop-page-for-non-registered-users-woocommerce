<?php
/*
Plugin Name: Multi Purpose Woocommerce Plugin

Plugin URI: http://codingsuggestion.com/
Description: Discount manage , redirection of shop, cart,checkout  pages for non registerd users , billing address hiding for non shipping items ,etc 
Author: Somdeb Mukherjee
Author URI: http://codingsuggestion.com/
Version: 2.0
*/


/******************************
* global variables
******************************/

$rsp_prefix = 'rsp';
$rsp_plugin_name = 'Multi Purpose Woocommerce Plugin';

// retrieve our plugin settings from the options table
$rsp_options = get_option('rsp_settings');


/******************************
* includes
******************************/

include('includes/scripts.php'); // this controls all JS / CSS
include('includes/data-processing.php'); // this controls all saving of data
include('includes/display-functions.php'); // display content functions
include('includes/admin-page.php'); // the plugin options page HTML and save functions
