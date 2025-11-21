<?php

require __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;

$container = require __DIR__ . '/../src/dependencies.php';

AppFactory::setContainer($container);
$app = AppFactory::create();

require __DIR__ . '/../src/routes.php';

$app->run();
