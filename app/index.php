<?php
// Version
define('VERSION', '3.0.3.4');

// Vendor Autoloader
require_once('vendor/autoload.php');

// load .env file
$envLoader = new \josegonzalez\Dotenv\Loader(__DIR__.'/.env');
// $Loader->parse();
$envLoader->parse()->toEnv(true);

require_once('config.php');

// Startup
require_once(DIR_SYSTEM . 'startup.php');

start('catalog');