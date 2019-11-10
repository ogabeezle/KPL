<?php

return array(
    'dashboard' => [
        'namespace' => 'Phalcon\Init\Dashboard',
        'webControllerNamespace' => 'Phalcon\Init\Dashboard\Controllers\Web',
        'apiControllerNamespace' => 'Phalcon\Init\Dashboard\Controllers\Api',
        'className' => 'Phalcon\Init\Dashboard\Module',
        'path' => APP_PATH . '/modules/dashboard/Module.php',
        'defaultRouting' => true,
        'defaultController' => 'dashboard',
        'defaultAction' => 'index'
    ],
    'idea' => [
        'namespace' => 'Phalcon\Init\Idea',
        'webControllerNamespace' => 'Phalcon\Init\Idea\Controllers\Web',
        'apiControllerNamespace' => 'Phalcon\Init\Idea\Controllers\Api',
        'className' => 'Phalcon\Init\Idea\Module',
        'path' => APP_PATH . '/modules/Idea/Module.php',
        'defaultRouting' => true,
        'defaultController' => 'idea',
        'defaultAction' => 'index'
    ],

    'backoffice' => [
        'namespace' => 'Phalcon\Init\BackOffice',
        'webControllerNamespace' => 'Phalcon\Init\BackOffice\Controllers\Web',
        'apiControllerNamespace' => 'Phalcon\Init\BackOffice\Controllers\Api',
        'className' => 'Phalcon\Init\BackOffice\Module',
        'path' => APP_PATH . '/modules/backoffice/Module.php',
        'defaultRouting' => true,
        'defaultController' => 'index',
        'defaultAction' => 'index'
    ],

);