<?php
session_start();

require_once __DIR__ . '/../config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . BASE_URL . '/login');
    exit;
}

require_once __DIR__ . '/../config/users.php';

$username = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? '';

if ($username === '' || $password === '') {
    $_SESSION['login_error'] = 'Ingrese usuario y contraseña.';
    header('Location: ' . BASE_URL . '/login');
    exit;
}

if (isset($users[$username]) && password_verify($password, $users[$username]['password'])) {
    // Autenticación OK
    $_SESSION['user'] = [
        'username' => $users[$username]['username'],
        'name' => $users[$username]['name'],
        'role' => $users[$username]['role'],
    ];

    // Redirigir según rol
    header('Location: ' . BASE_URL . '/home');
    exit;
} else {
    // $_SESSION['login_error'] = 'Credenciales incorrectas.';
    // header('Location: ' . BASE_URL . '/login');
    // exit;
}

?>

si estás aquí es que algo ha salido mal
