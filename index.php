<?php
require __DIR__ .'/vendor/autoload.php';

require __DIR__ . '/app/config/config.php';
$app = new \Slim\App($config);
require __DIR__ . '/app/routes.php';
require __DIR__ . '/app/dependencies.php';
require __DIR__ . '/app/database/database.php';
require __DIR__ . '/app/middlewares.php';
$app->run();