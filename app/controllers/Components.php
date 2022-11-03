<?php

/**
 * Components controller.
 */

namespace Hwale\Controllers;

abstract class Components extends Controller
{
    // Set view type to 'component';
    public static function setViewType()
    {
        self::$viewType = 'component';
    }
}
