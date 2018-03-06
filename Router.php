<?php

class Router
{
    public function __construct($url)
    {
        $pathToFile = str_replace('/', '', $url) . '.php';

        if (file_exists($pathToFile)) {
            include "$pathToFile";
        } else {
            echo "The file $pathToFile does not exist";
        }
    }
}