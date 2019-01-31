<?php
require 'vendor/autoload.php';

//$container = new \Slim\Container(); //Create Your container

// Instantiate the app
$settings = require __DIR__ . '/src/settings.php';
$app = new \Slim\App($settings);

require __DIR__ . '/src/database.php';
global $database;
$database = new Database($settings['settings']['database']);

// Register routes
require __DIR__ . '/src/routes.php';

$app->run();