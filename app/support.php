<?php

/**
 * Add theme support features
 */

namespace Hwale;

add_action('after_setup_theme', __NAMESPACE__ . '\boilerplate_add_support');
function boilerplate_add_support()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
