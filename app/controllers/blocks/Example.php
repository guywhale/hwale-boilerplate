<?php

namespace Hwale\Controllers;

class Example extends Blocks
{
    // Set view type to 'example';
    protected static function setViewFile()
    {
        self::$viewFile = 'example';
    }

    // Get data specific to view
    protected static function getData()
    {
        self::$data = [
            'title' => get_field('title') ?: null,
            'subtitle' => get_field('subtitle') ?: null,
            'text' => get_field('text') ?: null,
            'image' => get_field('image') ?: null,
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
