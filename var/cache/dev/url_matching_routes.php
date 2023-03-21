<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/colab/recap' => [[['_route' => 'app_tab_recap', '_controller' => 'App\\Controller\\ClientController::index'], null, null, null, false, false, null]],
        '/colab/add_fd' => [[['_route' => 'app_add_fd', '_controller' => 'App\\Controller\\ClientController::add_fd'], null, null, null, false, false, null]],
        '/colab/files' => [[['_route' => 'app_view_allfiles_byuser', '_controller' => 'App\\Controller\\ClientController::view_files_all'], null, null, null, false, false, null]],
        '/admin/view_fd' => [[['_route' => 'app_view_fd', '_controller' => 'App\\Controller\\FdController::View_client'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/colab/addclient' => [[['_route' => 'app_newclient', '_controller' => 'App\\Controller\\SecurityController::add_client'], null, null, null, false, false, null]],
        '/colab/client' => [[['_route' => 'app_view_client', '_controller' => 'App\\Controller\\SecurityController::View_client'], null, null, null, false, false, null]],
        '/admin/client' => [[['_route' => 'app_view_clientall', '_controller' => 'App\\Controller\\SecurityController::View_clientall'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'app_view_users', '_controller' => 'App\\Controller\\SecurityController::View_userall'], null, null, null, false, false, null]],
        '/admin/searche' => [[['_route' => 'app_view_file_filtre', '_controller' => 'App\\Controller\\SecurityController::view_files_filtre'], null, null, null, false, false, null]],
        '/admin/files' => [[['_route' => 'app_view_allfiles', '_controller' => 'App\\Controller\\SecurityController::view_files_all'], null, null, null, false, false, null]],
        '/add_file' => [[['_route' => 'app_add_file', '_controller' => 'App\\Controller\\SecurityController::add_file'], null, null, null, false, false, null]],
        '/colab/sms_send' => [[['_route' => 'app_sms', '_controller' => 'App\\Controller\\SmsController::index'], null, null, null, false, false, null]],
        '/colab/sms' => [[['_route' => 'app_sms_view', '_controller' => 'App\\Controller\\SmsController::view'], null, null, null, false, false, null]],
        '/tuestconnecter' => [[['_route' => 'app_tuestconnecter', '_controller' => 'App\\Controller\\TuestconnecterController::index'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/del_fd/([^/]++)(*:29)'
                .'|/files/([^/]++)(*:51)'
                .'|/viewpdf/([^/]++)(*:75)'
                .'|/delete_file/([^/]++)(*:103)'
                .'|/editclient/([^/]++)(*:131)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:170)'
                    .'|wdt/([^/]++)(*:190)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:236)'
                            .'|router(*:250)'
                            .'|exception(?'
                                .'|(*:270)'
                                .'|\\.css(*:283)'
                            .')'
                        .')'
                        .'|(*:293)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [[['_route' => 'app_del_fd', '_controller' => 'App\\Controller\\FdController::Dell_fd'], ['id'], null, null, false, true, null]],
        51 => [[['_route' => 'app_view_files', '_controller' => 'App\\Controller\\SecurityController::view_files'], ['id'], null, null, false, true, null]],
        75 => [[['_route' => 'app_view_pdf', '_controller' => 'App\\Controller\\SecurityController::view_pdf'], ['name'], null, null, false, true, null]],
        103 => [[['_route' => 'app_delete_file', '_controller' => 'App\\Controller\\SecurityController::suppfile'], ['id'], null, null, false, true, null]],
        131 => [[['_route' => 'app_edit_client', '_controller' => 'App\\Controller\\SecurityController::edit_client'], ['id'], null, null, false, true, null]],
        170 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        190 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        236 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        250 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        270 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        283 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        293 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
