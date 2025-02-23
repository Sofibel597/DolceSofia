<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Cuenta</title>
</head>
<body>
<!-- Account Section -->
<section class="container my-5">
    <h2>Mi Cuenta</h2>
    
    <!-- Datos del usuario -->
    <div class="card p-4">
        <h4>Información del Usuario</h4>
        <p><strong>Nombre:</strong> <span id="user-name"></span></p>
        <p><strong>Email:</strong> <span id="user-email"></span></p>
        <p><strong>Dirección:</strong> <span id="user-address"></span></p>
    </div>
    
    <!-- Botón de eliminar cuenta -->
    <div class="mt-4">
        <button class="btn btn-danger" onclick="deleteAccount()">Eliminar Cuenta</button>
    </div>
</section>
</body>
</html>