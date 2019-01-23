<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Database settings
        'database'               => [
            'host'      => getenv('MySQL_hostname'),
            'database'  => getenv('MySQL_database'),
            'username'  => getenv('MySQL_username'),
            'password'  => getenv('MySQL_password'),
            'port'      => 3306,
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
    ],
];
