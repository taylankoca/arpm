<?php

class Router {
    public function getPath($path)
    {
        $controller = new PageController();

        $routes = [
            '/' => 'home',
            '/folder1/' => 'folder1',
            '/folder2/' => 'folder2'
        ];

        if (array_key_exists($path, $routes)) {
            $method = $routes[$path];
            $controller->$method();
        } else {
            echo "404 Not Found";
        }
    }
}