<?php

/**
 * Enqueue CSS & JS files
 */

namespace Hwale\App;

add_action('wp_enqueue_scripts', 'Hwale\App\boilerplate_load_assets');
function boilerplate_load_assets()
{
    wp_enqueue_script('ourmainjs', get_theme_file_uri('/build/index.js'), ['wp-element'], '1.0', true);
    wp_enqueue_style('ourmaincss', get_theme_file_uri('/build/index.css'));
}

add_action('enqueue_block_editor_assets', 'Hwale\App\boilerplate_load_assets_admin');
function boilerplate_load_assets_admin()
{
    wp_enqueue_script('ourmainjs-admin', get_theme_file_uri('/build/index.js'), ['wp-element'], '1.0', true);
    wp_enqueue_style('ourmaincss-admin', get_theme_file_uri('/build/index.css'));
}
