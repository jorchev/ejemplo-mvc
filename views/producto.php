<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Producto</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1><?php echo $producto->obtenerNombre(); ?></h1>
    <p><img src="<?php echo $producto->obtenerImagen(); ?>"> <strong>Descripcion:</strong> <?php echo $producto->obtenerDescripcion();?></p>
    <p><strong>Precio:</strong> $<?php echo $producto->obtenerPrecio(); ?></p>
</body>
</html>