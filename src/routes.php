<?php

use App\Controllers\ExampleController;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

$app->get('/', function (RequestInterface $request, ResponseInterface $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});

$app->get('/test-pdo', ExampleController::class . ':testPdo');

$app->get('/example-data', ExampleController::class . ':getExampleData');

$app->get('/exception-example', ExampleController::class . ':exceptionExample');
