<?php
require 'vendor/autoload.php';

$c = new \Slim\Container(); //Create Your container

//Override the default Not Found Handler before creating App
$c['notFoundHandler'] = function ($c) {
    return function ($request, $response) use ($c) {
        return $response->withStatus(404)
            ->withHeader('Content-Type', 'text/html')
            ->write('Ooops - Page not found');
    };
};

// Instantiate the app
$settings = require __DIR__ . '/src/settings.php';
$app = new \Slim\App($settings);

// Register routes
require __DIR__ . '/src/routes.php';

$app->run();
