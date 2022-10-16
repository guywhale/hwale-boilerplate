<?php

/**
 * Set up menus
 */

namespace Hwale;

add_action('after_setup_theme', __NAMESPACE__ . '\register_primary_menu');
function register_primary_menu()
{
    register_nav_menu('primary', __('Primary Menu', 'hwale'));
}
