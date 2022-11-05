<?php

namespace Hwale\Controllers;

class ExampleReactComponent extends Components
{
    // Set view type to 'example-react-component';
    protected function setViewFile()
    {
        $this->viewFile = 'example-react-component';
    }

    // Set data specific to view
    protected function setData($data = [])
    {
        $this->data = [];
    }
}
