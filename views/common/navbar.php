<?php
$rol = $_SESSION['user']['role'] ?? null; 
?>
<div class="bg-white py-3 px-5 rounded shadow-sm mb-4">
    <ul class="navbar-nav me-auto flex-row" style="gap: 15px;">
        <li class="nav-item"><a class="nav-link" href="home">Inicio</a></li>

        <?php if (!$rol): ?>
            <li class="nav-item ms-auto"><a class="nav-link" href="login">Iniciar sesión</a></li>

        <?php elseif ($rol === 'admin'): ?>
            <li class="nav-item ms-auto"><a class="nav-link" href="gestion_avisos.php">Gestionar Avisos</a></li>
            <li class="nav-item"><a class="nav-link" href="calendario.php">Calendario General</a></li>
            <li class="nav-item"><a class="nav-link" href="asignar_tecnico.php">Asignar Técnicos</a></li>
            <li class="nav-item" style="font-weight: bold; color: red;"><a class="nav-link" href="logout">Cerrar sesión</a></li>

        <?php elseif ($rol === 'cliente'): ?>
            <li class="nav-item ms-auto"><a class="nav-link" href="mis_avisos.php">Mis Avisos</a></li>
            <li class="nav-item"><a class="nav-link" href="nuevo_aviso.php">Nueva Solicitud</a></li>
            <li class="nav-item" style="font-weight: bold; color: red;"><a class="nav-link" href="logout">Cerrar sesión</a></li>

        <?php elseif ($rol === 'tecnico'): ?>
            <li class="nav-item ms-auto"><a class="nav-link" href="agenda.php">Mi Agenda</a></li>
            <li class="nav-item" style="font-weight: bold; color: red;"><a class="nav-link" href="logout">Cerrar sesión</a></li>
        <?php endif; ?>
    </ul>
</div>