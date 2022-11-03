<?php

/**
 * Layouts controller.
 */

namespace Hwale\Controllers;

abstract class Layouts extends Controller
{
    // Set view type to 'layout';
    public static function setViewType()
    {
        self::$viewType = 'layout';
    }
}
