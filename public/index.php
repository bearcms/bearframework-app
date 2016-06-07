<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new BearFramework\App();
$app->config->appDir = __DIR__ . '/../app/';
$app->config->dataDir = __DIR__ . '/../data/';
$app->config->logsDir = __DIR__ . '/../logs/';
$app->config->logErrors = true;
$app->run();
