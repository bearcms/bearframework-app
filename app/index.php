<?php

use BearFramework\App;

/* @var $app \BearFramework\App */
/* @var $context \BearFramework\App\AppContext */
/* @var $bearCMS \BearCMS */
$bearCMS = $app->bearCMS;

// Makes the directory /app/assets publicly accessible.
// There is a file in this directory that is used for the welcome screen.
$context->assets->addDir('/assets');

// Creates the returns the welcome screen HTML code.
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
                background-color: #1BB0CE;
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
            body > div:last-child{
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
            1. Open /public/index.php and enter the your site and CMS server details.<br>
            2. Open /app/index.php and remove this welcome page code.<br>
            3. Open the <a href="' . $app->urls->get('/admin/') . '">admin page</a> (.../admin/) to create an administrator account.<br><br>
            View the <a href="https://bearcms.com/documentation/" target="_blank">documentation</a> for more information.
        </div>
    </body>
</html>
');
});
