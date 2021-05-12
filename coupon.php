<?php
/*
Plugin Name: Coupon
Plugin URI: http://www.example.com
Description: An Coupon wordpress plugin
Author: Vaxik
Author URI: http://www.example.com
Version: 1.0.0
*/

//include('admin/DB.php');
require_once plugin_dir_path(__FILE__) . 'admin/DB.php';

function coupon_create_menu_entry() {

add_menu_page('Coupon',
'Coupon',
'edit_posts',
'main-page-coupon',
'coupon_show_main_page',
plugins_url('/images/coupon-icon-16.png', __FILE__) );

add_submenu_page('main-page-coupon',
'Add New',
'Add New',
'edit_posts',
'add-edit-empty-plugin?action=add_new',
'coupon_add_another_page' );
}

add_action('admin_menu', 'coupon_create_menu_entry');

function coupon_show_main_page() {
include('pages/coupon_list.php');
}

// function empty_plugin_add_another_page() {
// include('another-page-empty-plugin.php');
// }