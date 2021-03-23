<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
                .'|/admin/(?'
                    .'|polist/([^/]++)(*:32)'
                    .'|d(?'
                        .'|one/([^/]++)(*:55)'
                        .'|elete(?'
                            .'|_photo/([^/]++)/([^/]++)/([^/]++)(*:103)'
                            .'|user/([^/]++)(*:124)'
                        .')'
                    .')'
                    .'|lots/(?'
                        .'|([^/]+)&([^/]++)(*:158)'
                        .'|photos/([^/]+)&([^/]++)(*:189)'
                    .')'
                    .'|m(?'
                        .'|ailcsv/([^/]++)/([^/]++)(*:226)'
                        .'|odifyuser/([^/]++)(*:252)'
                    .')'
                    .'|getcsv/([^/]++)(*:276)'
                    .'|settings/(?'
                        .'|modify_(?'
                            .'|box/([^/]++)(*:318)'
                            .'|email/([^/]++)(*:340)'
                        .')'
                        .'|d(?'
                            .'|elete_(?'
                                .'|box/([^/]++)(*:374)'
                                .'|email([^/]++)(*:395)'
                            .')'
                            .'|av_change_configuration(?:/([^/]++))?(*:441)'
                        .')'
                    .')'
                .')'
                .'|/booth/scan(?:/([^/]++))?(*:477)'
                .'|/verifyLotExist/([^/]++)(*:509)'
                .'|/scan/([^/]++)(*:531)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        32 => [[['_route' => 'admin_polist', '_controller' => 'App\\Controller\\Admin\\AdminController::polist'], ['active'], null, null, false, true, null]],
        55 => [[['_route' => 'admin_mark_done', '_controller' => 'App\\Controller\\Admin\\AdminController::markAsDone'], ['id'], null, null, false, true, null]],
        103 => [[['_route' => 'admin_delete_photo', '_controller' => 'App\\Controller\\Admin\\AdminController::deletePhoto'], ['id', 'name', 'state'], null, null, false, true, null]],
        124 => [[['_route' => 'admin_delete_user', '_controller' => 'App\\Controller\\RegistrationController::delete'], ['id'], null, null, false, true, null]],
        158 => [[['_route' => 'admin_view_lots', '_controller' => 'App\\Controller\\Admin\\AdminController::viewLots'], ['po_number', 'state'], null, null, false, true, null]],
        189 => [[['_route' => 'admin_view_photos', '_controller' => 'App\\Controller\\Admin\\AdminController::viewPhotos'], ['lot', 'state'], null, null, false, true, null]],
        226 => [[['_route' => 'admin_mail_csv', '_controller' => 'App\\Controller\\Admin\\AdminController::mailCsv'], ['po_number', 'state'], null, null, false, true, null]],
        252 => [[['_route' => 'admin_modify_user', '_controller' => 'App\\Controller\\RegistrationController::modify'], ['id'], null, null, false, true, null]],
        276 => [[['_route' => 'admin_get_csv', '_controller' => 'App\\Controller\\Admin\\AdminController::getCsv'], ['po_number'], null, null, false, true, null]],
        318 => [[['_route' => 'settings_modify_box', '_controller' => 'App\\Controller\\Admin\\SettingsController::modify_box'], ['id'], null, null, false, true, null]],
        340 => [[['_route' => 'settings_modify_email', '_controller' => 'App\\Controller\\Admin\\SettingsController::modify_email'], ['id'], null, null, false, true, null]],
        374 => [[['_route' => 'settings_delete_box', '_controller' => 'App\\Controller\\Admin\\SettingsController::delete_box'], ['id'], null, null, false, true, null]],
        395 => [[['_route' => 'settings_delete_email', '_controller' => 'App\\Controller\\Admin\\SettingsController::delete_email'], ['id'], null, null, false, true, null]],
        441 => [[['_route' => 'settings_dav_change_configuration', 'name' => 'null', '_controller' => 'App\\Controller\\Admin\\SettingsController::dav_change_configuration'], ['name'], null, null, false, true, null]],
        477 => [[['_route' => 'booth_start', 'scan' => 'null', '_controller' => 'App\\Controller\\MainController::booth_start'], ['scan'], null, null, false, true, null]],
        509 => [[['_route' => 'verifyLotExist', '_controller' => 'App\\Controller\\MainController::verifyLotExist'], ['lot'], null, null, false, true, null]],
        531 => [
            [['_route' => 'code_return', '_controller' => 'App\\Controller\\MainController::code_return'], ['s'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
