<?php

/**
 * Sets up Controller.
 */

namespace Hwale\Controllers;

abstract class Controller
{
    /** @var String $viewType Type of view to get. */
    protected static $viewType = '';

    /** @var String $viewFile Name of view file. */
    protected static $viewFile = '';

    /** @var Array $data Array of data to be passed as argument to the view. */
    protected static $data = [];

    /**
     * Set the view type
     *
     * Used in child classes to set the view type
     **/
    abstract protected static function setViewType();
    /**
     * Set the view type
     *
     * Used in child classes to set the view file
     **/
    abstract protected static function setViewFile();

    /**
     * Renders view
     *
     * Checks for existence of view file. Includes it if it
     * exists. Passes any needed arguments to view file as
     * data array.
     *
     * @param string $viewType Type of view to get.
     * @param string $viewFile Name of view file.
     * @param array $data Arguments to pass to view template file.
     * @return void
     * @throws Exception
     **/
    protected static function render(string $viewType, string $viewFile, array $data = []): void
    {
        // Permitted types
        $allowedTypes = ['block', 'component', 'layout', 'partial'];
        // Permitted types as string for Exception messages
        $allowedTypesStr = implode(', ', $allowedTypes);
        // Path to /views/ dir as a string. Maintains consistency across Exception messages.
        $viewsPath = '/views/';

        if (!$viewType) {
            throw new \Exception("Please specify a type of template to get. Permitted types are: {$allowedTypesStr}. A type must have a corresponding directory in {$viewsPath}.");
        }

        if (!in_array($viewType, $allowedTypes, true)) {
            throw new \Exception("'{$viewType}' is not a permitted type. Permitted types are: {$allowedTypesStr}. A type must have a corresponding directory in {$viewsPath}.");
        }

        if (!is_dir(get_template_directory() . "{$viewsPath}{$viewType}s")) {
            throw new \Exception("The '{$viewType}' type does not have a corresponding directory in {$viewsPath}. Please create one and ensure the name is plual e.g. '{$viewsPath}{$viewType}s'.");
        }

        if (!$viewFile) {
            throw new \Exception("You must specify a viewFile for the template file. Do not use '.php' extension.");
        }

        if (!is_file(get_template_directory() . "{$viewsPath}{$viewType}s/{$viewFile}/{$viewFile}.php")) {
            throw new \Exception("Sorry, {$viewFile}.php doesn't exist in {$viewsPath}{$viewType}s/.");
        }

        include get_template_directory() . "{$viewsPath}{$viewType}s/{$viewFile}/{$viewFile}.php";
    }
}
