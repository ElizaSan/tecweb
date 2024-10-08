<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $precio = $_POST['precio'];

    // Validaciones adicionales del lado del servidor (opcional)
    if (empty($nombre) || empty($marca) || empty($modelo) || empty($precio)) {
        echo "Todos los campos son obligatorios.";
    } else if ($precio <= 0) {
        echo "El precio debe ser mayor a 0.";
    } else {
        // Aquí puedes procesar los datos, por ejemplo, guardarlos en una base de datos
        echo "Producto registrado: <br>";
        echo "Nombre: " . htmlspecialchars($nombre) . "<br>";
        echo "Marca: " . htmlspecialchars($marca) . "<br>";
        echo "Modelo: " . htmlspecialchars($modelo) . "<br>";
        echo "Precio: $" . htmlspecialchars($precio) . "<br>";
    }
}
?>
