<?php
// Routes

$app->get('/test', function () {
    phpinfo();
});

$app->get('/signin/:username/:password', function ($username, $password) {
    echo ("Username:".$username."<br />");
    echo ("Password:".$password."<br />");
});

$app->get('/',
    function (Request $request, Response $response, array $args) {
        // Render index view
        return $this->renderer->render($response, 'index.phtml', $args);
    });