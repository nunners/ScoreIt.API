<?php
// Routes

$app->get('/test', function () {
    echo ("Hello test!");
});

$app->get('/signin', function () {
    echo "signin";
});
$app->get('/api', function () {
    echo "api";
});

