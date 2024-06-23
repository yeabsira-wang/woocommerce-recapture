<?php
/*
Plugin Name: WooCommerce reCAPTCHA
Description: Adds Google reCAPTCHA to WooCommerce checkout page.
Version: 1.0
Author: Yeabsira
*/

// Ensure this file is being run within the WordPress environment
if (!defined('ABSPATH')) {
    exit;
}

// Include the main plugin class file
require_once plugin_dir_path(__FILE__) . 'includes/class-woocommerce-recaptcha.php';

// Initialize the plugin
add_action('plugins_loaded', array('WooCommerce_reCAPTCHA', 'init'));
?>



