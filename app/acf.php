<?php

/**
 * Configure ACF
 */

namespace Hwale\App;

if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title'    => 'Company Information',
        'menu_title'    => 'Company Information',
        'menu_slug'     => 'company-information',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ]);
}
