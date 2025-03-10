<?php
/**
 * Template01 - AMP Template
 * Author: marc
 * Version: 1.0
 */

// Security check
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Load template configuration
$config = include dirname(__FILE__) . '/config.php';

// Register this template with AMPforWP
add_filter('ampforwp_template_locate', function($template) {
    if (is_amp_endpoint()) {
        // Custom template logic here
    }
    return $template;
});