<?php

namespace Hwale;

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
    if (!is_file(get_template_directory() . '/src/assets/' . $fileName)) {
        throw new \Exception("Sorry, this file doesn't exist in /src/assets/.", 1);
    }

    $svg = file_get_contents(get_template_directory() . '/src/assets/' . $fileName);

    return $svg;
}


// Render functions for blocks and components using get_template_part
// Trim get_the_content() with wp_trim_words
// Get featured image alt
