<?php
// Routes

$app->get('/test', function () {
    echo ("Hello test!");
});

$app->get('/signin/{username}/{password}', function ($request, $response,$args) {
    echo "signin";
    print_r($args);
    print_r($request);
    print_r($response);

});
$app->get('/api', function () {
    $newResponse = $oldResponse->withJson(array("status"=>"success","message"=>"Success :)"));
});

$app->get('/', function () {
    $newResponse = $oldResponse->withJson(array("status"=>"error","message"=>"no command"));
});

