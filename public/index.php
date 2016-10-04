<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new BearFramework\App();

$app->config->appDir = __DIR__ . '/../app/';
$app->config->dataDir = __DIR__ . '/../data/';
$app->config->logsDir = __DIR__ . '/../logs/';
$app->config->logErrors = true;
$app->config->displayErrors = false;

// Enables the Bear CMS addon
$app->addons->add('bearcms/bearframework-addon', [
    'serverUrl' => '', // The Bear CMS server url
    'siteID' => '', // The Bear CMS site ID
    'siteSecret' => '', // The Bear CMS site secret
    'addonsDir' => realpath(__DIR__ . '/../addons/'), // This is the directory where the CMS will install addons
    'language' => 'en' // CMS interface language
]);

$app->run();
