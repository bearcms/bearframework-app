<?php

require __DIR__ . '/../vendor/autoload.php';

// Creates a new Bear Framework application.
$app = new BearFramework\App();

// Enables and configures the error handler.
$app->enableErrorHandler(['logErrors' => false, 'displayErrors' => true]);

// Enables the data access. The data will be stored at the directory specified.
$app->data->useFileDriver(__DIR__ . '/../data');

// Enables the cache access. The cached items will be stored as a data items.
$app->cache->useAppDataDriver();

// Enables the logger. The logs will be stored at the directory specified.
$app->logs->useFileLogger(__DIR__ . '/../logs');

// Creates a new context. The index.php file at the directory specified will be run.
$app->contexts->add(__DIR__ . '/../app');

// Prepare and return the response that matches the current request.
$app->run();
