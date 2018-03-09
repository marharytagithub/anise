<?php

class Router
{
    public function resolve($url)
    {
        $arrUrl = trim($url, '/');
        $arrUrl = explode("/", $arrUrl);
        //var_dump($arrUrl); die;

        // TODO no need full path due to autoload
        $controller = 'app/controller/' . ucfirst($arrUrl[0]) . 'Controller.php';
        $method = $arrUrl[1];

        return [$controller, $method];
    }
}
