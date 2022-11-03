<?php

use Hwale\Libraries\AcfConfig;
use Hwale\Libraries\Assets;
use Hwale\Libraries\Menus;
use Hwale\Libraries\RegisterAcfBlocks;
use Hwale\Libraries\ThemeSupport;

use function Hwale\autoloader;

autoloader('libraries');

// Init
new Assets();
new AcfConfig();
new RegisterAcfBlocks();
new Menus();
new ThemeSupport();
