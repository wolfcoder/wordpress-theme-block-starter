<?php

//setup
define('PIXMIX_PLUGIN_DIR', plugin_dir_path(__FILE__));

// Includes
include(PIXMIX_PLUGIN_DIR . 'includes/register-blocks.php');

//Hooks
add_action('init', 'wtbs_register_blocks');

 