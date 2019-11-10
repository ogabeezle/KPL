<?php

namespace Phalcon\Init\Idea;

use Phalcon\DiInterface;
use Phalcon\Loader;
use Phalcon\Mvc\ModuleDefinitionInterface;

class Module implements ModuleDefinitionInterface
{
    public function registerAutoloaders(DiInterface $di = null)
    {
        $loader = new Loader();

        $loader->registerNamespaces([
            'Phalcon\Init\Idea\Controllers\Web' => __DIR__ . '/controllers/web',
            'Phalcon\Init\Idea\Controllers\Api' => __DIR__ . '/controllers/api',
            'Phalcon\Init\Idea\Model' => __DIR__ . '/models',
            'Phalcon\Init\Idea\Repository'=>__DIR__.'/repository',
            'Phalcon\Init\Idea\Response'=>__DIR__.'/response',
            'Phalcon\Init\Idea\Request'=>__DIR__.'/request',
            'Phalcon\Init\Idea\UseCase'=>__DIR__.'/usecase'
        ]);

        $loader->register();
    }

    public function registerServices(DiInterface $di = null)
    {
        $moduleConfig = require __DIR__ . '/config/config.php';

        $di->get('config')->merge($moduleConfig);

        include_once __DIR__ . '/config/services.php';
    }
}