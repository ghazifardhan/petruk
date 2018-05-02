<?php
// Route file

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;

$app->map('GET', '/', function() use ($request, $template){
    return $template->render('welcome');
});