<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Producto</title>
</head>
<body>
    <h1><?php echo $producto->obtenerNombre(); ?></h1>
    <p>Descripcion: <?php echo $producto->obtenerDescripcion(); ?></p>
    <p>Precio: $<?php echo $producto->obtenerPrecio(); ?></p>
</body>
</html>