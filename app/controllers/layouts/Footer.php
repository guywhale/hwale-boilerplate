<?php

namespace Hwale\Controllers;

class Footer extends Layouts
{
    // Set view type to 'example';
    protected static function setViewFile()
    {
        self::$viewFile = 'footer';
    }

    // Get data specific to view
    protected static function getData()
    {
        self::$data = [
            'copyright' => '© 2022 Guy Whale. All rights reserved.',
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
