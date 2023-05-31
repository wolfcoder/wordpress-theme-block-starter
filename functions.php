<?php

// Load Assets
function wtbs_load_assets()
{
    wp_enqueue_script(
        wp_enqueue_style('maincss', get_theme_file_uri('/assets/css/index.css'), [], '1.0.0', 'all')
    );
}

add_action('wp_enqueue_scripts', 'wtbs_load_assets');

//setup
define('WTBS_THEME_DIR', plugin_dir_path(__FILE__));

// Includes
include(WTBS_THEME_DIR . 'includes/register-blocks.php');

// Hooks
add_action('init', 'wtbs_register_blocks');
