<?php
require 'vendor/autoload.php';

$app = new \Slim\App;
$app->get('/test', function () {
    phpinfo();
});

$app->get('/signin/:username/:password', function ($username, $password) {
    echo ("Username:".$username."<br />");
    echo ("Password:".$password."<br />");
});
$app->run();
//scoreit.cuf1z38zdshp.eu-west-2.rds.amazonaws.com
//scoreit_db
//BHr0Pyftr3aCcbzQqeep