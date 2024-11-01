<?php

/*
Plugin Name: TemplatesNext OnePager
Description: One Page home page with customizer options for TemplatesNext Wordpress Themes
Version: 1.3.3
Author: TemplatesNext
Author URI: http://templatesnext.in/
License: GPLv2 or later
*/
function tx_onepager_activation() {
	
	/* create Menu and assign it to parimary location */
	if(!wp_get_nav_menu_object('i-amaze Menu'))
	{
		$menu_id = wp_create_nav_menu('i-amaze Menu'); //create the menu
		$locations['primary'] = $menu_id; //set our new menu to be the main nav
		set_theme_mod('nav_menu_locations', $locations); //update	
	}	
}
register_activation_hook(__FILE__, 'tx_onepager_activation');

function tx_onepager_deactivation() {
}
register_deactivation_hook(__FILE__, 'tx_onepager_deactivation');

if(!defined('TX_ONEPAGER_PATH')){
	define('TX_ONEPAGER_PATH', realpath(plugin_dir_path(__FILE__)) . DIRECTORY_SEPARATOR );
}
if(!defined('TX_ONEPAGER_URL')){
	define('TX_ONEPAGER_URL', plugin_dir_url(__FILE__) );
}


/**
 * Load plugin textdomain.
 *
 * @since 1.0.0
 */
add_action( 'init', 'txo_load_textdomain' );
function txo_load_textdomain() {
	load_plugin_textdomain( 'txo', false, 'templatesnext-onepager/languages' );
}

require_once('inc/txo-sections-customizer.php');
require_once('inc/txo-layout-customizer.php');
require_once('inc/txo-sections.php');
if ( !class_exists( 'Kirki' ) ) {
	require_once('inc/kirki/kirki.php');
}
require_once('inc/txo-functions.php');
require_once('inc/txo-shortcodes.php');
require_once('inc/txo-custom-style.php');

require_once('inc/shape-seperators.php');
require_once('inc/meta-box/meta-box.php');
require_once('inc/slider/txo-slider.php');

/* *********************** WishList & Compare ********************/

if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	
	require_once('inc/woo-compare-wishlist/woo-compare-wishlist.php');
	
	register_activation_hook( __FILE__, 'tx_compare_wishlist_install' );
	
	function tx_compare_wishlist_install() {
		require_once ('inc/woo-compare-wishlist/includes/install.php');
		TX_WC_Compare_Wishlist_Install()->init();
	}
}