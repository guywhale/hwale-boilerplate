<?php

use Hwale\Core\AcfConfig;
use Hwale\Core\Assets;
use Hwale\Core\Login;
use Hwale\Core\Menus;
use Hwale\Core\Optimise;
use Hwale\Core\RegisterAcfBlocks;
use Hwale\Core\ThemeSupport;

use function Hwale\autoloader;

autoloader('core');

// Init
new Optimise();
new Assets();
new AcfConfig();
new RegisterAcfBlocks();
new Login();
new Menus();
new ThemeSupport();
