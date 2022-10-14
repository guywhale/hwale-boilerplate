<?php

/**
 * Register ACF Gutenberg blocks by scanning blocks directory
 */

 namespace Hwale\App;

add_action('init', 'Hwale\App\register_acf_blocks');
function register_acf_blocks()
{
    $blocksPath = __DIR__ . '/../src/views/blocks';

    if (!is_dir($blocksPath)) {
        return;
    }

    $blockSubDirs = array_diff(scandir($blocksPath), ['..', '.']);

    foreach ($blockSubDirs as $blockDir) {
        register_block_type($blocksPath . '/' . $blockDir);
    }
}
