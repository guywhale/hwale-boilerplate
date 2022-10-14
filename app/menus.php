<?php

/**
 * Set up menus
 */

namespace Hwale\App;

add_action('after_setup_theme', 'Hwale\App\register_primary_menu');
function register_primary_menu()
{
    register_nav_menu('primary', __('Primary Menu', 'hwale'));
}
