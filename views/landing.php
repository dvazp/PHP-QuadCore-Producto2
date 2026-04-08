<?php
session_start();
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

        <div class="container mt-5" 
            style="transition: transform 0.3s ease; object-position: center;"
            onmouseover="this.style.transform='scale(1.01)';"
            onmouseout="this.style.transform='scale(1)';">
            <div class="p-5 mb-4 bg-light rounded-3" style="height: 80vh; overflow: hidden;">
                <div class="container-fluid pb-5">
                    <h1 class="display-5 fw-bold">App de fontanería</h1>
                    <p class="col-md-8 fs-4">
                        Bienvenido a nuestra aplicación de gestión de averías de fontanería. Aquí podrás reportar tus problemas, seguir el estado de tus solicitudes y comunicarte con nuestros técnicos.
                    </p>
                    <button class="btn btn-primary btn-lg" type="button" href="login">Iniciar sesión</button>
                </div>
                <img src="https://escuelaartesania.com/wp-content/uploads/AOF094.jpg" 
                    alt="Imagen de fontanería" 
                    class="rounded shadow-sm" 
                    style="max-height: 60%; object-fit: cover; width: 100%;">
            </div>
        </div>
        <div class="container mt-5" 
            style="transition: transform 0.3s ease; object-position: center;"
            onmouseover="this.style.transform='scale(1.01)';"
            onmouseout="this.style.transform='scale(1)';">
            <div class="p-5 mb-4 bg-light rounded-3 flex-md-row-reverse d-md-flex align-items-center gap-4">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">Cliente</h1>
                    <p class="col-md-8 fs-4">
                        Si eres cliente podrás ver tus solicitudes, crear nuevas y modificar tu perfil.
                    </p>
                    <button class="btn btn-primary btn-lg" type="button">Ir a la sección cliente</button>
                </div>
                <img src="https://img.freepik.com/foto-gratis/hombre-feliz-pulgares-arriba_1187-3144.jpg?semt=ais_hybrid&w=740&q=80" class="img-fluid rounded" style="max-width: 50%;" alt="Imagen de fontanería">
            </div>
        </div>
        <div class="container mt-5" 
            style="transition: transform 0.3s ease; object-position: center;"
            onmouseover="this.style.transform='scale(1.01)';"
            onmouseout="this.style.transform='scale(1)';">
            <div class="p-5 mb-4 bg-light rounded-3 d-md-flex align-items-center justify-content-center gap-4">
                <div class="text-end py-5"> 
                    <h1 class="display-5 fw-bold">Técnico</h1>
                    <p class="fs-4 mb-4">
                        Consulta tu agenda en cualquier momento<br>y desde cualquier lugar!
                    </p>
                    <button class="btn btn-primary btn-lg" type="button">Ir a la sección técnico</button>
                </div>

                <img src="https://img.freepik.com/fotos-premium/feliz-fontanero-sosteniendo-llave-sentado-al-lado-fregadero_13339-253882.jpg" 
                    class="img-fluid rounded shadow-sm" 
                    style="max-width: 40%;" 
                    alt="Imagen de fontanería">
            </div>
        </div>
        <div class="container mt-5" 
            style="transition: transform 0.3s ease; object-position: center;"
            onmouseover="this.style.transform='scale(1.01)';"
            onmouseout="this.style.transform='scale(1)';">
            <div class="p-5 mb-4 bg-light rounded-3 flex-md-row-reverse d-md-flex align-items-center gap-4">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">Administrador</h1>
                    <p class="col-md-8 fs-4">
                        Si eres administrador podrás gestionar las solicitudes, usuarios y el sistema.
                    </p>
                    <button class="btn btn-primary btn-lg" type="button">Ir a la sección administrador</button>
                </div>
                <img src="https://i.imgur.com/s5Z3zi5.gif" class="img-fluid rounded" style="max-width: 50%;" alt="Imagen de admin">
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>