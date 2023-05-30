<?php

function wtbs_register_blocks(){
    register_block_type(
        PIXMIX_PLUGIN_DIR . 'build/block.json'
    );
}