<?php
// Routes

$app->get('/test', function () {
    echo ("Hello test!");
});

/*$app->get('/phpinfo', function () {
    phpinfo();
});*/

$app->get('/authenticate/{username}/{password}', function ($request, $response) {
    echo "signin";
    $username = $request->getAttribute('username');
    $password = $request->getAttribute('username');
    echo ($username."/".$password);
    return true;
});
