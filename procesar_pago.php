<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Leer los datos enviados desde el formulario
    $metodo_pago = isset($_POST['metodo_pago']) ? $_POST['metodo_pago'] : null;
    $producto = isset($_POST['producto']) ? $_POST['producto'] : null;
    $precio = isset($_POST['precio']) ? $_POST['precio'] : null;
    $accion = isset($_POST['accion']) ? $_POST['accion'] : null;

    // Depurar datos recibidos
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";

    // Validar si se seleccionó un método de pago
    if (empty($metodo_pago)) {
        echo "No se seleccionó un método de pago.";
        exit;
    }

    // Procesar el método de pago
    switch ($metodo_pago) {
        case 'tarjeta':
            echo "Procesando el pago con tarjeta para el producto $producto por $precio pesos.";
            break;
        case 'transferencia':
            echo "Por favor realiza la transferencia bancaria para $producto por $precio pesos.";
            break;
        case 'efectivo':
            echo "Procesando el pago en efectivo para el producto $producto por $precio pesos.";
            break;
        default:
            echo "Método de pago no válido.";
            break;
    }

    // Procesar la acción
    if ($accion === 'pagar') {
        echo "Procesando el pago...";
    } elseif ($accion === 'arrepentimiento') {
        echo "Pedido cancelado. Lamentamos que te hayas arrepentido.";
    } else {
        echo "Acción no válida.";
    }
} else {
    echo "Acceso no autorizado.";
}
?>

