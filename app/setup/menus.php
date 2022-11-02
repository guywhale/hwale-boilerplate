<?php

/**
 * Set up menus
 */

namespace Hwale;

add_action('after_setup_theme', __NAMESPACE__ . '\registerPrimaryMenu');
function registerPrimaryMenu()
{
    register_nav_menu('primary', __('Primary Menu', 'hwale'));
}
