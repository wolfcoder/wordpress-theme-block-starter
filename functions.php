<?php

//setup
define('WTBS_THEME_DIR', plugin_dir_path(__FILE__));

// Includes
include(WTBS_THEME_DIR . 'includes/register-blocks.php');

// Hooks
add_action('init', 'wtbs_register_blocks');

 