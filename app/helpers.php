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

function get(string $type = null, string $fileName = null, array $options = [])
{
    if (!$type) {
        throw new \Exception("Please specify a type of template to get. A type must have a corresponding directory in /views/.", 1);
    }

    if (!is_dir(get_template_directory() . "/views/{$type}s")) {
        throw new \Exception("The '{$type}' type does not have a corresponding directory in /views/. Please create one and ensure the name is plual e.g. '/views/{$type}s'.", 1);
    }

    if (!$fileName) {
        throw new \Exception("You must specify a filename for the template file. Do not use '.php' extension.", 1);
    }

    if (!is_file(get_template_directory() . "/views/{$type}s/{$fileName}.php")) {
        throw new \Exception("Sorry, {$fileName}.php doesn't exist in /src/views/{$type}s/.", 1);
    }

    get_template_part("/views/{$type}s/{$fileName}", null, $options);
}

/**
 * Echo SVGs from /src/assets
 *
 * If specified SVG exists in /src/assets it will be returned as a string.
 *
 * @param string $fileName Name of the SVG in /src/assets/
 * @return string
 **/

function getSVG(string $fileName = null)
{
    if (!$fileName) {
        throw new \Exception("You must specify a filename for the SVG file. You must use the '.svg' extension.", 1);
    }

    if (!is_file(get_template_directory() . "/src/assets/{$fileName}")) {
        throw new \Exception("Sorry, this file doesn't exist in /src/assets/.", 1);
    }

    $svg = file_get_contents(get_template_directory() . "/src/assets/{$fileName}");

    return $svg;
}


// Trim get_the_content() with wp_trim_words
// Get featured image alt
