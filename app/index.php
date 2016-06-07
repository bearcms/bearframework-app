<?php

use BearFramework\App;

$app->addons->add('bearcms/bearcms-bearframework-addon', [
    'serverUrl' => 'http://r02.bearcms.com/',
    'addonsDir' => realpath(__DIR__ . '/../addons/'),
    'language' => 'en'
]);

$app->routes->add('/', function() {
    return new App\Response('Hi from Bear Framework');
});
