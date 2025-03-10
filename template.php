<?php
// Main AMP template file
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Template Data
$template_data = array(
    'template_id' => 'template01',
    'name' => 'Template01',
    'version' => '1.0',
    'author' => 'marc',
    'last_modified' => '2025-03-08',
);

// Register with AMPforWP Design Manager
add_filter('ampforwp_theme_templates', function($templates) use ($template_data) {
    $templates['template01'] = $template_data;
    return $templates;
});

// Register with AMPforWP Custom Templates
add_filter('ampforwp_custom_template_array', function($templates) use ($template_data) {
    $templates['template01'] = $template_data;
    return $templates;
});

// Register with AMPforWP Design Selector
add_filter('ampforwp_design_selector', function($templates) use ($template_data) {
    $templates['template01'] = $template_data;
    return $templates;
});