<?php
$producto = isset($_GET['producto']) ? htmlspecialchars($_GET['producto']) : 'Producto desconocido';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Confirmación de Pedido</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header>
        <h1>¡Pedido Confirmado!</h1>
    </header>
    <main>
        <p>Gracias por tu compra. Has pedido: <strong><?php echo $producto; ?></strong>.</p>
        <p><strong>Tu pedido ya está realizado, te esperamos para que lo retires.</strong></p>
        <p>Si tienes dudas, contactanos.</p>
    </main>
</body>
</html>