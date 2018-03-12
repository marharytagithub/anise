<?php

spl_autoload_register(function ($class) {
    $sources = [
        "app/controller/$class.php",
        "app/model/$class.php ",
        "app/view/$class.php",
        "core/$class.php",
    ];
    foreach ($sources as $source) {
        if (file_exists($source)) {
            require_once $source;
        }
    }
});

$url = $_SERVER['REQUEST_URI'];

$router = new Router();
$classMethod = $router->resolve($url);

$controllerName = $classMethod[0];
$methodOfObj = $classMethod[1];

$appropriateController = new $controllerName();
$appropriateController->$methodOfObj();
