<?php
// Routes

$app->get('/test', function () {
    echo ("Hello test!");
});

/*$app->get('/phpinfo', function () {
    phpinfo();
});*/

$app->get('/authenticate/{email}/{password}', function ($request, $response) {
    $user = new User ($database);

    $email = $request->getAttribute('email');
    $password = $request->getAttribute('password');

    $user->Authenticate($email,$password);

    return true;
});
