<?php

class HomeController
{
    public function index()
    {
        echo 'no method selected';
    }

    public function display()
    {
        $this->render('home');
    }

    private function render($view)
    {
        $pathToView = 'app/view/' . ucfirst($view) . 'View.php';

        include $pathToView;
    }
}
