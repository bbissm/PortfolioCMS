<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::sendEmail'], null, null, null, false, false, null]],
        '/event' => [[['_route' => 'event', '_controller' => 'App\\Controller\\EventController::list'], null, null, null, false, false, null]],
        '/addHobby' => [[['_route' => 'create_hobby', '_controller' => 'App\\Controller\\HobbyController::create'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, false, false, null]],
        '/member' => [[['_route' => 'member', '_controller' => 'App\\Controller\\MemberController::index'], null, null, null, false, false, null]],
        '/news' => [[['_route' => 'news', '_controller' => 'App\\Controller\\NewsController::list'], null, null, null, false, false, null]],
        '/addNews' => [[['_route' => 'create_news', '_controller' => 'App\\Controller\\NewsController::createNews'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/edit(?'
                    .'|Hobby\\-([^/]++)(*:191)'
                    .'|News\\-([^/]++)(*:213)'
                .')'
                .'|/delete(?'
                    .'|Hobby\\-([^/]++)(*:247)'
                    .'|News\\-([^/]++)(*:269)'
                .')'
                .'|/news/([^/]++)(*:292)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        191 => [[['_route' => 'edit_hobby', '_controller' => 'App\\Controller\\HobbyController::edit'], ['id'], null, null, false, true, null]],
        213 => [[['_route' => 'edit_news', '_controller' => 'App\\Controller\\NewsController::update'], ['id'], null, null, false, true, null]],
        247 => [[['_route' => 'delete_hobby', '_controller' => 'App\\Controller\\HobbyController::delete'], ['id'], null, null, false, true, null]],
        269 => [[['_route' => 'delete_news', '_controller' => 'App\\Controller\\NewsController::delete'], ['id'], null, null, false, true, null]],
        292 => [
            [['_route' => 'news_detail', '_controller' => 'App\\Controller\\NewsController::detail'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
