<?php
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($request) {

    case '/':
        $controller = new HomeController();
        $controller->index();
        break;

    default:
        http_response_code(404);
        echo "404 Not Found";
}