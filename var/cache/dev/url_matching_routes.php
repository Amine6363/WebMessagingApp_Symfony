<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/inbox' => [[['_route' => 'app_inbox', '_controller' => 'App\\Controller\\InboxController::inbox'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/message' => [[['_route' => 'app_message', '_controller' => 'App\\Controller\\MessageController::sendMessage'], null, null, null, false, false, null]],
        '/outbox' => [[['_route' => 'app_outbox', '_controller' => 'App\\Controller\\OutboxController::outbox'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/admin/(?'
                    .'|block/([^/]++)(*:66)'
                    .'|unblock/([^/]++)(*:89)'
                .')'
                .'|/inbox/message/([^/]++)(*:120)'
                .'|/message/([^/]++)/reply(*:151)'
                .'|/outbox/message/([^/]++)(*:183)'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:227)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        66 => [[['_route' => 'admin_block_user', '_controller' => 'App\\Controller\\AdminController::blockUser'], ['id'], null, null, false, true, null]],
        89 => [[['_route' => 'admin_unblock_user', '_controller' => 'App\\Controller\\AdminController::unblockUser'], ['id'], null, null, false, true, null]],
        120 => [[['_route' => 'app_message_view', '_controller' => 'App\\Controller\\InboxController::viewMessage'], ['id'], null, null, false, true, null]],
        151 => [[['_route' => 'app_message_reply', '_controller' => 'App\\Controller\\MessageController::replyToMessage'], ['id'], null, null, false, false, null]],
        183 => [[['_route' => 'app_message_show', '_controller' => 'App\\Controller\\OutboxController::viewMessage'], ['id'], null, null, false, true, null]],
        227 => [
            [['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
