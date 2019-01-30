<?php
// Routes

$app->get('/test', function () {
    echo ("Hello test!");
});

$app->get('/authenticate/{username}/{password}', function ($request, $response,$args) {
    echo "signin";
    print_r($args);
    print_r($request);
    print_r($response);

});
