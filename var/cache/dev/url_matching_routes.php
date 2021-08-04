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
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\AppController::home'], null, null, null, false, false, null]],
        '/dashboard/categories' => [[['_route' => 'dashboard_category_list', '_controller' => 'App\\Controller\\Dashboard\\CategoryController::index'], null, null, null, true, false, null]],
        '/dashboard/contents' => [[['_route' => 'dashboard_content_list', '_controller' => 'App\\Controller\\Dashboard\\ContentController::index'], null, null, null, true, false, null]],
        '/dashboard/contents/new' => [[['_route' => 'dashboard_content_new', '_controller' => 'App\\Controller\\Dashboard\\ContentController::new'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'dashboard_home', '_controller' => 'App\\Controller\\Dashboard\\HomeController::index'], null, null, null, true, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
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
                .'|/dashboard/c(?'
                    .'|ategories/(?'
                        .'|edit/(\\d+)(*:206)'
                        .'|delete/(\\d+)(*:226)'
                    .')'
                    .'|o(?'
                        .'|lors/delete/(\\d+)(*:256)'
                        .'|ntents/(?'
                            .'|edit/([^/]++)(*:287)'
                            .'|switchP(?'
                                .'|rivate/([0-9]*)(*:320)'
                                .'|ublished/([0-9]*)(*:345)'
                            .')'
                            .'|delete/([^/]++)(*:369)'
                        .')'
                    .')'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:416)'
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
        206 => [[['_route' => 'dashboard_category_edit', '_controller' => 'App\\Controller\\Dashboard\\CategoryController::edit'], ['id'], null, null, false, true, null]],
        226 => [[['_route' => 'dashboard_category_delete', '_controller' => 'App\\Controller\\Dashboard\\CategoryController::delete'], ['id'], null, null, false, true, null]],
        256 => [[['_route' => 'dashboard_color_delete', '_controller' => 'App\\Controller\\Dashboard\\ColorController::delete'], ['id'], null, null, false, true, null]],
        287 => [[['_route' => 'dashboard_content_edit', '_controller' => 'App\\Controller\\Dashboard\\ContentController::edit'], ['slug'], null, null, false, true, null]],
        320 => [[['_route' => 'dashboard_content_switchPrivate', '_controller' => 'App\\Controller\\Dashboard\\ContentController::switchPrivate'], ['id'], null, null, false, true, null]],
        345 => [[['_route' => 'dashboard_content_switchPublished', '_controller' => 'App\\Controller\\Dashboard\\ContentController::switchPublished'], ['id'], null, null, false, true, null]],
        369 => [[['_route' => 'dashboard_content_delete', '_controller' => 'App\\Controller\\Dashboard\\ContentController::delete'], ['slug'], null, null, false, true, null]],
        416 => [
            [['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
