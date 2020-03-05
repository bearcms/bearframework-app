<?php

use BearFramework\App;

$app = App::get();

$context = $app->contexts->get(__DIR__);

// This is the beginning of the welcome contant that you can remove

$context->assets->addDir('/assets'); // Makes the directory /app/assets publicly accessible.

$app->routes->add('/', function() use ($context, $app) {
    return new App\Response\HTML('
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0,minimal-ui"/>
        <style>
            html, body{
                padding: 0;
                margin: 0;
                height: 100%;
            }
            body{
                background-color: #058cc4;
                color: #fff;
                font-family: helvetica,arial,sans-serif;
                font-size: 14px;
                text-align: center;
                display: flex;
                flex-direction: column;
            }
            body > div:first-child{
                flex-grow: 1;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
            body > div:nth-child(2){
                line-height: 180%;
                padding-bottom: 1rem;
            }
            .logo{
                background-image: url(' . $context->assets->getUrl('/assets/bearcms-welcome-page-logo.svg') . ');
                background-repeat: no-repeat;
                background-position: center center;
                background-size: contain;
                width: calc(100% - 2rem);
                height: 30px;
                margin: 0 1rem 2rem 1rem;
                box-sizing: border-box;
            }
            .status{
                font-size: 18px;
            }
            body a{
                color: #fff;
            }
            body a:hover{
                color: #fff;
            }
            body a:active{
                color: #fff;
            }
        </style>
    </head>
    <body>
        <div>
            <div class="logo"></div>
            <div class="status">is installed successfully!</div>
        </div>
        <div>
            Next:<br/>
            1. Open /app/index.php, enter the appSecretKey and remove the welcome page code.<br>
            2. Open the <a href="' . $app->urls->get('/admin/') . '">admin page</a> (/admin) to create an administrator account.<br><br>
            View the <a href="https://bearcms.com/support/" target="_blank">support articles</a> for more information.
        </div>
    </body>
</html>
');
});

// This is the end of the welcome contant that you can remove
// Enables the Bear CMS addon by providing an appSecretKey
$app->addons->add('bearcms/bearframework-addon');
$app->bearCMS->initialize([
    'serverUrl' => 'https://r05.bearcms.com/', // The Bear CMS server url
    'appSecretKey' => 'TODO', // The Bear CMS site secret key
    'language' => 'en', // CMS interface language
    'defaultThemeID' => 'bearcms/themeone'
]);
