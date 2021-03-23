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
        '/admin' => [[['_route' => 'admin_menu', '_controller' => 'App\\Controller\\Admin\\AdminController::admin'], null, null, null, true, false, null]],
        '/admin/settings' => [[['_route' => 'settings_menu', '_controller' => 'App\\Controller\\Admin\\SettingsController::settings'], null, null, null, true, false, null]],
        '/admin/settings/add_box' => [[['_route' => 'settings_add_box', '_controller' => 'App\\Controller\\Admin\\SettingsController::add_box'], null, null, null, false, false, null]],
        '/admin/settings/add_email' => [[['_route' => 'settings_add_email', '_controller' => 'App\\Controller\\Admin\\SettingsController::add_email'], null, null, null, false, false, null]],
        '/upload' => [[['_route' => 'data_upload', '_controller' => 'App\\Controller\\BoothController::upload'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/user_settings' => [[['_route' => 'user_settings', '_controller' => 'App\\Controller\\MainController::user_settings'], null, null, null, false, false, null]],
        '/admin/adduser' => [[['_route' => 'admin_add_user', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|polist/([^/]++)(*:194)'
                    .'|d(?'
                        .'|one/([^/]++)(*:218)'
                        .'|elete(?'
                            .'|_photo/([^/]++)/([^/]++)/([^/]++)(*:267)'
                            .'|user/([^/]++)(*:288)'
                        .')'
                    .')'
                    .'|lots/(?'
                        .'|([^/]+)&([^/]++)(*:322)'
                        .'|photos/([^/]+)&([^/]++)(*:353)'
                    .')'
                    .'|m(?'
                        .'|ailcsv/([^/]++)/([^/]++)(*:390)'
                        .'|odifyuser/([^/]++)(*:416)'
                    .')'
                    .'|getcsv/([^/]++)(*:440)'
                    .'|settings/(?'
                        .'|modify_(?'
                            .'|box/([^/]++)(*:482)'
                            .'|email/([^/]++)(*:504)'
                        .')'
                        .'|d(?'
                            .'|elete_(?'
                                .'|box/([^/]++)(*:538)'
                                .'|email([^/]++)(*:559)'
                            .')'
                            .'|av_change_configuration(?:/([^/]++))?(*:605)'
                        .')'
                    .')'
                .')'
                .'|/booth/scan(?:/([^/]++))?(*:641)'
                .'|/verifyLotExist/([^/]++)(*:673)'
                .'|/scan/([^/]++)(*:695)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        194 => [[['_route' => 'admin_polist', '_controller' => 'App\\Controller\\Admin\\AdminController::polist'], ['active'], null, null, false, true, null]],
        218 => [[['_route' => 'admin_mark_done', '_controller' => 'App\\Controller\\Admin\\AdminController::markAsDone'], ['id'], null, null, false, true, null]],
        267 => [[['_route' => 'admin_delete_photo', '_controller' => 'App\\Controller\\Admin\\AdminController::deletePhoto'], ['id', 'name', 'state'], null, null, false, true, null]],
        288 => [[['_route' => 'admin_delete_user', '_controller' => 'App\\Controller\\RegistrationController::delete'], ['id'], null, null, false, true, null]],
        322 => [[['_route' => 'admin_view_lots', '_controller' => 'App\\Controller\\Admin\\AdminController::viewLots'], ['po_number', 'state'], null, null, false, true, null]],
        353 => [[['_route' => 'admin_view_photos', '_controller' => 'App\\Controller\\Admin\\AdminController::viewPhotos'], ['lot', 'state'], null, null, false, true, null]],
        390 => [[['_route' => 'admin_mail_csv', '_controller' => 'App\\Controller\\Admin\\AdminController::mailCsv'], ['po_number', 'state'], null, null, false, true, null]],
        416 => [[['_route' => 'admin_modify_user', '_controller' => 'App\\Controller\\RegistrationController::modify'], ['id'], null, null, false, true, null]],
        440 => [[['_route' => 'admin_get_csv', '_controller' => 'App\\Controller\\Admin\\AdminController::getCsv'], ['po_number'], null, null, false, true, null]],
        482 => [[['_route' => 'settings_modify_box', '_controller' => 'App\\Controller\\Admin\\SettingsController::modify_box'], ['id'], null, null, false, true, null]],
        504 => [[['_route' => 'settings_modify_email', '_controller' => 'App\\Controller\\Admin\\SettingsController::modify_email'], ['id'], null, null, false, true, null]],
        538 => [[['_route' => 'settings_delete_box', '_controller' => 'App\\Controller\\Admin\\SettingsController::delete_box'], ['id'], null, null, false, true, null]],
        559 => [[['_route' => 'settings_delete_email', '_controller' => 'App\\Controller\\Admin\\SettingsController::delete_email'], ['id'], null, null, false, true, null]],
        605 => [[['_route' => 'settings_dav_change_configuration', 'name' => 'null', '_controller' => 'App\\Controller\\Admin\\SettingsController::dav_change_configuration'], ['name'], null, null, false, true, null]],
        641 => [[['_route' => 'booth_start', 'scan' => 'null', '_controller' => 'App\\Controller\\MainController::booth_start'], ['scan'], null, null, false, true, null]],
        673 => [[['_route' => 'verifyLotExist', '_controller' => 'App\\Controller\\MainController::verifyLotExist'], ['lot'], null, null, false, true, null]],
        695 => [
            [['_route' => 'code_return', '_controller' => 'App\\Controller\\MainController::code_return'], ['s'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
