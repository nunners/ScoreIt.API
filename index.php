<?php
require 'vendor/autoload.php';

// Instantiate the app
$settings = require __DIR__ . '/src/settings.php';
$app = new \Slim\App($settings);

// Register routes
require __DIR__ . '/src/routes.php';

$app->run();
