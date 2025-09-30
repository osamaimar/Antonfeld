<?php
/**
 * Debug Test File
 * Use this to test if the basic structure works
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Simple test shortcode
function debug_test_shortcode($atts) {
    return '<div style="background: #f0f0f0; padding: 20px; border: 1px solid #ccc;">
        <h3>Debug Test Working</h3>
        <p>If you can see this, the basic shortcode system is working.</p>
    </div>';
}
add_shortcode('debug_test', 'debug_test_shortcode');

// Test if WordPress functions are available
function debug_wp_functions() {
    if (function_exists('wp_enqueue_style')) {
        wp_enqueue_style(
            'debug-test-styles',
            get_template_directory_uri() . '/elementor-templates/comprehensive-healthcare-services-styles.css',
            array(),
            '1.0.0'
        );
    }
}
add_action('wp_enqueue_scripts', 'debug_wp_functions');
?>

