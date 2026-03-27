<?php
// views/login_form.php
if (session_status() === PHP_SESSION_NONE) session_start();
// $login_error may be set by login.php
$login_error = $login_error ?? null;
$old_user = $_POST['username'] ?? '';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Iniciar sesión · Mi App de Averías</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light p-3">

        <?php include 'views/common/navbar.php'; ?>

        <div class="container mt-5" style="max-width: 480px;">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="card-title mb-3">Iniciar sesión</h4>

                    <?php if (!empty($login_error)): ?>
                        <div class="alert alert-danger" role="alert"><?= htmlspecialchars($login_error) ?></div>
                    <?php endif; ?>

                    <form method="post" action="/controllers/auth.php">
                        <div class="mb-3">
                            <label for="username" class="form-label">Usuario</label>
                            <input type="text" class="form-control" id="username" name="username" required value="<?= htmlspecialchars($old_user) ?>">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <button class="btn btn-primary" type="submit">Entrar</button>
                            <a href="/" class="btn btn-link">Volver</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
