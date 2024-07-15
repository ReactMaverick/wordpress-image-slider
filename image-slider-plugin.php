<?php
/*
Plugin Name: Image Slider Plugin
Plugin URI: http://example.com/image-slider-plugin
Description: A plugin to create an image slider with admin upload functionality.
Version: 1.0
Author: Barun Karmakar
Author URI: http://example.com
License: GPL2
*/

// Include necessary files
require_once plugin_dir_path(__FILE__) . 'includes/admin-menu.php';
require_once plugin_dir_path(__FILE__) . 'includes/shortcode.php';

// Create database table on activation
function isp_activate_plugin() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'slider_images';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        title text NOT NULL,
        slider_image text NOT NULL,        
        description text NOT NULL,
        read_more_link text NOT NULL,
        see_more_link text NOT NULL,
        thumbnail_text text NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
register_activation_hook(__FILE__, 'isp_activate_plugin');

// Enqueue Scripts and Styles
function isp_enqueue_scripts() {
  

    wp_enqueue_style('font-awesome-css', plugin_dir_url(__FILE__) . 'assets/css/font-awesome.css');
    wp_enqueue_style('google-fonts-titillium-fira-css', plugin_dir_url(__FILE__) . 'assets/css/google-fonts-titillium-fira.css');
    wp_enqueue_style('modules-min-css', plugin_dir_url(__FILE__) . 'assets/css/modules.min.css');
    wp_enqueue_style('rs6-css', plugin_dir_url(__FILE__) . 'assets/css/rs6.css');
    wp_enqueue_style('custom-css', plugin_dir_url(__FILE__) . 'assets/css/custom.css');
    

     wp_enqueue_script('jquery-min-js', plugin_dir_url(__FILE__) . 'assets/js/jquery.min.js', array(), null, true);
    wp_enqueue_script('core-min-js', plugin_dir_url(__FILE__) . 'assets/js/core.min.js', array(), null, true);
    wp_enqueue_script('jquery-migrate-min', plugin_dir_url(__FILE__) . 'assets/js/jquery-migrate.min.js', array(), null, true);
    wp_enqueue_script('rbtools-min', plugin_dir_url(__FILE__) . 'assets/js/rbtools.min.js', array(), null, true);
    wp_enqueue_script('rs6-min-js', plugin_dir_url(__FILE__) . 'assets/js/rs6.min.js', array(), null, true);
    wp_enqueue_script('custom-js', plugin_dir_url(__FILE__) . 'assets/js/custom.js', array(), null, true);
    
}
add_action('wp_enqueue_scripts', 'isp_enqueue_scripts');

// Enqueue Media Uploader Scripts
function isp_enqueue_admin_scripts($hook) {
    if ($hook != 'toplevel_page_image-slider') {
        return;
    }
    wp_enqueue_media();
    wp_enqueue_script('isp-admin-js', plugin_dir_url(__FILE__) . 'assets/js/admin.js', array('jquery'), null, true);
}
add_action('admin_enqueue_scripts', 'isp_enqueue_admin_scripts');
