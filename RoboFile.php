<?php

use Robo\Symfony\ConsoleIO;

class RoboFile extends \Robo\Tasks
{
    public function makeBlock(ConsoleIO $io, $name)
    {
        // Create block controller
        $blockController = __DIR__ . "/app/controllers/blocks/$name.php";

        /**
         * Don't change spacing and indendation of string as we want it to
         * appear this way in the file we create.
         */
        $controllerTemplate =
"<?php

namespace Hwale\Controllers;

class Example extends Blocks
{
    // Set view type to 'example';
    protected function setViewFile()
    {
        \$this->viewFile = 'example';
    }

    // Set data specific to view
    protected function setData(\$data = [])
    {
        \$this->data = [];
    }

    /**
     * Makes new instance of current class
     *
     * As the renderCallback in block.json will not accept a 'new Class()' instantiation,
     * we can cheat by using a static init() function that instatiates the class instead.
     *
     * 'Hwale\Controllers\Class::init' can then be used to render the block in block.json.
     */
    public static function init()
    {
        new self();
    }
}
";
        fopen($blockController, "w+");

        // Let's make sure the file exists and is writable first.
        if (is_writable($blockController)) {
            // In our example we're opening $blockController in append mode.
            // The file pointer is at the bottom of the file hence
            // that's where $controllerTemplate will go when we fwrite() it.
            if (!$fp = fopen($blockController, 'a')) {
                echo "Cannot open file ($blockController)";
                exit;
            }

            // Write $controllerTemplate to our opened file.
            if (fwrite($fp, $controllerTemplate) === false) {
                echo "Cannot write to file ($blockController)";
                exit;
            }

            $io->yell("$name.php block controller successfully created.");

            fclose($fp);
        } else {
            $io->yell("ERROR: $blockController is not writable.");
        }
    }
}
