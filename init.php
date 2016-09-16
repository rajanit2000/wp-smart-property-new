<?php 
/*
Plugin Name: WP Smart Property
Author: <strong>Rajan V, A2Z Technologies</strong>
Version: 2
Description: This is realestate plugin. Its use to create property listing with many features and its also have a nice Frontend 
Text Domain: wp-smart-property
*/
if( !defined( 'WP_SMPR_VERSION' ) )
	define( 'WP_SMPR_VERSION' , '2.0' );

$property_plugin_dir = WP_PLUGIN_DIR . '/' . basename(dirname(__FILE__));
$property_plugin_url = WP_PLUGIN_URL . '/' . basename(dirname(__FILE__));

require_once "$property_plugin_dir/core/install.php";
require_once "$property_plugin_dir/core/metabox.php";
?>