<?php

/**
 * Sets up View controller.
 */

namespace Hwale\Controllers;

class Controller
{
    /** @var String $templateDir Location of view template files */
    protected $templateDir = __DIR__ . '../../src/views/';

    /**
     * Constructor for View class
     *
     * Checks for existence of given template directory.
     * @param string $templateDir Location of view template files
     * @return void
     **/
    public function __construct(string $templateDir = null)
    {
        if ($templateDir !== null) {
            // Check here whether this directory really exists
            $this->templateDir = $templateDir;
        }
    }

    /**
     * Renders template
     *
     * Checks for existence of template file. Includes it if it
     * exists.
     *
     * @param string $templateFile Name of template file.
     * @return void
     * @throws Exception
     **/
    public static function render(string $templateFile)
    {
        if (file_exists(self::$templateDir . $templateFile . '.php')) {
            include self::$templateDir . $templateFile . '.php';
        } else {
            throw new \Exception('No template file ' . $templateFile . 'present in directory.', 1);
        }
    }

}
