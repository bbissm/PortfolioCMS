<?php

// config/routes.php
use App\Controller\NewsController;
use App\Controller\HomeController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes) {
    /*$routes->add('homepage', '/')
        ->controller([HomeController::class, 'home'])
    ;

    $routes->add('news', '/news')
        ->controller([NewsController::class, 'list'])
    ;

    $routes->add('news_detail', '/news/{article}')
        ->controller([NewsController::class, 'detail'])
    ;*/
};
