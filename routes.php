<?php

// Route file

$app->map('GET', '/', function () use ($request){

    return new Response('This is the home page ' . $request->get('name'));
});

$app->map('GET', '/about/{id}/{name}', function ($id, $name) {
    return new Response('This is the about ' . $id . " $name");
});

$app->map('GET', '/test/{id}/awd', 'Controller\HomeController@test');
$app->map('GET', '/home', 'Controller\HomeController@home');