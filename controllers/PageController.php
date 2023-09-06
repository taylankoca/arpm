<?php

class PageController {
    public function home()
    {
        $content = "I'm in the homepage";
        require 'resources/view.php';
    }

    public function folder1()
    {
        $content = "I'm in folder1";
        require 'resources/view.php';
    }

    public function folder2()
    {
        $content = "I'm in folder2";
        require 'resources/view.php';
    }
}