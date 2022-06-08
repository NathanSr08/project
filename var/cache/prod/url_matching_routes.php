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
        '/admin/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/colab/addclient' => [[['_route' => 'app_newclient', '_controller' => 'App\\Controller\\SecurityController::add_client'], null, null, null, false, false, null]],
        '/colab/client' => [[['_route' => 'app_view_client', '_controller' => 'App\\Controller\\SecurityController::View_client'], null, null, null, false, false, null]],
        '/admin/client' => [[['_route' => 'app_view_clientall', '_controller' => 'App\\Controller\\SecurityController::View_clientall'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'app_view_users', '_controller' => 'App\\Controller\\SecurityController::View_userall'], null, null, null, false, false, null]],
        '/admin/searche' => [[['_route' => 'app_view_file_filtre', '_controller' => 'App\\Controller\\SecurityController::view_files_filtre'], null, null, null, false, false, null]],
        '/admin/files' => [[['_route' => 'app_view_allfiles', '_controller' => 'App\\Controller\\SecurityController::view_files_all'], null, null, null, false, false, null]],
        '/add_file' => [[['_route' => 'app_add_file', '_controller' => 'App\\Controller\\SecurityController::add_file'], null, null, null, false, false, null]],
        '/tuestconnecter' => [[['_route' => 'app_tuestconnecter', '_controller' => 'App\\Controller\\TuestconnecterController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/del_fd/([^/]++)(*:29)'
                .'|/files/([^/]++)(*:51)'
                .'|/viewpdf/([^/]++)(*:75)'
                .'|/delete_file/([^/]++)(*:103)'
                .'|/editclient/([^/]++)(*:131)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [[['_route' => 'app_del_fd', '_controller' => 'App\\Controller\\FdController::Dell_fd'], ['id'], null, null, false, true, null]],
        51 => [[['_route' => 'app_view_files', '_controller' => 'App\\Controller\\SecurityController::view_files'], ['id'], null, null, false, true, null]],
        75 => [[['_route' => 'app_view_pdf', '_controller' => 'App\\Controller\\SecurityController::view_pdf'], ['name'], null, null, false, true, null]],
        103 => [[['_route' => 'app_delete_file', '_controller' => 'App\\Controller\\SecurityController::suppfile'], ['id'], null, null, false, true, null]],
        131 => [
            [['_route' => 'app_edit_client', '_controller' => 'App\\Controller\\SecurityController::edit_client'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
