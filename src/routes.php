<?php
// Routes

$app->get('/test', function () {
    echo ("Hello test!");
});

$app->get('/phpinfo', function () {
    phpinfo();
});

$app->get('/authenticate/{username}/{password}', function ($username, $password) {
    echo "signin";
    print_r($username);
    print_r($password);
});
