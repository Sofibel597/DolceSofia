<?php
// Aquí puedes manejar la lógica del pago
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pagá tu pedido</title>
    <link rel="stylesheet" href="estilos.css"> <!-- Vincula tu CSS -->
</head>
<body>
    <header>
        <h1>Selecciona el método de pago</h1>
    </header>
    <main>
    <form action="procesar_pago.php" method="POST">
    <p>Seleccionaste el producto: <strong><?php echo htmlspecialchars($_GET['producto']); ?></strong></p>
    <p>Precio: <strong><?php echo htmlspecialchars($_GET['precio']); ?> pesos</strong></p>
    <label for="metodo_pago">Elegí un método de pago:</label>
    <select name="metodo_pago" id="metodo_pago" required>
        <option value="">Selecciona un método</option>
        <option value="tarjeta">Tarjeta de crédito/débito</option>
        <option value="efectivo">Efectivo</option>
        <option value="transferencia">Transferencia bancaria</option>
    </select>
    <input type="hidden" name="producto" value="<?php echo htmlspecialchars($_GET['producto']); ?>">
    <input type="hidden" name="precio" value="<?php echo htmlspecialchars($_GET['precio']); ?>">
    <button type="submit" name="accion" value="pagar">Pagar ahora</button>
    <button type="submit" name="accion" value="arrepentimiento">Cancelar pedido</button>
</form>

    </main>
</body>
</html>
