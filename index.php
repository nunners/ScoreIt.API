<?php
require 'vendor/autoload.php';

$app = new \Slim\App;
$app->get('/foo', function () {
    echo "Foo!";
});

$app->get('/signin', function () {
    echo ("here we are!");
});
$app->run();

echo (getenv('WebitServer'));
//scoreit.cuf1z38zdshp.eu-west-2.rds.amazonaws.com
//scoreit_db
//BHr0Pyftr3aCcbzQqeep