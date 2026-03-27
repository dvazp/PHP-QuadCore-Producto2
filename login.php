<?php
session_start();

// A casita si ya estás logueado
if (!empty($_SESSION['user'])) {
    header('Location: /home');
    exit;
}

$login_error = $_SESSION['login_error'] ?? null;
unset($_SESSION['login_error']);

require_once __DIR__ . '/views/login_form.php';

?>
