<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/department' => [
            [['_route' => 'department', '_controller' => 'App\\Controller\\DepartmentController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'department_create', '_controller' => 'App\\Controller\\DepartmentController::create'], null, ['POST' => 0], null, false, false, null],
        ],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\IndexController::index'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['POST' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\SecurityController::register'], null, ['POST' => 0], null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/api/task' => [
            [['_route' => 'task', '_controller' => 'App\\Controller\\TaskController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'task_create', '_controller' => 'App\\Controller\\TaskController::create'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/user/collaborators' => [[['_route' => 'collaborators', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|pi/department/([^/]++)(*:34)'
                    .'|uth/re(?'
                        .'|trieve/([^/]++)(*:65)'
                        .'|set/([^/]++)(*:84)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'department_delete', '_controller' => 'App\\Controller\\DepartmentController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        65 => [[['_route' => 'rescue_password', '_controller' => 'App\\Controller\\SecurityController::rescue'], ['email'], ['POST' => 0], null, false, true, null]],
        84 => [
            [['_route' => 'resetting_password', '_controller' => 'App\\Controller\\SecurityController::reset'], ['token'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
