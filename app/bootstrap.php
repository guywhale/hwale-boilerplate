<?php

// Set up theme
require_once __DIR__ . '/setup/assets.php';
require_once __DIR__ . '/setup/blocks.php';
require_once __DIR__ . '/setup/support.php';
require_once __DIR__ . '/setup/menus.php';
require_once __DIR__ . '/setup/acf.php';

// Helper functions
require_once __DIR__ . '/helpers/getSVG.php';

// Core libraries
require_once __DIR__ . '/libraries/Controller.php';
require_once __DIR__ . '/libraries/ControllerStatic.php';

// Controllers
require_once __DIR__ . '/controllers/Blocks.php';
require_once __DIR__ . '/controllers/Components.php';
require_once __DIR__ . '/controllers/Layouts.php';
require_once __DIR__ . '/controllers/Partials.php';

// Controllers - Blocks
require_once __DIR__ . '/controllers/blocks/index.php';

// Controllers - Components
require_once __DIR__ . '/controllers/components/index.php';

// Controllers - Layouts
require_once __DIR__ . '/controllers/layouts/index.php';

// Controllers - Layouts
require_once __DIR__ . '/controllers/partials/index.php';
