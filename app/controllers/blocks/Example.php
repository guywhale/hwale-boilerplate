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
    protected static function setData()
    {
        self::$data = [
            'title' => get_field('title') ?: null,
            'subtitle' => get_field('subtitle') ?: null,
            'text' => get_field('text') ?: null,
            'image' => get_field('image') ?: null,
        ];
    }

    /**
     * Constructor
     *
     * Set arguments and pass to render method.
     * Must be a static method as renderTemplate in block.json
     * does not accept new Class() instances.
     *
     **/
    public static function init()
    {
        self::setViewType();
        self::setViewFile();
        self::setData();
        self::render(self::$viewType, self::$viewFile, self::$data);
    }
}
