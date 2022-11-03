<?php

/**
 * Partials controller.
 */

namespace Hwale\Controllers;

abstract class Partials extends Controller
{
    // Set view type to 'partial';
    public static function setViewType()
    {
        self::$viewType = 'partial';
    }
}
