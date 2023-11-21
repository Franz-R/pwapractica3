<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <style>
        .producto {
            border: 1px solid #ccc;
            margin: 10px;
            padding: 10px;
            text-align: center;
            background-color: #FEF5E7;
            box-shadow: 2px 2px 2px 0.02px;
        }
    </style>
</head>
<body>

    <?php
    // Incluye el archivo con los datos de los productos
    include('productos.php');

    // Itera sobre el arreglo de productos para mostrarlos
    foreach ($productos as $producto) {
        echo '<div class="producto">';
        echo '<img src="' . $producto['imagen'] . '" alt="' . $producto['nombre'] . '" width="150" height="150"><br>';
        echo '<strong>' . $producto['nombre'] . '</strong><br>';
        echo '<p>' . $producto['descripcion'] . '</p>';
        echo '<p>Precio: $' . $producto['precio'] . '</p>';
        echo '<button onclick="agregarAlCarrito(' . $producto['id'] . ')">Agregar al carrito</button>';
        echo '</div>';
    }
    ?>

    <script>
        function agregarAlCarrito(productoId) {
            // Aquí puedes implementar la lógica para agregar productos al carrito (puedes usar JavaScript o realizar una solicitud a un servidor)
            alert('Producto agregado al carrito con ID: ' + productoId);
        }
    </script>

</body>
</html>
