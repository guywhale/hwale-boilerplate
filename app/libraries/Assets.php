<?php

/**
 * Enqueue CSS & JS files
 */

namespace Hwale\Libraries;

class Assets
{
    private function loadAssets()
    {
        add_action('wp_enqueue_scripts', function () {
            wp_enqueue_script('app-js', get_theme_file_uri('/build/app.js'), ['wp-element'], '1.0', true);
            wp_enqueue_style('app-css', get_theme_file_uri('/build/app.css'));
        });
    }

    private function loadAssetsAdmin()
    {
        add_action('enqueue_block_editor_assets', function () {
            wp_enqueue_script('app-js-admin', get_theme_file_uri('/build/app.js'), ['wp-element'], '1.0', true);
            wp_enqueue_style('app-css-admin', get_theme_file_uri('/build/app.css'));
        });
    }

    public function __construct()
    {
        $this->loadAssets();
        $this->loadAssetsAdmin();
    }
}
