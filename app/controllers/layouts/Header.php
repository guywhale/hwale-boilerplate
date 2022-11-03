<?php

namespace Hwale\Controllers;

class Header extends Layouts
{
    // Set view type to 'example';
    protected static function setViewFile()
    {
        self::$viewFile = 'header';
    }

    // Get data specific to view
    protected static function getData()
    {
        self::$data = [
            'title' => get_the_title(),
        ];
    }

    // Set arguments and pass to render method
    public static function init()
    {
        self::setViewType();
        self::setViewFile();
        self::getData();
        self::render(self::$viewType, self::$viewFile, self::$data);
    }
}
