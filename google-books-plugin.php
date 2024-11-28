<?php
/**
 * Plugin Name: Google Books Plugin
 * Description: A plugin to fetch and display books from Google Books API.
 * Version: 1.0.0
 * Author: Your Name
 * License: GPL2
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// Define constants.
define('GBP_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('GBP_PLUGIN_URL', plugin_dir_url(__FILE__));

// Include core classes.
require_once GBP_PLUGIN_DIR . 'includes/class-gbp-api.php';
require_once GBP_PLUGIN_DIR . 'includes/class-gbp-cache.php';
require_once GBP_PLUGIN_DIR . 'includes/class-gbp-admin.php';
require_once GBP_PLUGIN_DIR . 'includes/class-gbp-shortcode.php';

function google_books_plugin_enqueue_styles() {
    wp_enqueue_style('google-books-plugin-styles', plugin_dir_url(__FILE__) . 'assets/css/gbp-styles.css');
}

add_action('wp_enqueue_scripts', 'google_books_plugin_enqueue_styles');

// Initialize plugin features.
add_action('plugins_loaded', 'gbp_init');
function gbp_init() {
    new GBP_Admin();
    new GBP_Shortcode();
}



