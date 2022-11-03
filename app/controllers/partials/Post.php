<?php

namespace Hwale\Controllers;

class Post extends Partials
{
    // Set view type to 'example';
    protected static function setViewFile()
    {
        self::$viewFile = 'single-' . get_post_type();
    }

    // Set arguments and pass to render method
    public static function init()
    {
        self::setViewType();
        self::setViewFile();

        self::render(self::$viewType, self::$viewFile, self::$data);
    }
}
