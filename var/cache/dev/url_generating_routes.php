<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_tab_recap' => [[], ['_controller' => 'App\\Controller\\ClientController::index'], [], [['text', '/colab/recap']], [], [], []],
    'app_add_fd' => [[], ['_controller' => 'App\\Controller\\ClientController::add_fd'], [], [['text', '/colab/add_fd']], [], [], []],
    'app_view_allfiles_byuser' => [[], ['_controller' => 'App\\Controller\\ClientController::view_files_all'], [], [['text', '/colab/files']], [], [], []],
    'app_demo' => [[], ['_controller' => 'App\\Controller\\DemoController::index'], [], [['text', '/demo']], [], [], []],
    'app_view_fd' => [[], ['_controller' => 'App\\Controller\\FdController::View_client'], [], [['text', '/admin/view_fd']], [], [], []],
    'app_del_fd' => [['id'], ['_controller' => 'App\\Controller\\FdController::Dell_fd'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/del_fd']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_newclient' => [[], ['_controller' => 'App\\Controller\\SecurityController::add_client'], [], [['text', '/colab/addclient']], [], [], []],
    'app_view_client' => [[], ['_controller' => 'App\\Controller\\SecurityController::View_client'], [], [['text', '/colab/client']], [], [], []],
    'app_view_clientall' => [[], ['_controller' => 'App\\Controller\\SecurityController::View_clientall'], [], [['text', '/admin/client']], [], [], []],
    'app_view_users' => [[], ['_controller' => 'App\\Controller\\SecurityController::View_userall'], [], [['text', '/admin/users']], [], [], []],
    'app_view_file_filtre' => [[], ['_controller' => 'App\\Controller\\SecurityController::view_files_filtre'], [], [['text', '/admin/searche']], [], [], []],
    'app_view_allfiles' => [[], ['_controller' => 'App\\Controller\\SecurityController::view_files_all'], [], [['text', '/admin/files']], [], [], []],
    'app_view_files' => [['id'], ['_controller' => 'App\\Controller\\SecurityController::view_files'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/files']], [], [], []],
    'app_add_file' => [[], ['_controller' => 'App\\Controller\\SecurityController::add_file'], [], [['text', '/add_file']], [], [], []],
    'app_view_pdf' => [['name'], ['_controller' => 'App\\Controller\\SecurityController::view_pdf'], [], [['variable', '/', '[^/]++', 'name', true], ['text', '/viewpdf']], [], [], []],
    'app_delete_file' => [['id'], ['_controller' => 'App\\Controller\\SecurityController::suppfile'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/delete_file']], [], [], []],
    'app_edit_client' => [['id'], ['_controller' => 'App\\Controller\\SecurityController::edit_client'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/editclient']], [], [], []],
    'app_sms' => [[], ['_controller' => 'App\\Controller\\SmsController::index'], [], [['text', '/colab/sms_send']], [], [], []],
    'app_sms_view' => [[], ['_controller' => 'App\\Controller\\SmsController::view'], [], [['text', '/colab/sms']], [], [], []],
    'app_tuestconnecter' => [[], ['_controller' => 'App\\Controller\\TuestconnecterController::index'], [], [['text', '/tuestconnecter']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
];
