<?php

namespace Hwale\Controllers;

class Page extends Partials
{
    // Set view type to 'example';
    protected static function setViewFile()
    {
        self::$viewFile = get_post_type();
    }

    // Set arguments and pass to render method
    public static function init()
    {
        self::setViewType();
        self::setViewFile();

        self::render(self::$viewType, self::$viewFile, self::$data);
    }
}
