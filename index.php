<?php
$request = $_SERVER['REQUEST_URI'];
$path = parse_url($request, PHP_URL_PATH);

switch ($path) {
    case '/':
    case '/':
        require 'views/landing.php';
        break;
    case '/home':
        require 'views/home.php';
        break;
    case '/login':
        require 'views/login.php';
        break;
    case '/logout':
        require 'logout.php';
        break;

    case '/api/usuarios':
        header('Content-Type: application/json');
        echo json_encode(['usuario' => 'Juan']);
        break;

    default:
        http_response_code(404);
        echo "Error 404 - Página no encontrada";
        break;
}