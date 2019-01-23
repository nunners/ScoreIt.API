<?php
require 'vendor/autoload.php';

$app = new \Slim\App;
$app->get('/foo', function () {
    echo "Foo!";
});
$app->run();

echo "This is a test";
//scoreit.cuf1z38zdshp.eu-west-2.rds.amazonaws.com
//scoreit_db
//BHr0Pyftr3aCcbzQqeep