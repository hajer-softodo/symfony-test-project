<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    true, // $matchHost
    [ // $staticRoutes
        '/test' => [[['_route' => 'test', '_controller' => 'App\\Controller\\TestController::test'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
            .'|(?:(?:[^./]*+\\.)++)(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:57)'
                .'|/hello(?:/([^/]++))?(*:84)'
            .')|(?i:127\\.0\\.0\\.1)\\.(?'
                .'|/(\\d+)?(*:121)'
            .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        57 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        84 => [[['_route' => 'hello', 'text' => 'world', '_controller' => 'App\\Controller\\HelloController::hello'], ['text'], null, null, false, true, null]],
        121 => [
            [['_route' => 'index', 'age' => '0', '_controller' => 'App\\Controller\\TestController::index'], ['age'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
