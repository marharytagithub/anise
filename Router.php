<?php

class Router
{
    public function resolve($url)
    {
        $arrUrl = trim($url,'/');
        $arrUrl = explode("/", $arrUrl);
        //var_dump($arrUrl); die;

        $controller = 'app/controller/' . ucfirst($arrUrl[0]) . 'Controller.php';
        $method = $arrUrl[1];
//
//        if (file_exists($controller)) {
//            $obj = new HomeController();
//            $checkMethod = method_exists($obj,$arrUrl[1]);
//            //var_dump($checkMethod);
//
//            if ($checkMethod) {
//                /** @var string $methodOfObj */
//                $methodOfObj = $arrUrl[1];
//                var_dump($methodOfObj);
//                $obj->$methodOfObj();
//            }
//            echo "method $methodOfObj not found";
//        } else {
//            echo "The file $controller does not exist";
//        }

        return [$controller, $method];
    }
}