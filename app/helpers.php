<?php

namespace Hwale;

/**
 * Get a component, layout or partial
 *
 * For a type to work, it must have a folder in /views/.
 *
 * Currently supported:
 * 'component', 'layout', 'partial'
 *
 * @param string $fileName Type of template to get.
 * @param string $fileName Filename of component without '.php' extension.
 * @param array $options Any arguments you wish to pass into the component.
 * @return void
 **/

function subGet(string $type = null, string $fileName = null, array $options = []): void
{
    // Permitted types
    $allowedTypes = ['component', 'layout', 'partial'];
    // Permitted types as string for Exception messages
    $allowedTypesStr = implode(', ', $allowedTypes);
    // Path to /views/ dir as a string. Maintains consitentcy across Exception messages.
    $viewsPath = '/views/';

    if (!$type) {
        throw new \Exception("Please specify a type of template to get. Permitted types are: {$allowedTypesStr}. A type must have a corresponding directory in {$viewsPath}.");
    }

    if (!in_array($type, $allowedTypes, true)) {
        throw new \Exception("'{$type}' is not a permitted type. Permitted types are: {$allowedTypesStr}. A type must have a corresponding directory in {$viewsPath}.");
    }

    if (!is_dir(get_template_directory() . "{$viewsPath}{$type}s")) {
        throw new \Exception("The '{$type}' type does not have a corresponding directory in {$viewsPath}. Please create one and ensure the name is plual e.g. '{$viewsPath}{$type}s'.");
    }

    if (!$fileName) {
        throw new \Exception("You must specify a filename for the template file. Do not use '.php' extension.");
    }

    if (!is_file(get_template_directory() . "{$viewsPath}{$type}s/{$fileName}.php")) {
        throw new \Exception("Sorry, {$fileName}.php doesn't exist in {$viewsPath}{$type}s/.");
    }

    get_template_part("{$viewsPath}{$type}s/{$fileName}", null, $options);
}

/**
 * Try/Catch wrapper for subGet()
 *
 * Wraps each instance of the tempate getting function in a try/catch statement.
 * This allows for errors to be displayed without blocking the execution of the rest
 * of the page's code.
 *
 * @param string $fileName Type of template to get.
 * @param string $fileName Filename of component without '.php' extension.
 * @param array $options Any arguments you wish to pass into the component.
 * @return void
 * @throws Exception
 **/
function get(string $type = null, string $fileName = null, array $options = []): void
{
    try {
        subGet($type, $fileName, $options);
    } catch (\Exception $e) {
        echo '<pre class="exception-msg">Caught exception: ',  $e->getMessage(), '</pre>';
    }
}

/**
 * Echo SVGs from /src/assets
 *
 * If specified SVG exists in /src/assets it will be returned as a string.
 *
 * @param string $fileName Name of the SVG in /src/assets/
 * @return string
 **/

function subGetSVG(string $fileName = null): string
{
    if (!$fileName) {
        throw new \Exception("You must specify a filename for the SVG file. You must use the '.svg' extension.");
    }

    if (!str_ends_with($fileName, '.svg')) {
        throw new \Exception("The file must be an SVG file with an '.svg' extension.");
    }

    if (!is_file(get_template_directory() . "/src/assets/{$fileName}")) {
        throw new \Exception("Sorry, '{$fileName}' doesn't exist in /src/assets/.");
    }

    $svg = file_get_contents(get_template_directory() . "/src/assets/{$fileName}");

    return $svg;
}

/**
 * Try/Catch wrapper for subGetSVG()
 *
 * Wraps each instance of the SVG rendering function in a try/catch statement.
 * This allows for errors to be displayed without blocking the execution of the rest
 * of the page's code.
 *
 * @param string $fileName Name of the SVG in /src/assets/
 * @return string
 * @throws Exception
 **/
function getSVG(string $fileName = null): void
{
    try {
        echo subGetSVG($fileName);
    } catch (\Exception $e) {
        echo '<pre class="exception-msg">Caught exception: ',  $e->getMessage(), '</pre>';
    }
}
