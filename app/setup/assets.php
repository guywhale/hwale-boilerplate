<?php

/**
 * Enqueue CSS & JS files
 */

namespace Hwale;

add_action('wp_enqueue_scripts', __NAMESPACE__ . '\loadAssets');
function loadAssets()
{
    wp_enqueue_script('app-js', get_theme_file_uri('/dist/app.js'), ['wp-element'], '1.0', true);
    wp_enqueue_style('app-css', get_theme_file_uri('/dist/app.css'));
}

add_action('enqueue_block_editor_assets', __NAMESPACE__ . '\loadAssetsAdmin');
function loadAssetsAdmin()
{
    wp_enqueue_script('app-js-admin', get_theme_file_uri('/dist/app.js'), ['wp-element'], '1.0', true);
    wp_enqueue_style('app-css-admin', get_theme_file_uri('/dist/app.css'));
}
