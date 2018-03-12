<?php

class Router
{
    public function resolve($url)
    {
        $arrUrl = trim($url, '/');
        $arrUrl = explode("/", $arrUrl);

        $controller = ucfirst($arrUrl[0]) . 'Controller';
        $method = $arrUrl[1];

        return [$controller, $method];
    }
}
