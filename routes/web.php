<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {

    case '/portfolio':
    case '/portfolio/':

        $controller = new HomeController();
        $controller->index();
        break;

    default:
        echo "404 Not Found";
}