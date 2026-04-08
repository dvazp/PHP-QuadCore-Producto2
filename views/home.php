<?php
session_start();
$rol = $_SESSION['user']['role'] ?? null;
if (!$rol) {
    // Redirigir a la página principal según el rol

    require_once __DIR__ . '/../config.php';

    header('Location: ' . BASE_URL . '/');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mi App de Averías</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light p-3">

        <?php include 'views/common/navbar.php'; ?>

        <?php if ($rol): ?>
            <div class="container">
                <h1>Bienvenido, <?= htmlspecialchars($_SESSION['user']['name']) ?>!</h1>
                <p>Tu rol es: <strong><?= htmlspecialchars($rol) ?></strong>.</p>
            </div>
        <?php endif; ?>
        <?php if (!$rol): ?>
            <div class="container">
                <h1>Bienvenido a la App de Averías</h1>
                <p>Por favor, <a href="login">inicia sesión</a> para continuar.</p>
            </div>
        <?php endif; ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>