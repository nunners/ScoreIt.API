<?php

require 'vendor/autoload.php';
print_r($_REQUEST);
exit;
$app = new \Slim\App;
$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");

    return $response;
});
$app->run();

//scoreit.cuf1z38zdshp.eu-west-2.rds.amazonaws.com
//scoreit_db
//BHr0Pyftr3aCcbzQqeep