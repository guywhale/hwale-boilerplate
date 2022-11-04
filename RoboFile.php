<?php

use Robo\Symfony\ConsoleIO;

class RoboFile extends \Robo\Tasks
{
    public function makeBlock(ConsoleIO $io, $name)
    {
        if (!$name) {
            $io->say('ERROR: Please supply a block name. Name must use uppercase or upper camelcase e.g. Block or OtherBlock');
            exit;
        }

        /**
         * Split CamelCase with hypen and make lowercase
         * Used as view filename in $controllerTemplate.
         */
        $lowerName = preg_replace('/(?<=\\w)(?=[A-Z])/', "-$1", $name);
        $lowerName = strtolower($lowerName);
        $blockController = __DIR__ . "/app/controllers/blocks/$name.php";

        /**
         * Don't change spacing and indendation of template strings as we want them to
         * appear this way in the file we create.
         */
        $controllerTemplate =
"<?php

namespace Hwale\Controllers;

class $name extends Blocks
{
    // Set view type to '$lowerName';
    protected function setViewFile()
    {
        \$this->viewFile = '$lowerName';
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
        // Create block controller
        fopen($blockController, "w+");

        if (is_writable($blockController)) {
            if (!$fp = fopen($blockController, 'a')) {
                echo "Cannot open file ($blockController)";
                exit;
            }

            // Write $controllerTemplate to our opened file.
            if (fwrite($fp, $controllerTemplate) === false) {
                echo "Cannot write to file ($blockController)";
                exit;
            }

            fclose($fp);

            $io->say("$name.php block controller successfully created.");
        } else {
            $io->say("ERROR: $blockController is not writable.");
        }

        /**
         * Split CamelCase with space fro block.json.
         * Used as block name in $jsonTemplate.
         */
        $spacedName = preg_replace('/(?<=\\w)(?=[A-Z])/', " $1", $name);
        $blockViewDir = __DIR__ . "/views/blocks/$lowerName/";
        $blockView = __DIR__ . "/views/blocks/$lowerName/$lowerName.php";
        $blockJson = __DIR__ . "/views/blocks/$lowerName/block.json";
        $viewTemplate =
"<?php

use Hwale\Controllers\{$name};

[] = \$data;

?>
<section id=\"block-$lowerName\" class=\"\">
</section>
";
        $jsonTemplate =
"{
    \"\$schema\": \"https://schemas.wp.org/trunk/block.json\",
    \"apiVersion\": 2,
    \"name\": \"acf/$lowerName\",
    \"title\": \"Block - $spacedName\",
    \"description\": \"<ADD DESCRIPTION>.\",
    \"editorStyle\": [ \"file:../../../../../build/index.css\" ],
    \"style\": [ \"file:../../../../../build/index.css\" ],
    \"category\": \"common\",
    \"textdomain\": \"hwale\",
    \"icon\": \"layout\",
    \"keywords\": [\"example\", \"acf\"],
    \"acf\": {
        \"mode\": \"auto\",
        \"renderCallback\": \"Hwale\\\Controllers\\\\{$name}::init\"
    },
    \"supports\": {
        \"align\": true,
        \"alignWide\": true
    },
    \"attributes\": {
        \"align\": {
        \"type\": \"string\",
        \"default\": \"full\"
        }
    }
}
";
        // Make block view directory
        if (!is_dir($blockViewDir)) {
            mkdir($blockViewDir, 0755);
            $io->say("/views/blocks/$lowerName/ directory successfully created.");
        } else {
            $io->say("/views/blocks/$lowerName/ already exists.");
        }

        // Make block view file
        fopen($blockView, "w+");

        if (is_writable($blockView)) {
            if (!$fp = fopen($blockView, 'a')) {
                echo "Cannot open file ($blockView)";
                exit;
            }

            // Write $viewTemplate to our opened file.
            if (fwrite($fp, $viewTemplate) === false) {
                echo "Cannot write to file ($blockView)";
                exit;
            }

            fclose($fp);

            $io->say("$lowerName.php block view successfully created.");
        } else {
            $io->say("ERROR: $blockView is not writable.");
        }

        // Make block view JSON
        fopen($blockJson, "w+");

        if (is_writable($blockJson)) {
            if (!$fp = fopen($blockJson, 'a')) {
                echo "Cannot open file ($blockJson)";
                exit;
            }

            // Write $jsonTemplate to our opened file.
            if (fwrite($fp, $jsonTemplate) === false) {
                echo "Cannot write to file ($blockJson)";
                exit;
            }

            fclose($fp);

            $io->say("block.json for block successfully created.");
        } else {
            $io->say("ERROR: $blockJson is not writable.");
        }

        $io->yell("Block \"$name\" has now been set up.");
    }
}
