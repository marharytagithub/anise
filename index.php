<?php

spl_autoload_register(function ($class) {
    $path = str_replace('\\', '/', $class . '.php');
    if (file_exists($path)) {
        require $path;
    }
});

$url = $_SERVER['REQUEST_URI'];

$router = new Router();
$classMethod = $router->resolve($url);
var_dump($classMethod);
