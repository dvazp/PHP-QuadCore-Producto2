<?php
$request = $_SERVER['REQUEST_URI'];

$full_prefix = "https://fp064.techlab.uoc.edu/~uocx8";
$base_path = "/~uocx8";

if (strpos($request, $full_prefix) === 0) {
    $request = substr($request, strlen($full_prefix));
}

$path = parse_url($request, PHP_URL_PATH);

function cleanPath($path, $base, $index = '/index.php') {
    if (strpos($path, $base) === 0) {
        $path = substr($path, strlen($base));
    }
    return str_replace($index, '', $path);
}

$relative_path = cleanPath($path, $base_path);

if ($relative_path == '' || $relative_path == '/') {
    $relative_path = '/';
}

error_log("relative_path " . $relative_path);

switch ($relative_path) {
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
?>