<?php
// Routes

$app->get('/test', function () {
    echo ("Hello test!");
});

/*$app->get('/phpinfo', function () {
    phpinfo();
});*/

$app->get('/authenticate/{username}/{password}', function ($request, $response) {
    $user = new User ($database);

    $username = $request->getAttribute('username');
    $password = $request->getAttribute('username');

    $user->Authenticate($username,$password);

    return true;
});
