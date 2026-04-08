<?php
$request = $_SERVER['REQUEST_URI'];
$path = parse_url($request, PHP_URL_PATH);

$base_path = '/~uocx8'; 
$relative_path = str_replace([$base_path, '/index.php'], ['', ''], $path);

console_log("Request URI: " . $request);
console_log("Parsed Path: " . $path);
console_log("Relative Path: " . $relative_path);

if ($relative_path == '') {
    $relative_path = '/';
}

switch ($relative_path) {
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