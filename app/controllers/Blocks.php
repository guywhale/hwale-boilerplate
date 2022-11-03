<?php

/**
 * Blocks controller.
 */

namespace Hwale\Controllers;

abstract class Blocks extends Controller
{
    // Set view type to 'block';
    public static function setViewType()
    {
        self::$viewType = 'block';
    }
}
