<?php
require_once 'controllers/ProductoController.php';

// Simulación de una petición, por ejemplo ?id=1
$id = $_GET['id'] ?? 1; // ID del producto a mostrar
// Crear el controlador
$controller = new ProductoController();
$controller->mostrarProducto($id);
?>