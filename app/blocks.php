<?php

/**
 * Register ACF Gutenberg blocks by scanning blocks directory
 */

 namespace Hwale;

add_action('init', __NAMESPACE__ . '\register_acf_blocks');
function register_acf_blocks()
{
    $blocksPath = __DIR__ . '/../views/blocks';

    if (!is_dir($blocksPath)) {
        return;
    }

    $blockSubDirs = array_diff(scandir($blocksPath), ['..', '.']);

    foreach ($blockSubDirs as $blockDir) {
        register_block_type($blocksPath . '/' . $blockDir);
    }
}
