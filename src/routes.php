<?php
// Routes

$app->get('/test', function () {
    phpinfo();
});

$app->get('/signin/:username/:password', function ($username, $password) {
    echo ("Username:".$username."<br />");
    echo ("Password:".$password."<br />");
});