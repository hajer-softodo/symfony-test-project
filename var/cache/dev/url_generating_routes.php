<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'hello' => [['text'], ['text' => 'world', '_controller' => 'App\\Controller\\HelloController::hello'], [], [['variable', '/', '[^/]++', 'text', true], ['text', '/hello']], [], []],
    'index' => [['age'], ['age' => '0', '_controller' => 'App\\Controller\\TestController::index'], ['age' => '\\d+'], [['variable', '/', '\\d+', 'age', true]], [['text', '127.0.0.1']], []],
    'test' => [[], ['_controller' => 'App\\Controller\\TestController::test'], [], [['text', '/test']], [], []],
];
