<?php

class PageController {
    public function home()
    {
        $content = "I'm in the homepage";
        require 'views/view.php';
    }

    public function folder1()
    {
        $content = "I'm in folder1";
        require 'views/view.php';
    }

    public function folder2()
    {
        $content = "I'm in folder2";
        require 'views/view.php';
    }
}