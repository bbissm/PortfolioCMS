<?php

// config/routes.php
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes) {
    //Import all current routes
    $routes->import('../src/Controller/', 'annotation');

    /*
    $routes->add('news', '/news')
        ->controller([NewsController::class, 'list'])
    ;
    $routes->add('news_detail', '/news/{article}')
        ->controller([NewsController::class, 'detail'])
    ;*/
};
