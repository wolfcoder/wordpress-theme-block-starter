<?php

// hook from function.php
function wtbs_register_blocks()
{

    // array of blocks
    $blocks = [
        ['name' => 'header-01'],
        ['name' => 'header-02', 'options' => ['render_calback' => 'wtbs_header02_cb']]
    ];

    // loop through blocks
    foreach ($blocks as $block) {
        register_block_type(
            WTBS_THEME_DIR . 'build/blocks/' . $block['name'],
            $block['options'] ?? []
        );
    }
  
}