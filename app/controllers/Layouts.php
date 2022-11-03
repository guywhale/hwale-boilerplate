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

    protected static function render(string $viewType, string $viewFile, array $data = [])
    {
        $path = self::$viewsPath;
        parent::render($viewType, $viewFile, $data);

        if (!is_file(get_template_directory() . "{$path}{$viewType}s/{$viewFile}.php")) {
            throw new \Exception("Sorry, {$viewFile}.php doesn't exist in {$path}{$viewType}s/.");
        }

        include get_template_directory() . "{$path}{$viewType}s/{$viewFile}.php";
    }
}
