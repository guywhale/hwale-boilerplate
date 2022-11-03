<?php

namespace Hwale\Controllers;

class Button extends Components
{
    // Set view type to 'example';
    protected function setViewFile()
    {
        $this->viewFile = 'button';
    }

    protected function cleanData($dataArr)
    {
        $cleanedArr = [];

        foreach ($dataArr as $key => $value) {
            $cleanedArr[$key] = esc_attr($value);
        }

        return $cleanedArr;
    }

    // Get data specific to view
    protected function setData($data = [])
    {
        /** @var array $defaultData The button's default settings.
         * 'tag' = HTML tag
         * 'type' = Set the type attribute
         * 'url' = The URL for the href attribute
         * 'target' = Set the target attribute
         * 'classes' = Additional classes to add to element
         * 'label' = Text to display on button
         * 'rel = Set the rel attribute
        */
        $defaultData = [
            'tag' => 'a',
            'type' => '',
            'href' => '',
            'target' => '',
            'classes' => '',
            'label' => 'Add a label..',
            'rel' => '',
        ];

        // Clean data
        $defaultData = $this->cleanData($defaultData);
        //Set defaults
        $this->data = $defaultData;

        if (!empty($data)) {
            // Clean data
            $newData = $this->cleanData($data);
            // Merge default data with new. New values will override defaults.
            $this->data = array_merge($defaultData, $newData);

            if ($this->data['type']) {
                $this->data['type'] = "type=\"{$this->data['type']}\"";
            }

            if ($this->data['href']) {
                $this->data['href'] = "href=\"{$this->data['href']}\"";
            }

            if ($this->data['target']) {
                $this->data['target'] = "target=\"_{$this->data['target']}\"";
            }

            if ($this->data['rel']) {
                $this->data['rel'] = "rel=\"_{$this->data['rel']}\"";
            }
        }
    }
}
